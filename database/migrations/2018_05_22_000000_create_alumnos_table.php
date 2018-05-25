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
            $table->integer('numeroDeControl')->unsigned();
            $table->string('contrasenia');
            $table->string('estado')->default('no aceptado');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('correo')->unique();
            $table->integer('idInstitucion')->unsigned();
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
            /*$table->nullable(
                'fechaIngreso',
                'numeroTelefonico',
                'nacionalidad',
                'nombreTutor',
                'parentezco',
                'telefonoEmergencia',
                'correoEmergencia'
            );*/
            $table->primary('numeroDeControl');
            
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
