<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'description' => $faker->sentence($nbWords = 22, $variableNbWords = true) ,
        'image' => $faker->word ,
        'role' => $faker->word,
        'instagram' => $faker->word ,
        'facebook' => $faker->word
    ];
});
