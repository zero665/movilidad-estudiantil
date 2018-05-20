<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('idAlumno');
            $table->string('numeroDeControl');
            $table->string('contrasenia');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('correo')->unique();
            $table->integer('idInstitucion')->unsigned()->nullable();
            $table->foreign('idInstitucion')->references('idInstitucion')->on('instituciones');
            $table->string('carrera');
            $table->date('fechaIngreso')->nullable();
            $table->integer('numeroTelefonico')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->integer('nombreTutor')->nullable();
            $table->string('parentezco')->nullable();
            $table->integer('telefonoEmergencia')->nullable();
            $table->string('correoEmergencia')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('alumnos');
    }
}
