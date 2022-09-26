<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->engine='InnoDb';
            $table->bigIncrements('id');
            $table->bigInteger('jurisdiccion_id')->unsigned();
            $table->bigInteger('estado_proceso_id')->unsigned();
            $table->bigInteger('tipo_proceso_id')->unsigned();
            $table->bigInteger('etapa_procesal_id')->unsigned();
            $table->bigInteger('despacho_id')->unsigned();
            $table->string('numero_radicado', 23);
            $table->dateTime('fecha_radicado');
            $table->text('descripcion');
            $table->string('demandado');
            $table->string('demandante');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('jurisdiccion_id')->references('id')->on('jurisdiccion')->onDelete("cascade");
            $table->foreign('estado_proceso_id')->references('id')->on('estado_proceso')->onDelete("cascade");
            $table->foreign('tipo_proceso_id')->references('id')->on('tipo_proceso')->onDelete("cascade");
            $table->foreign('etapa_procesal_id')->references('id')->on('etapa_procesal')->onDelete("cascade");
            $table->foreign('despacho_id')->references('id')->on('despachos')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procesos');
    }
}
