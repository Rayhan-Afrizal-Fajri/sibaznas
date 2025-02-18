<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Bidang Pengumpulan
*Bidang Distribusi dan Dayaguna
*Bidang Perencanaan Keuangan dan Pelaporan
*Bidang Adm. SDM dan Umum
*Tenaga Bantu
     */
    public function run(): void
    {
        DB::table('divisi')->insert([
            ['divisi_id' => Str::uuid(), 'divisi' => 'Bidang Pengumpulan', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => Str::uuid(), 'divisi' => 'Bidang Distribusi dan Dayaguna', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => Str::uuid(), 'divisi' => 'Bidang Perencanaan Keuangan dan Pelaporan', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => Str::uuid(), 'divisi' => 'Bidang Adm. SDM dan Umum', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => Str::uuid(), 'divisi' => 'Ketua', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
