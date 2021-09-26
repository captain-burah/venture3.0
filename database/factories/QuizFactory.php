<?php

use App\Quiz;
use Faker\Generator as Faker;

$factory->define(App\Quiz::class, function (Faker $faker) {
    
    $quiz_name = [
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

        'name' => $faker->randomElement($quiz_name),
        'lesson' => $faker->randomElement($lessons),
        'description' => $faker->text,
        'notes' => $faker->text,
        'lecturer_id' => App\Lecturer::inRandomOrder()->first()->id,
    ];
    
});
