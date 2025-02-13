<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('pengguna', function (Blueprint $table) {
            $table->string('pengguna_id')->primary();
            $table->string('wilayah_id');
            $table->foreign('wilayah_id')->references('wilayah_id')->on('wilayah');
            $table->string('baznas.pengurus_id');
            $table->foreign('baznas.pengurus_id')->references('pengurus_id')->on('pengurus');
            $table->string('ambulance.driver_id');
            $table->string('nik');
            $table->string('kk');
            $table->string('nama');
            $table->integer('jenis_kelamin');
            $table->integer('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('email')->unique();
            $table->string('nohp')->unique();
            $table->string('password');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('foto_url');
            $table->string('ttd_url');
            $table->enum('status', [""]);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
