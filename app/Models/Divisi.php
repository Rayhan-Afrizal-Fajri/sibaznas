<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'divisi';
    protected $primaryKey = 'divisi_id';

    protected $fillable = [
        'divisi',
    ];

    public function jabatan() {
        return $this->hasMany(Jabatan::class, 'divisi_id', 'divisi_id');
    }
}
