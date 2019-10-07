<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        
        $this->call(EstadofactibilidadTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        $this->call(PersonasTableSeeder::class);
        $this->call(CargoejecutoresTableSeeder::class);
        $this->call(EjecutorSeeder::class);
        $this->call(AsuntoSeeder::class);
    }
}
