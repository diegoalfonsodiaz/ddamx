<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadofactibilidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estadofactibilidads')->insert([
            'nombre' => "Sin Procesar",
            'estado' => '1',
        ]);

        DB::table('estadofactibilidads')->insert([
            'nombre' => "Factible",
            'estado' => '1',
        ]);

        DB::table('estadofactibilidads')->insert([
            'nombre' => "No Factible",
            'estado' => '1',
        ]);
    }
}
