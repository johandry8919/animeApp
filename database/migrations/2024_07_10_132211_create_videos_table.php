<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->integer('generos');
            $table->integer('episodios');
            $table->string('portada_img');
            $table->string('descripcion');
            $table->string('url_video');
            $table->string('nombre_video');
            $table->string('año_publicacion');
            $table->integer('id_estado_emision');
            $table->timestamps();
        });
    }


   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
