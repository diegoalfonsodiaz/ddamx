<?php

use Illuminate\Database\Seeder;
use App\Persona;
class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Persona::class,100)->create();
    }
}
