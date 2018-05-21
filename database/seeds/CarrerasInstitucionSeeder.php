<?php

use Illuminate\Database\Seeder;

class CarrerasInstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idInstitucion = DB::table('instituciones')
        	->where(['nombre'=>'Instituto Tecnológico de Toluca'])
        	->value('idInstitucion');

        $idCarrera = DB::table('carreras')
        	->where(['nombre'=>'Ingeniería en sistemas computacionales'])
        	->value('idCarrera');

        DB::table('carreras_institucion')->insert([
        	'idInstitucion' => $idInstitucion,
        	'idCarrera' => $idCarrera]);
    }
}
