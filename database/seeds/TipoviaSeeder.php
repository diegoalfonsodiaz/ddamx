<?php

use Illuminate\Database\Seeder;
use App\Tipovia;

class TipoviaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipovias')->insert([
            'nombre' => 'Tierra',
            'descripcion' => 'Autorizada',
            'estado' => '1',
        ]);

        DB::table('tipovias')->insert([
            'nombre' => 'Empedrado',
            'descripcion' => 'Autorizada',
            'estado' => '1',
        ]);

        DB::table('tipovias')->insert([
            'nombre' => 'Adoquin',
            'descripcion' => 'Autorizada',
            'estado' => '1',
        ]);

        DB::table('tipovias')->insert([
            'nombre' => 'Asfalto',
            'descripcion' => 'Autorizada',
            'estado' => '1',
        ]);

        DB::table('tipovias')->insert([
            'nombre' => 'Pavimento',
            'descripcion' => 'Autorizada',
            'estado' => '1',
        ]);
    }
}
