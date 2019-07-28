<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Data;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(Data::class, function (Faker $faker) {
    $data = [
        'name' => $faker->name,
        'age' => $faker->numberBetween(18, 65),
        'email' => $faker->email,
        'country' => $faker->country,
        'city' => $faker->city,
        'streetAddress' => $faker->streetAddress,
        'phoneNumber' => $faker->phoneNumber,
        'company' => $faker->company,
        'jobTitle' => $faker->jobTitle,
    ];
    $data = json_encode($data);
//    dd($data);
    return [
        'data' => $data,
    ];
});
