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
            $table->integer('idSolicitudDestino')->nullable()->unsigned();
            $table->foreign('idSolicitudOrigen')->references('idSolicitud')->on('solicitudes');
            $table->integer('idAlumnoOrigen');
            $table->integer('idAlumnoDestino')->nullable()->unsigned();
            $table->foreign('idAlumnoOrigen')->references('idAlumno')->on('alumnos');
            $table->char('estado');
            $table->date('fechaExpedida');
            $table->date('fechaAceptada')->nullable();
            $table->integer('idInstitucionOrigen');
            $table->integer('idInstitucionDestino')->nullable()->unsigned();
            $table->foreign('idInstitucionOrigen')->references('idInstitucion')->on('instituciones');
            $table->string('duracion');
            $table->string('razones');
            $table->string('observaciones');
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
