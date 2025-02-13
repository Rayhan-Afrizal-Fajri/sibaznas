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

        Schema::create('permohonan', function (Blueprint $table) {
            $table->string('permohonan_id')->primary();
            $table->string('surat_id')->index()->nullable();
            $table->foreign('surat_id')->references('surat_id')->on('surat');
            $table->string('program_id')->index();
            $table->foreign('program_id')->references('program_id')->on('program');
            $table->string('sub_program_id')->index();
            $table->foreign('sub_program_id')->references('sub_program_id')->on('sub_program');
            $table->string('asnaf_id')->index();
            $table->foreign('asnaf_id')->references('asnaf_id')->on('asnaf');
            $table->string('mustahik_id')->index();
            $table->string('upz_id')->index()->nullable();
            $table->foreign('upz_id')->references('upz_id')->on('upz');
            $table->string('permohonan_nomor');
            $table->enum('permohonan_jenis', ["BAZNAS","UPZ"]);
            $table->string('permohonan_nama_pemohon');
            $table->string('permohonan_alamat_pemohon');
            $table->string('permohonan_nohp_pemohon');
            $table->string('permohonan_tgl');
            $table->string('permohonan_nominal');
            $table->enum('permohonan_bentuk_bantuan', ["Uang Tunai","Barang"]);
            $table->string('permohonan_keterangan');
            $table->string('permohonan_petugas_input')->index();
            $table->timestamp('permohonan_timestamp_input');
            $table->enum('permohonan_status_input', ["Selesai Input","Belum Selesai Input"]);
            $table->string('permohonan_catatan_input');
            $table->string('permohonan_petugas_atasan')->index();
            $table->timestamp('permohonan_timestamp_atasan');
            $table->enum('permohonan_status_atasan', ["Diterima","Belum Dicek"]);
            $table->string('permohonan_catatan_atasan');
            $table->enum('survey_pilihan', ["Perlu","Tidak Perlu"]);
            $table->date('survey_tgl');
            $table->string('survey_petugas_survey')->index();
            $table->string('survey_hasil');
            $table->enum('survey_status', ["Selesai","Belum Selesai"]);
            $table->string('survey_form_url');
            $table->string('survey_timestamp');
            $table->string('acc_nominal');
            $table->string('acc_timestamp');
            $table->string('acc_catatan');
            $table->string('pencairan_sumberdana');
            $table->string('pencairan_petugas_keuangan')->index();
            $table->string('pencairan_nominal');
            $table->string('pencairan_timestamp');
            $table->string('pencairan_status');
            $table->string('pencairan_catatan');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonan');
    }
};
