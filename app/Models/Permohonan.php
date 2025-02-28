<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Permohonan extends Model
{
    use HasFactory;

    protected $table = 'permohonan';
    protected $primaryKey = 'permohonan_id';
    public $timestamps = true;
    public $incrementing = false; // Nonaktifkan auto-increment
    protected $keyType = 'string';

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->permohonan_id = (string) Str::uuid(); // Pastikan UUID dibuat
        });
    }

    public function surat()
    {
        return $this->belongsTo(Surat::class, 'surat_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function subProgram()
    {
        return $this->belongsTo(SubProgram::class, 'sub_program_id');
    }

    public function asnaf()
    {
        return $this->belongsTo(Asnaf::class, 'asnaf_id');
    }

    public function mustahik()
    {
        return $this->belongsTo(Mustahik::class, 'mustahik_id');
    }

    public function upz()
    {
        return $this->belongsTo(Upz::class, 'upz_id');
    }
}
