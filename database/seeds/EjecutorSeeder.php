<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EjecutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ejecutors')->insert([
            'cargoejecutor_id' => '1',
            'nombre' => 'Marvin Sosa',
            'direccion' => 'Colonia Valle de las Rosas',
            'estado' => '1',
        ]);
        DB::table('ejecutors')->insert([
            'cargoejecutor_id' => '2',
            'nombre' => 'Jose Leal',
            'direccion' => 'Colonia Vista Bella',
            'estado' => '1',
        ]);
        DB::table('ejecutors')->insert([
            'cargoejecutor_id' => '3',
            'nombre' => 'Edwin Luna',
            'direccion' => 'Colonia La union',
            'estado' => '1',
        ]);
    }
}
