<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
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

$factory->define(Product::class, function (Faker $faker) {
    $phoneFax = $faker->e164PhoneNumber;
    $company = $faker->unique()->catchPhrase;
    return [
        'title' => $faker->text(20),
        'price' => $faker->randomFloat(2, 0, 999999.99),
        'description' => $faker->randomHtml(3,2),
        'supplier_id' => factory('App\User')->create()->id
    ];
});
