<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'title' => $this->faker->text(30),
        'image' => $this->faker->imageUrl(),
    ];
});
