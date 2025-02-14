<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $table = 'permohonan';
    protected $primaryKey = 'permohonan_id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'surat_id',
        'program_id',
        'sub_program_id',
        'asnaf_id',
        'mustahik_id',
        'upz_id',
        'permohonan_nomor',
        'permohonan_jenis',
        'permohonan_nama_pemohon',
        'permohonan_alamat_pemohon',
        'permohonan_nohp_pemohon',
        'permohonan_tgl',
        'permohonan_nominal',
        'permohonan_bentuk_bantuan',
        'permohonan_keterangan',
        'permohonan_petugas_input',
        'permohonan_timestamp_input',
        'permohonan_status_input',
        'permohonan_catatan_input',
        'permohonan_petugas_atasan',
        'permohonan_timestamp_atasan',
        'permohonan_status_atasan',
        'permohonan_catatan_atasan',
        'survey_pilihan',
        'survey_tgl',
        'survey_petugas_survey',
        'survey_hasil',
        'survey_status',
        'survey_form_url',
        'survey_timestamp',
        'acc_nominal',
        'acc_timestamp',
        'acc_catatan',
        'pencairan_sumberdana',
        'pencairan_petugas_keuangan',
        'pencairan_nominal',
        'pencairan_timestamp',
        'pencairan_status',
        'pencairan_catatan'
    ];

    public function surat()
    {
        return $this->belongsTo(Surat::class, 'surat_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function subProgram()
    {
        return $this->belongsTo(SubProgram::class, 'sub_program_id');
    }

    public function asnaf()
    {
        return $this->belongsTo(Asnaf::class, 'asnaf_id');
    }

    public function mustahik()
    {
        return $this->belongsTo(Mustahik::class, 'mustahik_id');
    }

    public function upz()
    {
        return $this->belongsTo(Upz::class, 'upz_id');
    }
}
