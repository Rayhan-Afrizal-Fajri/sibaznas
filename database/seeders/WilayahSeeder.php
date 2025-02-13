<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wilayah')->insert([
            ['wilayah' => 'Jakarta', 'created_at' => now(), 'updated_at' => now()],
            ['wilayah' => 'Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['wilayah' => 'Surabaya', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
