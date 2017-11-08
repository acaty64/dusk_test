<?php

use App\Sede;
use Faker\Generator as Faker;


$factory->define(Sede::class, function (Faker\Generator $faker)
{
    return [
        'cSede' => $faker->unique()->word, 
        'wSede'=> $faker->unique()->word
    ];
});
