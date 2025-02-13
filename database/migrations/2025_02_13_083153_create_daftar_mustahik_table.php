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

        Schema::create('daftar_mustahik', function (Blueprint $table) {
            $table->integer('daftar_mustahik_id')->primary()->autoIncrement();
            $table->integer('permohonan_id')->index();
            $table->foreign('permohonan_id')->references('permohonan_id')->on('permohonan');
            $table->enum('mustahik_id', ["Permohonan","Survey","Pencairan","LPJ"]);
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
        Schema::dropIfExists('daftar_mustahik');
    }
};
