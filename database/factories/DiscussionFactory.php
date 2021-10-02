<?php

use App\Discussion;
use App\Lecturer;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(App\Discussion::class, function (Faker $faker) {
    $xample = [
        'Find the COG',
        "Can't resolve this Bow's Notation",
        'Which class is good for Chemistry',
        'Need an Accounts private tutor',
        'Which is the best institute for Olevel Maths'
    ];
    return [
        'name' => $faker->randomElement($xample),
        'content' => $faker->text(),
        'lecturer_id' => App\Lecturer::inRandomOrder()->first()->id,
        'user_id' => App\User::inRandomOrder()->first()->id,
    ];
});
