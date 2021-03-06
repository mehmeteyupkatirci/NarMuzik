<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('artist_id')->unsigned();
            $table->bigInteger('album_type_id')->unsigned();
            $table->string('name');
            $table->string('spot_id')->unique();
            $table->string('copyrights')->nullable();
            $table->integer('popularity')->nullable();
            $table->string('release_date')->nullable();
            $table->string('images')->nullable();
            $table->string('checked')->nullable();
            $table->timestamps();
        });
        Schema::table('albums', function($table){
            $table->foreign('artist_id')
            ->references('id')->on('artists')
            ->onDelete('cascade');
        });
        Schema::table('albums', function($table){
            $table->foreign('album_type_id')
            ->references('id')->on('album_types')
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
        Schema::dropIfExists('albums');
    }
}
