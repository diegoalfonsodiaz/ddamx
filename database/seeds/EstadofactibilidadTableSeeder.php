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
            'nombre' => "En Proceso",
            'estado' => '1',
        ]);

        DB::table('estadofactibilidads')->insert([
            'nombre' => "Anulada",
            'estado' => '1',
        ]);

        DB::table('estadofactibilidads')->insert([
            'nombre' => "Revisión",
            'estado' => '1',
        ]);

        DB::table('estadofactibilidads')->insert([
            'nombre' => "Aprobado",
            'estado' => '1',
        ]);
    }
}
