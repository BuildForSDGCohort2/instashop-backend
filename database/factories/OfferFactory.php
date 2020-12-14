<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Offer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Offer::class, function (Faker $faker) {

    return [
        'description' => $faker->randomHtml(3,2),
        'delivery_time' => $faker->date('2020-08-31'),
        'valid_from' => $faker->text(50),
        'valid_to' => $faker->text(50),
        'status' => $faker->text(50),
        'product_id' => factory('App\Product')->create()->id
    ];
});
