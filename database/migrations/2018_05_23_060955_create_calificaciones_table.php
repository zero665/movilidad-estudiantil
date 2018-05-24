<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->increments('idCalificacion');
            $table->integer('idSolicitudOrigen')->unsigned();
            $table->foreign('idSolicitudOrigen')->references('idSolicitudOrigen')->on('solicitudes');
            $table->integer('idSolicitudDestino')->unsigned();
            $table->foreign('idSolicitudDestino')->references('idSolicitudDestino')->on('solicitudes');
            $table->integer('idAlumnoOrigen');
            $table->integer('idAlumnoDestino');
            $table->integer('calificacion');
            $table->integer('tipo');
            $table->integer('comentario');
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
        Schema::dropIfExists('calificaciones');
    }
}
