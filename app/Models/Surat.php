<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'surat_id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'surat_url',
        'surat_nomor',
        'surat_tgl',
        'surat_judul',
        'surat_keterangan',
    ];
}
