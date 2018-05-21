<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasInstitucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras_institucion', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('idInstitucion')->unsigned();
            $table->foreign('idInstitucion')->references('idInstitucion')->on('instituciones');

            $table->integer('idCarrera')->unsigned();
            $table->foreign('idCarrera')->references('idCarrera')->on('carreras');
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
        Schema::dropIfExists('carreras_institucion');
    }
}
