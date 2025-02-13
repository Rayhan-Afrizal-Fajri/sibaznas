<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengguna')->insert([
            [
                'wilayah_id' => 1,
                'pengurus_id' => 1,
                'driver_id' => 1,
                'nik' => '1234567890123456',
                'kk' => '3201123456789012',
                'nama' => 'Rayhan Afrizal',
                'jenis_kelamin' => 1,
                'tempat_lahir' => 1,
                'tgl_lahir' => '1990-05-20',
                'email' => 'budi@example.com',
                'nohp' => '0895392167815',
                'password' => Hash::make('0895392167815'), // Menggunakan Hash::make() untuk Bcrypt
                'alamat' => 'Jl. Merdeka No. 10',
                'rt' => '01',
                'rw' => '02',
                'foto_url' => 'uploads/budi.jpg',
                'ttd_url' => 'uploads/budi_ttd.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
