<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstitucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instituciones')->insert([
        	'nombre' => 'Instituto Tecnológico de Toluca',
        	'descentralizada' => '0',
        	'numeroTelefonico' => '1800647',
        ]);
    }
}
