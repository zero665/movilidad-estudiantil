<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHogaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hogares', function (Blueprint $table) {
            $table->increments('idHogar');
            $table->integer('idAlumno')->unsigned();
            $table->foreign('idAlumno')->references('idAlumno')->on('alumnos');
            $table->integer('numeroHabitantes');
            $table->integer('edadMenor');
            $table->integer('edadMayor');
            $table->char('gas');
            $table->char('aguaPotable');
            $table->char('cable');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('colonia');
            $table->string('municipio');
            $table->string('calle');
            $table->string('numero');
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
        Schema::dropIfExists('hogares');
    }
}
