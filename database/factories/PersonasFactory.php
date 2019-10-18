<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Persona;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'dpi' =>  $faker->randomElement(['1', '0']),
        'nombre' => $faker->name,
        'apellido' => $faker->lastname,
        'telefono' =>  $faker->randomElement(['1', '0']),
        'correo' => $faker->unique()->safeEmail,
        'estado' => $faker->randomElement(['1', '0']),
        'updated_at'=>now(),
        'created_at'=>now(),
        
    ];
});
