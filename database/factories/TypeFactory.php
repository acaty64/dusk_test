<?php

use Faker\Generator as Faker;
use App\Type;

$factory->define(Type::class, function (Faker\Generator $faker)
{
    return [
       'name' => 't'.$faker->unique()->word
    ];
});

