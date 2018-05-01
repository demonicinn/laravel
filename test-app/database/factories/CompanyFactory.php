<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company(),
        'street' => $faker->streetAddress(),
        'postcode' => $faker->postcode(),
        'city' => $faker->city(),
        'country' => $faker->countryCode()
    ];
});