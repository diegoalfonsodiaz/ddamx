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
<<<<<<< HEAD
        
        
        
        $this->call(EstadofactibilidadTableSeeder::class);
=======
        $this->call(CargoejecutoresTableSeeder::class);
        $this->call(EjecutorSeeder::class);
        $this->call(AsuntoSeeder::class);
>>>>>>> 88b65b0a570fad9fa7b78b8b71e1af20ccf3388d
    }
}
