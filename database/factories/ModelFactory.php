<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'FirstName' => $faker->firstName,
        'MiddleName' => $faker->lastName,
        'LastName' => $faker->lastName,
        'Username' => $faker->userName,
        'EmailAddress' => $faker->unique()->safeEmail,
        'Gender' => $faker->randomElement(['Male', 'Female']),
        'Religion' => 'Catholic',
        'Password' => $faker->password(8),
        'DateRegistered' => \Carbon\Carbon::now(),
    ];
});
