<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengguna')->insert([
            [
                'pengguna_id' => Str::uuid(),
                'wilayah_id' => DB::table('wilayah')->where('wilayah', 'Jakarta')->value('wilayah_id'),
                'pengurus_id' => DB::table('pengurus')->where('sk_nomor', 'SK-001')->value('pengurus_id'),
                'driver_id' => null,
                'nik' => '1234567890123456',
                'kk' => '3201123456789012',
                'nama' => 'Rayhan Afrizal',
                'jenis_kelamin' => 1,
                'tempat_lahir' => 'Banyumas',
                'tgl_lahir' => '2005-09-23',
                'email' => 'rayhan@example.com',
                'nohp' => '0895392167815',
                'password' => Hash::make('0895392167815'), // Menggunakan Hash::make() untuk Bcrypt
                'alamat' => 'Jl. Merdeka No. 10',
                'rt' => '01',
                'rw' => '02',
                'status' => 'aktif',
                // 'foto_url' => 'uploads/budi.jpg',
                // 'ttd_url' => 'uploads/budi_ttd.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
