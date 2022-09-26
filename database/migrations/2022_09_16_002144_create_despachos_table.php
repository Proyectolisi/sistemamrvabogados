<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDespachosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despachos', function (Blueprint $table) {
        
            $table->engine='InnoDb';
           $table->bigIncrements('id');
           $table->bigInteger('municipio_id')->unsigned();
           $table->string('nombreDespacho');
           $table->string('correoDespacho');
           $table->timestamps();
           $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('despachos');
    }
}
