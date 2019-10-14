<?php

use Illuminate\Database\Seeder;
use App\Estadolicencia;

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
            'nombre' => 'Existencia de papeleria',
            'descripcion' => 'Su papeleria se ha recibido',
            'estado' => '1',
        ]);
        DB::table('estadolicencias')->insert([
            'nombre' => 'Informe emitido',
            'descripcion' => 'Se ha realizado la factibilidad',
            'estado' => '1',
        ]);
        DB::table('estadolicencias')->insert([
            'nombre' => 'Orden de pago',
            'descripcion' => 'acercarse a las instalaciones a hacer su pago',
            'estado' => '1',
        ]);
    }
}
