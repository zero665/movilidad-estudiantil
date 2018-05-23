<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$idHogar = DB::table('hogares')
    		->where([
    			'idHogar'=>'1',
    			'idAlumno'=>'1'])
    		->value('idHogar');

        DB::table('mascotas')->insert([
        	'idHogar' => $idHogar,
        	'tipoMascota' => 'Perro',
        	'cantidad' => '1',
        ]);
    }
}
