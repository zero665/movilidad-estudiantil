<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->truncateTables([
    		'carreras',
    		'instituciones',
            'carreras_institucion',
    		'alumnos',
            'alergias',
    	]);
        // $this->call(UsersTableSeeder::class);
        $this->call(CarreraSeeder::class);
    	$this->call(InstitucionSeeder::class);
        $this->call(CarrerasInstitucionSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(AlergiaSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    	foreach ($tables as $table)
    	{
    		DB::table($table)->truncate();
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
