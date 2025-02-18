<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wilayah')->insert([
            ['wilayah_id' => Str::uuid(), 'wilayah' => 'Jakarta', 'created_at' => now(), 'updated_at' => now()],
            ['wilayah_id' => Str::uuid(), 'wilayah' => 'Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['wilayah_id' => Str::uuid(), 'wilayah' => 'Surabaya', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
