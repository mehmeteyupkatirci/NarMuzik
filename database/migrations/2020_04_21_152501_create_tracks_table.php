<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('spot_id');
            $table->bigInteger('album_id')->unsigned();
            $table->string('name');
            $table->string('disc_number');
            $table->string('duration_ms');
            $table->string('preview_url');
            $table->integer('popularity');
            $table->timestamps();
        });
        Schema::table('tracks', function($table){
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
        Schema::dropIfExists('tracks');
    }
}
