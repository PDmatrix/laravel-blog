<?php

use Faker\Generator as Faker;

$factory->define(\App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(20),
        'content' => $faker->text(500),
        'img_path' => 'seed.png'
    ];
});
