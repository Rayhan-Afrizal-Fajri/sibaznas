<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $table = 'pengurus';
    protected $primaryKey = 'pengurus_id';

    protected $fillable = [
        'jabatan_id',
        'sk_nomor',
        'sk_url',
        'tgl_mulai',
        'tgl_selesai',
        'status',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id', 'jabatan_id');
    }
}
