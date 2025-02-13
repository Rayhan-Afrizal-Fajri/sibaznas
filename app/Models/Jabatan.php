<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';
    protected $primaryKey = 'jabatan_id';

    protected $fillable = [
        'divisi_id',
        'jabatan',
    ];

    public function divisi() {
        return $this->belongsTo(Divisi::class, 'divisi_id', 'divisi_id');
    }

    public function pengurus() {
        return $this->hasMany(Pengurus::class, 'jabatan_id', 'jabatan_id');
    }
}
