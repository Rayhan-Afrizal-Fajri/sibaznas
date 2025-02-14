<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mustahik extends Model
{
    use HasFactory;

    protected $table = 'mustahik';
    protected $primaryKey = 'mustahik_id';
    public $timestamps = true;

    protected $fillable = [
        'wilayah_id',
        'asnaf_id',
        'pasien_pj_id',
        'diagnosa',
        'nik',
        'kk',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'email',
        'nohp',
        'alamat',
        'rt',
        'rw',
        'foto_url',
        'ktp_url',
        'kk_url'
    ];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'wilayah_id', 'wilayah_id');
    }

    public function asnaf()
    {
        return $this->belongsTo(Asnaf::class, 'asnaf_id', 'asnaf_id');
    }

    public function daftarMustahik()
    {
        return $this->hasMany(DaftarMustahik::class, 'mustahik_id', 'mustahik_id');
    }
}
