<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
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

        DB::table('alumnos')->insert([
        	'numeroDeControl' => '15280838',
        	'contrasenia' => bcrypt('123456'),
        	'estado' => 'espera',
        	'nombre' => 'José Adán',
        	'apellidoPaterno' => 'Cruz',
        	'apellidoMaterno' => 'Castrejón',
        	'correo' => 'djdaan86@gmail.com',
        	'idInstitucion' => $idInstitucion,
        	'idCarrera' => $idCarrera,
        	// 'fechaIngreso' => null,
        	// 'numeroTelefonico' => null,
        	// 'nacionalidad' => null,
        	// 'nombreTutor' => null,
        	// 'parentezco' => null,
        	// 'telefonoEmergencia' => null,
        	// 'correoEmergencia' => null,
        ]);
    }
}
