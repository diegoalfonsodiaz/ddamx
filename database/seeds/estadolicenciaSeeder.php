<?php

use Illuminate\Database\Seeder;

class estadolicenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estadolicencias')->insert([
            'nombre' => 'Activo',
            'descripcion' => 'Mantenimiento secuencial',
        ]);

        DB::table('estadolicencias')->insert([
            'nombre' => 'Desactivado',
            'descripcion' => 'Mora de 3 meses',
        ]);
    }
}
