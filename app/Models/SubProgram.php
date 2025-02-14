<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubProgram extends Model
{
    protected $table = 'sub_program';
    protected $primaryKey = 'sub_program_id';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'program_id',
        'sub_program',
    ];


    public function program() {
        return $this->belongsTo(Program::class, 'program_id', 'program_id');
    }

    public function permohonan() {
        return $this->hasMany(Permohonan::class, 'sub_program_id', 'sub_program_id');
    }
}
