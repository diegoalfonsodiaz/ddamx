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
        // $this->call(UsersTableSeeder::class);
        $this->call(PersonasTableSeeder::class);
>>>>>>> 8e0f5eae335661c348957ea23e57b9e31b49b797
        $this->call(CargoejecutoresTableSeeder::class);
        $this->call(EjecutorSeeder::class);
        $this->call(AsuntoSeeder::class);
    }
}
