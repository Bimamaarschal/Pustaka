<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('jurnals', function (Blueprint $table) {
            // Ubah aturan kolom keterangan_review menjadi nullable dan default ''
            $table->string('keterangan_review')->nullable()->default('')->change();
            $table->string('tanggal_review')->nullable()->default('')->change();
            $table->string('nama_review')->nullable()->default('')->change();
            // Tambahkan aturan lainnya di sini...
        });
    }

    public function down()
    {
        // Jika perlu, definisikan aksi rollback di sini...
    }
};
