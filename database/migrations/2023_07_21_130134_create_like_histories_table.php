<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('like_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('blog_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('blog_id')->references('id')->on('tulisblogs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('like_histories');
    }
}