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
            ['divisi_id' => 1, 'jabatan' => 'Manager Keuangan', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => 2, 'jabatan' => 'IT Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['divisi_id' => 3, 'jabatan' => 'Supervisor Operasional', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
