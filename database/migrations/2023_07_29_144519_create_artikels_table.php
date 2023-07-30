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
            $table->id();
            $table->string('image');
            $table->string('noartikel');
            $table->string('judul');
            $table->string('penulis');
            $table->string('email');
            $table->string('intansi');
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
            $table->string('review');
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
