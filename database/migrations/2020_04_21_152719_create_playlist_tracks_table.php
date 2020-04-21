<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist_tracks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('playlist_id')->unsigned();
            $table->bigInteger('track_id')->unsigned();;
            $table->timestamps();
        });
        Schema::table('playlist_tracks', function($table){
            $table->foreign('playlist_id')
            ->references('id')->on('playlists')
            ->onDelete('cascade');
        });
        Schema::table('playlist_tracks', function($table){
            $table->foreign('track_id')
            ->references('id')->on('tracks')
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
        Schema::dropIfExists('playlist_tracks');
    }
}
