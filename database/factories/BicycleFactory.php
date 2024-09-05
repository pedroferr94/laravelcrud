<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bicycle;
use Faker\Generator as Faker;

$factory->define(Bicycle::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,200),
        'brand' => $faker->word,
        'model' => $faker->word,
        'color' => $faker->colorName,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
    ];


});
