<?php

use Faker\Generator as Faker;
use App\Entities\Product;

$factory->define(Product::class, function (Faker $faker) {
    $lorem = $faker->sentence();
    return [
        'name' => $lorem,
        'description' => $faker->word(),
        'slug' => str_slug($lorem),
    ];
});
