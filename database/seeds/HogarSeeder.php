<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HogarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$idAlumno = DB::table('alumnos')
    		->where([
    			'idAlumno'=>'1',
    			'nombre'=>'José Adán'
    		])
    		->value('idAlumno');

        DB::table('hogares')->insert([
        	'idAlumno' => $idAlumno,
        	'numeroHabitantes' => '4',
        	'edadMenor' => '10',
        	'edadMayor' => '46',
        	'gas' => 'S',
        	'aguaPotable' => 'S',
        	'cable' => 'S',
        	'estado' => 'México',
        	'ciudad' => 'Toluca',
        	'colonia' => 'Inf Sn Fco',
        	'municipio' => 'Metepec',
        	'calle' => 'Hda Zacatepec',
        	'numero' => '5',
        ]);
    }
}
