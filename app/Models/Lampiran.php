<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lampiran extends Model
{
    use HasFactory;

    protected $table = 'lampiran';
    protected $primaryKey = 'lampiran_id';
    public $timestamps = true;

    protected $fillable = [
        'permohonan_id',
        'jenis',
        'keterangan',
        'url'
    ];

    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class, 'permohonan_id', 'permohonan_id');
    }
}
