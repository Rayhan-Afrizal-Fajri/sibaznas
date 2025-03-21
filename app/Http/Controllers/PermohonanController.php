<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\SubProgram;
use App\Models\Surat;
use App\Models\Upz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        

        $filter_daterange = session('filter_daterange', now()->startOfMonth()->format('Y-m-d') . ' - ' . now()->endOfMonth()->format('Y-m-d'));
        $filters_fo = session('filters_fo', 'Semua');
        $filters_atasan = session('filters_atasan', 'Semua');
        $filters_survey = session('filters_survey', 'Semua');
        $filters_pencairan = session('filters_pencairan', 'Semua');
        $filters_lpj = session('filters_lpj', 'Semua');

    //     Cek apakah session sudah tersimpan
    // dd([
    //     'filter_daterange' => $filter_daterange,
    //     'filters_fo' => $filters_fo,
    //     'filters_atasan' => $filters_atasan,
    //     'filters_survey' => $filters_survey,
    //     'filters_pencairan' => $filters_pencairan,
    //     'filters_lpj' => $filters_lpj,
    // ]);
    
        // Pisahkan tanggal range jika ada
        $start_date = null;
        $end_date = null;

        if ($filter_daterange) {
            $dates = explode(' - ', $filter_daterange);
            $start_date = $dates[0] ?? null;
            $end_date = $dates[1] ?? null;
        }

        // Kalau masih null, kasih nilai default (misalnya tanggal hari ini)
        $start_date = $start_date ?? now()->startOfMonth()->format('Y-m-d');
        $end_date = $end_date ?? now()->endOfMonth()->format('Y-m-d');
    
        $data = DB::table('permohonan')
            ->leftJoin('upz', 'upz.upz_id', '=', 'permohonan.upz_id')
            ->select('permohonan.*', 'upz.*')
            ->when($start_date && $end_date, function ($query) use ($start_date, $end_date) {
                if ($start_date == $end_date) {
                    return $query->whereDate('permohonan_tgl', '=', $start_date);
                } else {
                    return $query->whereBetween('permohonan_tgl', [$start_date, $end_date]);
                }
            })
            ->when($filters_fo && $filters_fo !== 'Semua', function ($query) use ($filters_fo) {
                return $query->where('permohonan_status_input', $filters_fo);
            })
            ->when($filters_atasan && $filters_atasan !== 'Semua', function ($query) use ($filters_atasan) {
                if ($filters_atasan === 'Belum Dicek') {
                    return $query->where('permohonan_status_input', 'Selesai Input');
                } else {
                    return $query->where('permohonan_status_atasan', $filters_atasan);
                }
            })
            ->when($filters_survey && $filters_survey !== 'Semua', function ($query) use ($filters_survey) {
                return $query->where('survey_pilihan', $filters_survey);
            })
            ->when($filters_pencairan && $filters_pencairan !== 'Semua', function ($query) use ($filters_pencairan) {
                if ($filters_pencairan === 'Belum Dicairkan') {
                    return $query->where('permohonan_status_atasan', 'Diterima');
                } else {
                    return $query->where('pencairan_status', $filters_pencairan);
                }
            })
            ->when($filters_lpj && $filters_lpj !== 'Semua', function ($query) use ($filters_lpj) {
                if ($filters_lpj === 'Belum LPJ') {
                    return $query->where('permohonan_status_atasan', 'Diterima');
                } else {
                    return $query->where('permohonan_status_atasan', 'Diterima');
                }
            })
            ->orderBy('permohonan.created_at', 'desc')
            ->get();
    // dd($data);
        return view('permohonan.index', compact(
            'start_date',
            'end_date',
            'filter_daterange',
            'data'
        ));
    }

    public function permohonan_post(Request $request)
    {
        
        $filter_daterange = $request->input('filter_daterange', now()->startOfMonth()->format('Y-m-d') . ' - ' . now()->endOfMonth()->format('Y-m-d'));
        $filters_fo = $request->input('filters_fo') ?? 'Semua';
        $filters_atasan = $request->input('filters_atasan') ?? 'Semua';
        $filters_survey = $request->input('filters_survey') ?? 'Semua';
        $filters_pencairan = $request->input('filters_pencairan') ?? 'Semua';
        $filters_lpj = $request->input('filters_lpj') ?? 'Semua';

        session([
            'filter_daterange' => $filter_daterange,
            'filters_fo' => $filters_fo,
            'filters_atasan' => $filters_atasan,
            'filters_survey' => $filters_survey,
            'filters_pencairan' => $filters_pencairan,
            'filters_lpj' => $filters_lpj,
        ]);

        return redirect()->back();
    }

    public function getNomorPermohonan(Request $request)
    {
        $jenis = $request->query('jenis');
        $bulanRomawi = [
            '01' => 'I', '02' => 'II', '03' => 'III', '04' => 'IV', 
            '05' => 'V', '06' => 'VI', '07' => 'VII', '08' => 'VIII',
            '09' => 'IX', '10' => 'X', '11' => 'XI', '12' => 'XII'
        ];
        $romawi = $bulanRomawi[date('m')];

        // Ambil nomor permohonan terakhir
        $a = Permohonan::whereYear('created_at', date('Y'))
            ->where('permohonan_jenis', $jenis)
            ->latest()
            ->first();

        $urut = $a ? intval(explode('/', $a->permohonan_nomor)[0]) : 0;
        $nomor_baru = str_pad($urut + 1, 2, '0', STR_PAD_LEFT) . "/E-DISDAY/$jenis/$romawi/" . date('Y');

        return response()->json(['nomor_permohonan' => $nomor_baru]);
    }

    public function store(Request $request)
    {

        // Simpan file surat ke storage
        $ext = $request->file('surat_url')->extension();
        $file_scan_name = Str::uuid()->toString() . '.' . $ext;
        $request->file('surat_url')->move(public_path('permohonan'), $file_scan_name);

        // Simpan data surat ke database
        $surat = Surat::create([
            'surat_id' => Str::uuid(),
            'surat_judul' => $request->surat_judul,
            'surat_nomor' => $request->surat_nomor,
            'surat_tgl' => $request->surat_tgl,
            'surat_keterangan' => null,
            'surat_url' => $file_scan_name,
        ]);

        // Jika permohonan jenis UPZ, buat data UPZ
        $upz_id = null;
        if ($request->permohonan_jenis === 'UPZ') {
            $upz = Upz::create([
                'upz_id' => Str::uuid(),
                'nohp' => $request->nohp,
                'alamat' => $request->alamat,
                'pj_nama' => $request->pj_nama,
                'pj_jabatan' => $request->pj_jabatan,
                'pj_nohp' => $request->pj_nohp,
                'keterangan' => $request->keterangan,
            ]);
            $upz_id = $upz->upz_id;
        }

        // Simpan data permohonan ke database
        $permohonan = Permohonan::create([
            'permohonan_id' => Str::uuid(),
            'permohonan_jenis' => $request->permohonan_jenis,
            'permohonan_nomor' => $request->permohonan_nomor,
            'permohonan_nama_pemohon' => $request->permohonan_nama_pemohon,
            'permohonan_nohp_pemohon' => $request->permohonan_nohp_pemohon,
            'permohonan_alamat_pemohon' => $request->permohonan_alamat_pemohon,
            'upz_id' => $upz_id,
            'surat_id' => $surat->surat_id,
            'asnaf_id' => $request->asnaf_id,
            'program_id' => $request->program_id,
            'sub_program_id' => $request->sub_program_id,
            'permohonan_nominal' => str_replace('.', '', $request->permohonan_nominal),
            'permohonan_bentuk_bantuan' => $request->permohonan_bentuk_bantuan,
            'permohonan_catatan_input' => $request->permohonan_catatan_input,
            'permohonan_status_input' => 'Belum Selesai Input',
            'permohonan_petugas_input' => Auth::user()->pengurus_id,
            'permohonan_tgl' => date('Y-m-d'),
            'permohonan_timestamp_input' => date('Y-m-d H:i:s'),
        ]);

        // Tentukan pemohon berdasarkan jenis permohonan
        if ($request->permohonan_jenis == "BAZNAS") {
            $pemohon = $request->permohonan_nama_pemohon;
            $nohp = $request->permohonan_nohp_pemohon;
        } elseif ($request->permohonan_jenis == "UPZ") {
            $pemohon = $request->pj_nama;
            $nohp = $request->nohp;
        }

        // Redirect ke halaman detail permohonan
        return redirect()->route('permohonan.detail', $permohonan->permohonan_id)
            ->with('success', 'Permohonan berhasil ditambahkan!');
    }

    public function getSubPrograms($programId)
    {
        $subPrograms = SubProgram::where('program_id', $programId)
            ->whereRaw('LENGTH(no_urut) = 3')
            ->orderBy('no_urut', 'ASC')
            ->get();

        return response()->json($subPrograms);
    }
}
