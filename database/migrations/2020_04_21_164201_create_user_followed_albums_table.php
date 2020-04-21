<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFollowedAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_followed_albums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('album_id');
            $table->timestamps();
        });
        Schema::table('user_followed_albums', function($table){
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
        Schema::table('user_followed_albums', function($table){
            $table->foreign('album_id')
            ->references('id')->on('albums')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_followed_albums');
    }
}
