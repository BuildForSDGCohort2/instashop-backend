<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
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

$factory->define(Company::class, function (Faker $faker) {
    $phoneFax = $faker->e164PhoneNumber;
    $company = $faker->unique()->catchPhrase;
    return [
        'name' => $company,
        'address' => $faker->address,
        'registration_id' => $company,
        'website' => $faker->domainName,
        'fax' => $phoneFax, 
        'phone' => $phoneFax,
        'manager_id' => factory('App\User')->create()->id
    ];
});
