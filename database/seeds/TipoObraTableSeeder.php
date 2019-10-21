<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Tipoobra;

class TipoObraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipoobras')->insert([
            'nombre' => "Multifamiliar",
        ]);
        DB::table('tipoobras')->insert([
            'nombre' => "Unifamiliar",
        ]);

    }
}
