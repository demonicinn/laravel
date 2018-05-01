<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Employee::class, function (Faker $faker) {
    return [
        'company_id' => rand(1, 20),
        'firstname' => $faker->firstName(),
        'lastname' => $faker->lastName(),
        'email' => $faker->email(),
    ];
});