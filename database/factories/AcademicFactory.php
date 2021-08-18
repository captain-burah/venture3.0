<?php

use App\Course;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;



$factory->define(App\Course::class, function (Faker $faker) {
    $suffix = [
        'A/L Physics 2021',
        'A/L Physics 2022',
        'A/L Comb. Maths 2021',
        'A/L Comb. Maths 2022',
        'A/L Chemistry 2022',
        'A/L Biology 2022',
        'A/L Accounting 2021',
        'A/L Accounting 2022',
        'A/L Economics 2022',
        'A/L Business 2022',
        'A/L ICT 2022',
        'O/L ICT 2021',
        'O/L Science 2021',
        'O/L Maths 2021',
        'O/L English 2021',
        'O/L Literature 2021',
    ];
    
    $week = [
        '1 week',
        '2 weeks',
        '3 weeks',
        '4 weeks',
        '5 weeks',
        '6 weeks',
        '7 weeks',
        '8 weeks',
        '9 weeks',
        '10 weeks'
    ];
    return [
        'name' => $faker->randomElement($suffix),
        'tutor' => $faker->name,
        'duration' => $faker->randomElement($week),
        'description' => $faker->text(),
        'price' => $faker->numberBetween(50000, 500000),
        'thumbnail' => $faker->imageUrl($width=480, $height=480, 'cats'), // 'http://lorempixel.com/800/400/cats/Faker'
        'cover' => $faker->imageUrl($width=820, $height=312, 'cats'), // 'http://lorempixel.com/800/400/cats/Faker'
    ];
});
