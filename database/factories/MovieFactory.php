<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'name' => $faker->realText($faker->numberBetween(10, 50)),
        'image' => $faker->imageUrl(500, 500),
        'length' => $faker->numberBetween(100, 140),
        'year' => $faker->numberBetween(1970, 2018)
    ];
});
