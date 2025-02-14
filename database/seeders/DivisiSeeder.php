<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['divisi' => 'Bidang Pengumpulan', 'created_at' => now(), 'updated_at' => now()],
            ['divisi' => 'Bidang Distribusi dan Dayaguna', 'created_at' => now(), 'updated_at' => now()],
            ['divisi' => 'Bidang Perencanaan Keuangan dan Pelaporan', 'created_at' => now(), 'updated_at' => now()],
            ['divisi' => 'Bidang Adm. SDM dan Umum', 'created_at' => now(), 'updated_at' => now()],
            ['divisi' => 'Tenaga Bantu', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
