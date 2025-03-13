<?php

namespace App\Livewire;

use App\Models\Lampiran;
use App\Models\Permohonan;
use App\Models\Program;
use App\Models\SubProgram;
use App\Models\Surat;
use App\Models\Upz;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class DetailPermohonan extends Component
{
    use WithFileUploads;
    public $permohonan_jenis_edit;
    public $permohonan_nomor_edit;
    public $permohonan_nama_pemohon_edit;
    public $permohonan_nohp_pemohon_edit;
    public $permohonan_alamat_pemohon_edit;
    public $upz_edit;
    public $nohp_edit;
    public $alamat_edit;
    public $pj_nama_edit;
    public $pj_jabatan_edit;
    public $pj_nohp_edit;
    public $keterangan_edit;
    public $surat_judul_edit;
    public $surat_nomor_edit;
    public $surat_tgl_edit;
    public $surat_url_edit;
    public $asnaf_id_edit;
    public $program_id_edit;
    public $sub_program_id_edit;
    public $permohonan_nominal_edit;
    public $permohonan_bentuk_bantuan_edit;
    public $permohonan_catatan_input_edit;
    public $sub_programs = [];
    public $permohonan_id;

    public function mount()
    {
        
        // dd($detail_permohonan);
    }

    public function render()
    {
        

        $detail_permohonan = Permohonan::leftJoin('upz', 'upz.upz_id', '=', 'permohonan.upz_id')
        ->join('surat', 'surat.surat_id', '=', 'permohonan.surat_id')
        ->select('permohonan.*', 'upz.*', 'surat.*')
        ->orderBy('permohonan.created_at', 'desc')
        ->first();

        $daftar_mustahik = Permohonan::leftJoin('daftar_mustahik', 'daftar_mustahik.permohonan_id', '=', 'permohonan.permohonan_id')
        ->leftJoin('mustahik', 'mustahik.mustahik_id', '=', 'daftar_mustahik.mustahik_id')
        ->where('daftar_mustahik.permohonan_id', $this->permohonan_id)
        ->select('daftar_mustahik.*', 'mustahik.*')   
        ->get();

        $lampiran = Lampiran::leftJoin('permohonan', 'permohonan.permohonan_id', '=', 'lampiran.permohonan_id')
        ->where('lampiran.permohonan_id', $this->permohonan_id)
        ->get();

        return view('livewire.detail-permohonan', compact(
            'detail_permohonan',
            'daftar_mustahik',
            'lampiran'
        ));
    }

    public function nama_upz($id)
    {
        $a = DB::table('permohonan')->join('upz', 'upz.upz_id', '=', 'permohonan.upz_id')
        ->where('upz.upz_id', $id)->first();
        return $a->nama;
    }

    public function nohp($id)
    {
        $a = DB::table('permohonan')->join('upz', 'upz.upz_id', '=', 'permohonan.upz_id')
        ->where('upz.upz_id', $id)->first();
        return $a->nohp;
    }

    public function alamat($id)
    {
        $a = DB::table('permohonan')->join('upz', 'upz.upz_id', '=', 'permohonan.upz_id')
        ->where('upz.upz_id', $id)->first();
        return $a->alamat;
    }

    public function asnaf($id)
    {
        $a = DB::table('permohonan')->join('asnaf', 'asnaf.asnaf_id', '=', 'permohonan.asnaf_id')
        ->where('asnaf.asnaf_id', $id)->first();
        return $a->asnaf;
    }

    public function program($id)
    {
        $a = DB::table('permohonan')->join('program', 'program.program_id', '=', 'permohonan.program_id')
        ->where('program.program_id', $id)->first();
        return $a->program;
    }

    public function sub_program($id)
    {
        $a = DB::table('program')->join('sub_program', 'program.program_id', '=', 'sub_program.program_id')
        ->where('sub_program.program_id', $id)->first();
        return $a->no_urut .' ' . $a->sub_program;
    }

    public function permohonan_selesai($id)
    {
        Permohonan::where('permohonan_id', $id)->update([
            'permohonan_status_input' => 'Selesai Input',
        ]);
    }

    public function permohonan_batal($id)
    {
        Permohonan::where('permohonan_id', $id)->update([
            'permohonan_status_input' => 'Belum Selesai Input',
        ]);
    }

    public function modal_ubah_permohonan ($id)
    {
        $permohonan = Permohonan::where('permohonan_id', $id)->first();
        $surat = Surat::where('surat_id', $permohonan->surat_id)->first();
        $upz = Upz::where('upz_id', $permohonan->upz_id)->first();
        // dd($surat);

        $this->permohonan_jenis_edit = $permohonan->permohonan_jenis;
        $this->permohonan_nomor_edit = $permohonan->permohonan_nomor;
        $this->permohonan_nama_pemohon_edit = $permohonan->permohonan_nama_pemohon;
        $this->permohonan_nohp_pemohon_edit = $permohonan->permohonan_nohp_pemohon;
        $this->permohonan_alamat_pemohon_edit = $permohonan->permohonan_alamat_pemohon;
        $this->permohonan_nominal_edit = $permohonan->permohonan_nominal;
        $this->permohonan_bentuk_bantuan_edit = $permohonan->permohonan_bentuk_bantuan;
        $this->permohonan_catatan_input_edit = $permohonan->permohonan_catatan_input;
        
        $this->surat_judul_edit = $surat->surat_judul;
        $this->surat_nomor_edit = $surat->surat_nomor;
        $this->surat_tgl_edit = $surat->surat_tgl;
        $this->surat_url_edit = $surat->surat_url;
        
        if ($upz) {
            $this->upz_edit = $upz->upz;
            $this->nohp_edit = $upz->nohp;
            $this->alamat_edit = $upz->alamat;
            $this->pj_nama_edit = $upz->pj_nama;
            $this->pj_jabatan_edit = $upz->pj_jabatan;
            $this->pj_nohp_edit = $upz->pj_nohp;
        }
        
        $this->keterangan_edit = $permohonan->keterangan;
        
        $this->asnaf_id_edit = $permohonan->asnaf_id;
        $this->program_id_edit = $permohonan->program_id;
        $this->sub_program_id_edit = $permohonan->sub_program_id;
        
          
    }

    public function modal_hapus_permohonan($id)
    {

    }

    public function modal_tambah_mustahik($id)
    {

    }

    public function tambah_mustahik()
    {

    }

    public function modal_tambah_lampiran($id)
    {

    }

    public function tambah_lampiran()
    {

    }
}
