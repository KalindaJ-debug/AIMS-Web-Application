<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Land;
use Faker\Generator as Faker;

$factory->define(Land::class, function (Faker $faker) {
    return [
        //
        'fid' => $faker->randomNumber(),
        'addressNumber' => $faker->randomNumber(),
        'street' => $faker->streetAddress(),
        'lane' => $faker->streetAddress(),
        'town' => $faker->city(),
        'city' => $faker->city(),
        'grama' => $faker->numberBetween($min = 1, $max = 40),
        'district' => $faker->numberBetween($min = 1, $max = 25),
        'province' => $faker->numberBetween($min = 1, $max = 9),
        'postal' => $faker->randomNumber($nbDigits = 5, $strict = true),
        'planNo' => $faker->randomNumber($nbDigits = 8, $strict = true),
        'hectares' => $faker->randomFloat(),
    ];
});
