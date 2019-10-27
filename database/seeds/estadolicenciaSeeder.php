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
            'nombre' => 'Emisión de orden de pago',
            'descripcion' => 'Debe pagar en banco Banrural',
            'estado' => '1',
        ]);
        DB::table('estadolicencias')->insert([
            'nombre' => 'Elaboración de licencia de conexión',
            'descripcion' => 'su licencia esta en proceso',
            'estado' => '1',
        ]);
        DB::table('estadolicencias')->insert([
            'nombre' => 'Emisión de licencia de conexión',
            'descripcion' => 'Debe pasar a traer su licencia',
            'estado' => '1',
        ]);
    }
}
