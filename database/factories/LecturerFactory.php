<?php

use App\Lecturer;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(App\Lecturer::class, function (Faker $faker) {
    $reg_status = [
        'true',
        'false',
    ];

    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'email' => $faker->email,
        'password' => $faker->password,
        'regStatus' => $faker->randomElement($reg_status),
        'remember_token' => str_random(10),
    ];
});
