<?php

namespace App\Http\Controllers;

use App\Models\DaftarMustahik;
use App\Models\Lampiran;
use App\Models\Mustahik;
use App\Models\Pengurus;
use App\Models\Permohonan;
use App\Models\Surat;
use App\Models\Upz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DetailPermohonanController extends Controller
{
    public function index($permohonan_id)
    {
        // dd(session('activeTab'));
        $detail_permohonan = Permohonan::leftJoin('upz', 'upz.upz_id', '=', 'permohonan.upz_id')
        ->join('surat', 'surat.surat_id', '=', 'permohonan.surat_id')
        ->where('permohonan.permohonan_id', $permohonan_id)
        ->select('permohonan.*', 'upz.*', 'surat.*')
        ->orderBy('permohonan.created_at', 'desc')
        ->first();

        $daftar_mustahik = DaftarMustahik::join('mustahik', 'mustahik.mustahik_id', '=', 'daftar_mustahik.mustahik_id')
        ->where('daftar_mustahik.permohonan_id', $permohonan_id)
        ->select('mustahik.*', 'daftar_mustahik.*')
        ->get();

        $lampiran = Lampiran::where('permohonan_id', $permohonan_id)
        ->where('jenis', 'Permohonan')
        ->select('lampiran.*')
        ->get();

        $lampiran_survey = Lampiran::where('permohonan_id', $permohonan_id)
        ->where('jenis', 'Survey')
        ->select('lampiran.*')
        ->get();

        $lampiran_pencairan = Lampiran::where('permohonan_id', $permohonan_id)
        ->where('jenis', 'Pencairan')
        ->select('lampiran.*')
        ->get();

        // dd($detail_permohonan);
        $petugas_survey = Pengurus::join('jabatan', 'jabatan.jabatan_id', '=', 'pengurus.jabatan_id')
        ->join('divisi', 'divisi.divisi_id', '=', 'jabatan.divisi_id')
        ->join('pengguna', 'pengguna.pengurus_id', '=', 'pengurus.pengurus_id')
        ->where('divisi.divisi_id', '041a203d-80bb-45ef-acc8-0c0edeafd747') // Pastikan where menggunakan divisi.divisi_id
        ->select('pengguna.pengurus_id', 'pengguna.nama')
        ->get();



        return view('permohonan.show', ['permohonan_id' => $permohonan_id,
        'detail_permohonan' => $detail_permohonan,
        'daftar_mustahik' => $daftar_mustahik,
        'lampiran' => $lampiran,
        'petugas_survey' => $petugas_survey,
        'lampiran_survey' => $lampiran_survey,
        'lampiran_pencairan' => $lampiran_pencairan,]);
    }

    public function destroy($id)
    {
        try {
            $permohonan = Permohonan::findOrFail($id);
            $permohonan->delete();

            return response()->json(['message' => 'Permohonan berhasil dihapus.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan saat menghapus.'], 500);
        }

        session()->flash('success', 'Data berhasil dihapus!');
        return redirect()->route('permohonan.index');
    }

    public function destroy_mustahik($id)
    {
        try {
            $daftar = DaftarMustahik::findOrFail($id);
            $mustahik = Mustahik::findOrFail($daftar->mustahik_id);
            $daftar->delete();
            $mustahik->delete();

            session()->flash('success', 'Data berhasil dihapus!');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', 'Data gagal dihapus!');
            return redirect()->back();
        }

        
    }

    public function destroy_lampiran($id)
    {
        try {
            $lampiran = Lampiran::findOrFail($id);
            $lampiran->delete();

            session()->flash('success', 'Data berhasil dihapus!');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', 'Data gagal dihapus!');
            return redirect()->back();
        }

        
    }

    public function destroy_lampiran_pencairan($id)
    {
        try {
            $lampiran = Lampiran::findOrFail($id);
            $lampiran->delete();

            session()->flash('success', 'Data berhasil dihapus!');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', 'Data gagal dihapus!');
            return redirect()->back();
        }

        
    }

    public function destroy_lampiran_survey($id)
    {
        try {
            $lampiran = Lampiran::findOrFail($id);
            $lampiran->delete();

            session()->flash('success', 'Data berhasil dihapus!');
            return redirect()->back();
        } catch (\Exception $e) {
            session()->flash('error', 'Data gagal dihapus!');
            return redirect()->back();
        }

        
    }

    public function update(Request $request, $id)
    {
        $permohonan = Permohonan::findOrFail($id);
        $permohonan->permohonan_jenis = $request->permohonan_jenis_edit;
        $permohonan->permohonan_nomor = $request->permohonan_nomor_edit;
        $permohonan->asnaf_id = $request->asnaf_id_edit;
        $permohonan->program_id = $request->program_id_edit;
        $permohonan->sub_program_id = $request->sub_program_id_edit;
        $permohonan->permohonan_nominal = $request->permohonan_nominal_edit;
        $permohonan->permohonan_bentuk_bantuan = $request->permohonan_bentuk_bantuan_edit;
        $permohonan->permohonan_catatan_input = $request->permohonan_catatan_input_edit;

        if ($request->permohonan_jenis_edit == 'BAZNAS') {
            $permohonan->permohonan_nama_pemohon = $request->permohonan_nama_pemohon_edit;
            $permohonan->permohonan_nohp_pemohon = $request->permohonan_nohp_pemohon_edit;
            $permohonan->permohonan_alamat_pemohon = $request->permohonan_alamat_pemohon_edit;
        } else {
            $upzis = Upz::where('upz_id', $permohonan->upz_id)->first();
            $upzis->nohp = $request->nohp_edit;
            $upzis->alamat = $request->alamat_edit;
            $upzis->pj_nama = $request->pj_nama_edit;
            $upzis->pj_jabatan = $request->pj_jabatan_edit;
            $upzis->pj_nohp = $request->pj_nohp_edit;
            $upzis->keterangan = $request->keterangan_edit;

            $upzis->save();
        }

        $permohonan->save();

        $surat = Surat::where('surat_id', $permohonan->surat_id)->first();
        $surat->surat_judul = $request->surat_judul_edit;
        $surat->surat_nomor = $request->surat_nomor_edit;
        $surat->surat_tgl = $request->surat_tgl_edit;

        if ($request->hasFile('surat_url_edit')) {
            // Simpan file baru
            $file = $request->file('surat_url_edit');
            $filePath = $file->store('permohonan', 'public');
            $surat->surat_url = $filePath;
        }
        
        $surat->save();

        session()->flash('success', 'Data berhasil diubah!');
        return redirect()->back();
    }

    public function update_mustahik(Request $request, $id)
    {
        $daftar = DaftarMustahik::findOrFail($id);
        $mustahik = Mustahik::findOrFail($daftar->mustahik_id);
        $mustahik->nama = $request->nama_edit;
        $mustahik->nik = $request->nik_edit;
        $mustahik->kk = $request->kk_edit;
        $mustahik->tempat_lahir = $request->tempat_lahir_edit;
        $mustahik->tgl_lahir = $request->tgl_lahir_edit;
        $mustahik->alamat = $request->alamat_edit;
        $mustahik->nohp = $request->nohp_edit;
        $mustahik->email = $request->email_edit;
        $mustahik->jenis_kelamin = $request->jenis_kelamin_edit;
        $mustahik->asnaf_id = $request->asnaf_id_edit;
        $mustahik->rt = $request->rt_edit;
        $mustahik->rw = $request->rw_edit;
        $mustahik->foto_url = $request->foto_url_edit;
        $mustahik->foto_kk = $request->foto_kk_edit;
        $mustahik->foto_ktp = $request->foto_ktp_edit;
        $mustahik->save();

        session()->flash('success', 'Data mustahik berhasil diubah!');
        return redirect()->back();
    }

    public function permohonanSelesai($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        $permohonan->permohonan_status_input = 'Selesai Input';
        $permohonan->save();

        session()->flash('success', 'Pengajuan selesai diinput!');
        return redirect()->back();
    }

    public function permohonanBatal($id)
    {
        $permohonan = Permohonan::findOrFail($id);
        $permohonan->permohonan_status_input = 'Belum Selesai Input';
        $permohonan->save();

        session()->flash('success', 'Pengajuan berhasil dibatalkan!');
        return redirect()->back();
    }

    public function tambah_mustahik(Request $request, $id)
    {

        if ($request->foto_url) {
            $ext = $request->file('foto_url')->extension();
            $file_mustahik = Str::uuid()->toString() . '.' . $ext;
            $request->file('foto_url')->move(public_path('mustahik'), $file_mustahik);
        }

        if ($request->foto_kk) {
            $ext = $request->file('foto_kk')->extension();
            $file_kk = Str::uuid()->toString() . '.' . $ext;
            $request->file('foto_kk')->move(public_path('mustahik'), $file_kk);
        }

        if ($request->foto_ktp) {
            $ext = $request->file('foto_ktp')->extension();
            $file_ktp = Str::uuid()->toString() . '.' . $ext;
            $request->file('foto_ktp')->move(public_path('mustahik'), $file_ktp);
        }


        // Simpan data permohonan ke database
         $mustahik = Mustahik::create([
            'mustahik_id' => Str::uuid(),
            'nama' => $request->nama,
            'nik' => $request->nik,
            'kk' => $request->kk,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'asnaf_id' => $request->asnaf_id,
            'rt' => $request->rt,
            'rw' => $request->rw
        ]);

        DaftarMustahik::create([
            'daftar_mustahik_id' => Str::uuid(),
            'permohonan_id' => $id,
            'mustahik_id' => $mustahik->mustahik_id
        ]);

        // Redirect ke halaman detail permohonan
        session()->flash('success', 'Data mustahik berhasil ditambahkan!');
        return redirect()->back();
    }

    public function tambah_lampiran(Request $request, $id)
    {
        $ext = $request->file('url')->extension();
        $file_lampiran = Str::uuid()->toString() . '.' . $ext;
        $request->file('url')->move(public_path('lampiran'), $file_lampiran);

        Lampiran::create([
            'lampiran_id' => Str::uuid(),
            'permohonan_id' => $id,
            'keterangan' => $request->keterangan,
            'url' => $file_lampiran,
            'jenis' => 'Permohonan'
        ]);

        session()->flash('success', 'Lampiran berhasil ditambahkan!');
        return redirect()->back();
    }

    public function tambah_lampiran_survey(Request $request, $id)
    {
        $ext = $request->file('url')->extension();
        $file_lampiran = Str::uuid()->toString() . '.' . $ext;
        $request->file('url')->move(public_path('lampiran_survey'), $file_lampiran);

        Lampiran::create([
            'lampiran_id' => Str::uuid(),
            'permohonan_id' => $id,
            'url' => $file_lampiran,
            'jenis' => 'Survey',
            'keterangan' => $request->keterangan,
        ]);

        session()->flash('success', 'Lampiran berhasil ditambahkan!');
        return redirect()->route('permohonan.detail', $id)
        ->with('activeTab', $request->tab);
    }

    public function tambah_lampiran_pencairan(Request $request, $id)
    {
        $ext = $request->file('url')->extension();
        $file_lampiran = Str::uuid()->toString() . '.' . $ext;
        $request->file('url')->move(public_path('lampiran_pencairan'), $file_lampiran);

        Lampiran::create([
            'lampiran_id' => Str::uuid(),
            'permohonan_id' => $id,
            'url' => $file_lampiran,
            'jenis' => 'Pencairan',
            'keterangan' => $request->keterangan,
        ]);

        session()->flash('success', 'Lampiran berhasil ditambahkan!');
        return redirect()->route('permohonan.detail', $id)
        ->with('activeTab', $request->tab);
    }

    public function update_lampiran(Request $request, $id)
    {
        $lampiran = Lampiran::findOrFail($id);
        $lampiran->keterangan = $request->keterangan_edit;
        if ($request->hasFile('url_edit')) {
            // Simpan file baru
            $file = $request->file('url_edit');
            $filePath = $file->store('lampiran', 'public');
            $lampiran->url = $filePath;
        }

        $lampiran->save();

        session()->flash('success', 'Lampiran berhasil diubah!');
        return redirect()->back();
    }

    public function update_lampiran_survey(Request $request, $id)
    {
        $lampiran = Lampiran::findOrFail($id);
        $lampiran->keterangan = $request->keterangan_edit;
        if ($request->hasFile('url_edit')) {
            // Simpan file baru
            $file = $request->file('url_edit');
            $filePath = $file->store('lampiran_survey', 'public');
            $lampiran->url = $filePath;
        }

        $lampiran->save();

        session()->flash('success', 'Lampiran berhasil diubah!');
        return redirect()->route('permohonan.detail', $request->permohonan_id)
        ->with('activeTab', $request->tab);
    }

    public function update_lampiran_pencairan(Request $request, $id)
    {
        $lampiran = Lampiran::findOrFail($id);
        $lampiran->keterangan = $request->keterangan_edit;
        if ($request->hasFile('url_edit')) {
            // Simpan file baru
            $file = $request->file('url_edit');
            $filePath = $file->store('lampiran_pencairan', 'public');
            $lampiran->url = $filePath;
        }

        $lampiran->save();

        session()->flash('success', 'Lampiran berhasil diubah!');
        return redirect()->route('permohonan.detail', $request->permohonan_id)
        ->with('activeTab', $request->tab);
    }

    public function acc(Request $request)
    {
        // dd($request->tab);
        $permohonan = Permohonan::find($request->permohonan_id);
        $permohonan->update([
        'permohonan_timestamp_atasan' => $request->permohonan_timestamp_atasan,
        'survey_pilihan' => $request->survey_pilihan,
        'permohonan_catatan_atasan' => $request->permohonan_catatan_atasan,
        'permohonan_status_atasan' => 'Diterima',
        'permohonan_petugas_atasan' => Auth::user()->pengurus_id,
        'survey_petugas_survey' => $request->survey_petugas_survey ?? null,
    ]);
    
    session()->flash('success', 'Pengajuan berhasil di ACC!');
    return redirect()->route('permohonan.detail', $request->permohonan_id)
    ->with('activeTab', $request->tab);


    }

    public function pencairan(Request $request)
    {
        // dd($request->tab);
        $permohonan = Permohonan::find($request->permohonan_id);
        $permohonan->update([
        'pencairan_timestamp' => $request->pencairan_timestamp,
        'pencairan_nominal' => $request->pencairan_nominal,
        'pencairan_catatan' => $request->pencairan_catatan,
        'pencairan_status' => 'Berhasil Dicairkan',
        'pencairan_petugas_keuangan' => Auth::user()->pengurus_id,
    ]);
    
    session()->flash('success', 'Pencairan berhasil dicairkan!');
    return redirect()->route('permohonan.detail', $request->permohonan_id)
    ->with('activeTab', $request->tab);


    }

    public function tolak_pencairan(Request $request)
    {
        // dd($request->tab);
        $permohonan = Permohonan::find($request->permohonan_id);
        $permohonan->update([
        'pencairan_timestamp' => $request->pencairan_timestamp,
        'pencairan_nominal' => null,
        'pencairan_catatan' => $request->pencairan_catatan,
        'pencairan_status' => 'Ditolak',
        'pencairan_petugas_keuangan' => Auth::user()->pengurus_id,
    ]);
    
    session()->flash('success', 'Pencairan berhasil ditolak!');
    return redirect()->route('permohonan.detail', $request->permohonan_id)
    ->with('activeTab', $request->tab);


    }

    public function tolak(Request $request)
    {
        // dd($request->tab);

        $permohonan = Permohonan::find($request->permohonan_id);
        $permohonan->update([
        'permohonan_timestamp_atasan' => $request->permohonan_timestamp_atasan,
        'survey_pilihan' => null,
        'permohonan_catatan_atasan' => $request->permohonan_catatan_atasan,
        'permohonan_status_atasan' => 'Ditolak',
        'permohonan_petugas_atasan' => Auth::user()->pengurus_id,
        'survey_petugas_survey' => null,
    ]);
    
    session()->flash('success', 'Pengajuan berhasil di ACC!');
    return redirect()->route('permohonan.detail', $request->permohonan_id)
    ->with('activeTab', $request->tab);


    }

    public function survey(Request $request)
    {
        // dd($request->survey_form_url);
        $ext = $request->file('survey_form_url')->extension();
        $file_scan_name = Str::uuid()->toString() . '.' . $ext;
        $request->file('survey_form_url')->move(public_path('survey'), $file_scan_name);

        $permohonan = Permohonan::find($request->permohonan_id);
        $permohonan->update([
        'survey_tgl' => $request->survey_tgl,
        'survey_hasil' => $request->survey_hasil,
        'survey_form_url' => $file_scan_name,
        'survey_status' => 'Selesai',
        'survey_petugas_survey' => Auth::user()->pengurus_id,
    ]);
    
    session()->flash('success', 'Survey telah selesai!');
    return redirect()->route('permohonan.detail', $request->permohonan_id)
    ->with('activeTab', $request->tab);


    }

}
