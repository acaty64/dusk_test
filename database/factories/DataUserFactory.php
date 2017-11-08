<?php

use Faker\Generator as Faker;
use Faker\Provider\randomElement;
use Faker\Provider\randomNumber;

$factory->define(App\DataUser::class, function (Faker $faker) {
    return [
        'wdoc1' => $faker->firstName,
        'wdoc2' => $faker->lastName,
        'wdoc3' => $faker->lastName,
        'fono1' => $faker->randomNumber($nbDigits = 9, $strict = false),
        'fono2' => $faker->randomNumber($nbDigits = 9, $strict = false),
        'email1' => $faker->email,
        'email2' => $faker->email,
        'whatsapp' => $faker->randomElement($array = array(true,false), $count = 1),
    ];
});
