<?php

use App\Facultad; 
use Faker\Generator as Faker;

$factory->define(Facultad::class, function (Faker\Generator $faker)
{
    return [
        'cFacultad' => $faker->unique()->word, 
        'wFacultad'=> $faker->unique()->word
    ];
});
