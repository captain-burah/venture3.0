<?php

use Faker\Generator as Faker;

$factory->define(App\Assignment::class, function (Faker $faker) {
    $assignment_name = [
        'Exam 1',
        'Algebra 1',
        'Term Test',
        'Mid-Term Test',
        'Quiz',
    ];
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

        'name' => $faker->randomElement($assignment_name),
        'lesson' => $faker->randomElement($lessons),
        'description' => $faker->text,
        'notes' => $faker->text,
    ];
});
