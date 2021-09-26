<?php

use App\Lesson;
use Faker\Generator as Faker;

$factory->define(App\Lesson::class, function (Faker $faker) {
    $lessons = [
        'Calculus',
        'Algebra',
        'Fluid Mechanics',
        'Electronics',
        'NPV',
        'Final Accounting',
        'Foreign Exchange Reserves',
    ];
    return [

        'name' => $faker->randomElement($lessons),
        'tutor' => $faker->name,
        'description' => $faker->text,
        'notes' => $faker->text,
        'lecturer_id' => App\Lecturer::inRandomOrder()->first()->id,
    ];
});
