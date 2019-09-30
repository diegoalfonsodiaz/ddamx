<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CargoejecutoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargoejecutors')->insert([
            'nombre' => 'Jefe',
            'estado' => '1',
        ]);
        DB::table('cargoejecutors')->insert([
            'nombre' => 'Supervisor',
            'estado' => '1',
        ]);
        DB::table('cargoejecutors')->insert([
            'nombre' => 'Empleado',
            'estado' => '1',
        ]);
        
        
          
    }
}
