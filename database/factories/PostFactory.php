<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'text' => $faker->sentence($nbWords = 22, $variableNbWords = true) ,
        'image' => $faker->word ,
        'category' => $faker->numberBetween($min = 1, $max = 4),
        'firstpage' => $faker->boolean($chanceOfGettingTrue = 50) ,
        'favorite' => $faker->boolean($chanceOfGettingTrue = 50) ,
    ];
});

