<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Request;
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

$factory->define(Request::class, function (Faker $faker) {
    
    return [
        'title' => $faker->text(20),
        'quantity' => $faker->float(999999.99),
        'delivery_time' => $faker->date('31-08-2020'),
        'budget' => $faker->float(4000),
        'description' => $faker->randomHtml(3,2),
        'buyer_id' => factory('App\User')->create()->id
    ];
});
