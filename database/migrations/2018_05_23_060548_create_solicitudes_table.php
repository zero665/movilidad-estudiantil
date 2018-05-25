<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('idSolicitudOrigen');
            $table->integer('idSolicitudDestino')->unsigned()->nullable();
            $table->foreign('idSolicitudDestino')->references('idSolicitudOrigen')->on('solicitudes');
            $table->integer('idAlumnoOrigen')->unsigned();
            $table->foreign('idAlumnoOrigen')->references('numeroDeControl')->on('alumnos');
            $table->integer('idAlumnoDestino')->unsigned()->nullable();
            $table->foreign('idAlumnoDestino')->references('idAlumnoOrigen')->on('solicitudes');
            $table->char('estado');
            $table->date('fechaExpedida');
            $table->date('fechaAceptada')->nullable();
            $table->integer('idInstitucionOrigen')->unsigned();
            $table->foreign('idInstitucionOrigen')->references('idInstitucion')->on('alumnos');
            $table->integer('idInstitucionDestino')->unsigned()->nullable();
            $table->foreign('idInstitucionDestino')->references('idInstitucionOrigen')->on('solicitudes');
            $table->string('duracion')->nullable();
            $table->string('razones');
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('solicitudes');
    }
}
