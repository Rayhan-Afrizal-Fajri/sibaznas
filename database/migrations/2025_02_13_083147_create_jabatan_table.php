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

        Schema::create('jabatan', function (Blueprint $table) {
            $table->integer('jabatan_id')->primary()->autoIncrement();
            //$table->foreign('jabatan_id')->references('jabatan_id')->on('pengurus');
            $table->integer('divisi_id')->index();
            $table->foreign('divisi_id')->references('divisi_id')->on('divisi');
            $table->string('jabatan')->unique();
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
        Schema::dropIfExists('jabatan');
    }
};
