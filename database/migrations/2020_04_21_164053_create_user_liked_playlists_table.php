<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLikedPlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_liked_playlists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('playlist_id');
            $table->timestamps();
        });
        Schema::table('user_liked_playlists', function($table){
            $table->foreign('user_id')
            ->references('id')->on('users');
        });
        Schema::table('user_liked_playlists', function($table){
            $table->foreign('playlist_id')
            ->references('id')->on('playlists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_liked_playlists');
    }
}
