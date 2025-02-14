<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upz extends Model
{
    use HasFactory;

    protected $table = 'upz';
    protected $primaryKey = 'upz_id';
    public $timestamps = true;

    protected $fillable = [
        'upz',
        'alamat',
        'nohp',
        'pj_nama',
        'pj_jabatan',
        'pj_nohp',
        'keterangan'
    ];

    public function permohonan()
    {
        return $this->hasMany(Permohonan::class, 'upz_id', 'upz_id');
    }
}
