<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Persona;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'dpi' =>  $faker->numberBetween(1111111111,9999999999),
        'nombre' => $faker->name,
        'apellido' => $faker->lastname,
        'telefono' =>  $faker->numberBetween(11111111,9999999),
        'correo' => $faker->unique()->safeEmail,
        'ornato' => $faker->numberBetween(111111,999999),
        'estado' => $faker->randomElement(['1', '0']),
        'updated_at'=>now(),
        'created_at'=>now(),
        
    ];
});
