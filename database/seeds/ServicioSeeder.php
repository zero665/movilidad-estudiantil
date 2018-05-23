<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioSeeder extends Seeder
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

        DB::table('servicios')->insert([
        	'idHogar' => $idHogar,
        	'nombre' => 'Yacusi',
        	'descripcion' => 'P/1 persona',
        ]);
    }
}
