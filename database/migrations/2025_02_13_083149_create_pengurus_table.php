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

        Schema::create('pengurus', function (Blueprint $table) {
            $table->string('pengurus_id')->primary();
            $table->string('jabatan_id');
            $table->string('sk_nomor');
            $table->string('sk_url');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
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
        Schema::dropIfExists('pengurus');
    }
};
