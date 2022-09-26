<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActuacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actuaciones', function (Blueprint $table) {
            $table->engine='InnoDb';
            $table->bigIncrements('id');
            $table->dateTime('fecha_actuacion');
            $table->bigInteger('tipo_actuacion_id')->unsigned();
            $table->bigInteger('proceso_id')->unsigned();
            $table->text('anotacion');
            $table->dateTime('fecha_inicio_termino');
            $table->dateTime('fecha_finaliza_termino');
            $table->dateTime('fecha_registro');
            $table->text('file');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tipo_actuacion_id')->references('id')->on('tipo_actuaciones')->onDelete("cascade");
            $table->foreign('proceso_id')->references('id')->on('procesos')->onDelete("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actuaciones');
    }
}
