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
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        //$this->call(TipoviaSeeder::class);
       // $this->call(EstadofactibilidadTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
       // $this->call(PersonasTableSeeder::class);
        //$this->call(CargoejecutoresTableSeeder::class);
        //$this->call(EjecutorSeeder::class);
        $this->call(AsuntoSeeder::class);
      //  $this->call(estadolicenciaSeeder::class);
        //$this->call(TipoObraTableSeeder::class);
    }
}
