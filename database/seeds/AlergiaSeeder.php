<?php

use Illuminate\Database\Seeder;

class AlergiaSeeder extends Seeder
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
        		'nombre'=>'José Adán',
        		'apellidoPaterno'=>'Cruz',
        		'apellidoMaterno'=>'Castrejon'
        	])
        	->value('idAlumno');

        DB::table('alergias')->insert([
        	'idAlumno' => $idAlumno,
        	'nombre' => 'Flojeritis Aguda',
        	'descripcion' => 'Flojera extrema inoportuna con facil distracción.',
        ]);
    }
}
