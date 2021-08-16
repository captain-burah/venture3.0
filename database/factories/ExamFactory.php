<?php

use App\Exam;
use Faker\Generator as Faker;

$factory->define(App\Exam::class, function (Faker $faker) {
    $exam_name = [
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

        'name' => $faker->randomElement($exam_name),
        'lesson' => $faker->randomElement($lessons),
        'description' => $faker->text,
        'notes' => $faker->text,
    ];
});
