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

        Schema::create('mustahik', function (Blueprint $table) {
            $table->uuid('mustahik_id')->primary();
            $table->foreignUuid('wilayah_id')->index();
            $table->foreign('wilayah_id')->references('wilayah_id')->on('wilayah');
            $table->foreignUuid('asnaf_id')->index();
            $table->foreign('asnaf_id')->references('asnaf_id')->on('asnaf');
            $table->string('pasien_pj_id')->index();
            $table->string('diagnosa');
            $table->string('nik');
            $table->string('kk');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('email')->unique()->nullable();
            $table->string('nohp');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('foto_url');
            $table->string('ktp_url');
            $table->string('kk_url');
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
        Schema::dropIfExists('mustahik');
    }
};
