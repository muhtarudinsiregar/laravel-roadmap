<?php

use Faker\Generator as Faker;
use App\Entities\Blog;

$factory->define(Blog::class, function (Faker $faker) {
    $title = $faker->sentence();
    return [
        'user_id' => 1,
        'title' => $title,
        'slug' => str_slug($title),
        'content' => $faker->paragraph(),
    ];
});
