<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asuntos')->insert([
            'nombre' => 'Anomalia',
            'descripcion' => 'Se debe de pasar a verificar',
            'estado' => '1',
        ]);
        DB::table('asuntos')->insert([
            'nombre' => 'Revisado',
            'descripcion' => 'Se llevo a una evaluacion ',
            'estado' => '1',
        ]);
        DB::table('asuntos')->insert([
            'nombre' => 'Cancelacion',
            'descripcion' => 'Se confirmaron hallazgos',
            'estado' => '1',
        ]);
    }
}
