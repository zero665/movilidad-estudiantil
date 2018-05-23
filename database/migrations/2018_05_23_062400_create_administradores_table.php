<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradores', function (Blueprint $table) {
            $table->increments('idAdministrador');
            $table->string('numeroDeControl');
            $table->string('contrasenia');
            $table->string('estado');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('correo')->unique();
            $table->integer('idInstitucion')->unsigned();
            $table->foreign('idInstitucion')->references('idInstitucion')->on('instituciones');
            $table->integer('idCarrera')->unsigned();
            $table->foreign('idCarrera')->references('idCarrera')->on('carreras');
            $table->timestamps();
            $table->integer('numeroTelefonico')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administradores');
    }
}
