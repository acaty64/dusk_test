<?php

use App\MenuType;
use Faker\Generator as Faker;

$factory->define(MenuType::class, function (Faker\Generator $faker)
{
    return [
        'type_id' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10,11]),
        'menu_id' => $faker->randomElement([1,2,3,4,5]),
    ];
});
