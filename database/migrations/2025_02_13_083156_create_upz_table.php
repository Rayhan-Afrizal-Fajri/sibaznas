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

        Schema::create('upz', function (Blueprint $table) {
            $table->integer('upz_id')->primary()->autoIncrement();
            $table->string('upz');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('pj_nama');
            $table->string('pj_jabatan');
            $table->string('pj_nohp');
            $table->string('keterangan');
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
        Schema::dropIfExists('upz');
    }
};
