<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' =>$faker->userName,
        'description' =>$faker->text(45),
        'author_id' =>$faker->numberBetween(1, 10),
        'orders'=>$faker->numberBetween(0, 1000),
        'revenue'=>$faker->numberBetween(0, 1000),
        'price'=>$faker->numberBetween(0, 15),
        'sold'=>$faker->numberBetween(0, 1000),
        'salereport'=>$faker->numberBetween(0, 20000),
    ];
});