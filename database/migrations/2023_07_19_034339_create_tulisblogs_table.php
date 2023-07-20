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
        Schema::create('tulisblogs', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('judul');
            $table->string('penulis');
            $table->string('tanggal');
            $table->text('konten1');
            $table->text('konten2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tulisblogs');
    }
};
