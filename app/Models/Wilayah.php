<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table = 'wilayah';
    protected $primaryKey = 'wilayah_id';

    protected $fillable = [
        'wilayah',
    ];

    public function pengguna() {
        return $this->hasMany(Pengguna::class, 'wilayah_id', 'wilayah_id');
    }
}
