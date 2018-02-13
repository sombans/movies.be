<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker)  {
    $values  = collect([
        'Comedy',
        'Horror',
        'Action',
        'Thriller',
        'Drama',
        'Crime',
        'Adventure'
        ]);

    return [
        'name' => $faker->text(80),
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl($width = 150, $height = 100),
        'duration' => $faker->numberBetween($min = 60, $max = 180),
        'releaseDate' => $faker->date($format = 'Y-m-d'),
        'genres' => $values->random(2)
    ];
});
