<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->imageUrl(640, 480, 'cats'),
        'price' => random_int(10, 99),
        'star' => random_int(2, 5),
        'category_id' => random_int(1, 10)
    ];
});
