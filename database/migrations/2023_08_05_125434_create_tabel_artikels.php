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
        Schema::create('artikels', function (Blueprint $table) {
            $table->string('id', 121)->primary();
            $table->string('image');
            $table->string('noartikel');
            $table->string('judul');
            $table->string('penulis');
            $table->string('email');
            $table->string('instansi');
            $table->string('tanggal');
            $table->string('jenis');
            $table->string('kataketerangan');
            $table->text('abstrak');
            $table->string('katakunci');
            $table->text('latarbelakang');
            $table->text('metode');
            $table->text('hasil');
            $table->text('pembahasan');
            $table->text('simpulan');
            $table->text('saran');
            $table->text('referensi')->nullable();
            $table->string('review');
            $table->string('pdfhasil')->nullable();
            $table->string('pesan')->nullable();
            $table->string('komentar')->nullable();
            $table->string('hukum')->nullable();
            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedInteger('like_count')->default(0);
            $table->boolean('like_status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
