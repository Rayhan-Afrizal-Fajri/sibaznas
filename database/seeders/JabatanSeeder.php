<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jabatan')->insert([
            ['divisi_id' => 1, 'jabatan' => 'Ketua', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => 2, 'jabatan' => 'Wakil Ketua', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => 3, 'jabatan' => 'Pelaksana', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => 4, 'jabatan' => 'Staf', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => 5, 'jabatan' => 'Security', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
