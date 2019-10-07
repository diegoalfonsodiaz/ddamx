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
            'ornato' => '31241234643',
        ]);
        DB::table('ejecutors')->insert([
            'cargoejecutor_id' => '2',
            'nombre' => 'Jose Leal',
            'direccion' => 'Colonia Vista Bella',
            'ornato' => '452389',
        ]);
        DB::table('ejecutors')->insert([
            'cargoejecutor_id' => '3',
            'nombre' => 'Edwin Luna',
            'direccion' => 'Colonia La union',
            'ornato' => '8054736',
        ]);
    }
}
