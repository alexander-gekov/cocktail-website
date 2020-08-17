<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'category' => $faker->word,
        'alcoholic' => 'Alcoholic',
        'glass' => 'Old fashioned glass',
        'instructions' => $faker->sentences(3),
        'image' => $faker->imageUrl(),
        'ingredient1' => $faker->word,
        'ingredient2' => $faker->word,
        'measure1' => $faker->numberBetween(0,10),
        'measure2' => $faker->numberBetween(0,10),
    ];
});
