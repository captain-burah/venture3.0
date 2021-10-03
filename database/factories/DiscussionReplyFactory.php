<?php

use App\Discussion;
use App\Lecturer;
use App\User;
use App\Reply;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(App\Reply::class, function (Faker $faker) {
    $xample = [
        'Find the COG',
        "Can't resolve this Bow's Notation",
        'Which class is good for Chemistry',
        'Need an Accounts private tutor',
        'Which is the best institute for Olevel Maths'
    ];
    return [
        'content' => $faker->paragraphs($nb=10, $asText = true),
        'discussion_id' => App\Discussion::inRandomOrder()->first()->id,
        'lecturer_id' => App\Lecturer::inRandomOrder()->first()->id,
        'user_id' => App\User::inRandomOrder()->first()->id,
    ];
});
