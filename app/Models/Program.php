<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'program';
    protected $primaryKey = 'program_id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'program'
    ];

    public function sub_program() {
        return $this->hasMany(SubProgram::class, 'program_id', 'program_id');
    }

    public function permohonan() {
        return $this->hasMany(Permohonan::class, 'program_id', 'program_id');
    }
}
