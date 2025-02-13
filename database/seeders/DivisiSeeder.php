<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('divisi')->insert([
            ['divisi' => 'Keuangan', 'created_at' => now(), 'updated_at' => now()],
            ['divisi' => 'IT Support', 'created_at' => now(), 'updated_at' => now()],
            ['divisi' => 'Operasional', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
