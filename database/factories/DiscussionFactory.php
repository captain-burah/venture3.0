<?php

use App\Discussion;
use App\Lecturer;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(App\Discussion::class, function (Faker $faker) {
    $xample = [
        'A car travelling along a straight road has kinetic energy of 180 kJ. 
        The brakes are applied, and it is brought to rest over a distance of 60 m. 
        What is the average force of the car breaks?',
        "Which of the following has kinetic energy?",
        'Some energy is given to heat some water. 
        If three times as much water were to be heated for three times as 
        long, how would the new temperature rise compare?',
        'What are the particles responsible for transferring electrical energy from a cell, through conducting wires in an electric circuit?',
        'Are there nuclear reactions going on in our bodies?',
        'Can humans ever directly see a photon?',
        'Suggest the pH of the solution made when potassium oxide dissolves in water.',
        'What eventually happens to a gas if its pressure is increased?',
        'Why do metals have high boiling points?',
        'Should I use cash-basis or accrual accounting?',
        'What is the difference of using straight-forward depreciation',
        'Möbius strip is so-called after the German mathematician August Ferdinand Möbius. 
        The amazing properties of the Möbius strip had also been discovered by another 
        mathematician 2 months earlier in 1858. He was?',
    ];
    return [
        'name' => $faker->randomElement($xample),
        'content' => $faker->paragraphs($nb=10, $asText = true),
        'lecturer_id' => App\Lecturer::inRandomOrder()->first()->id,
        'user_id' => App\User::inRandomOrder()->first()->id,
    ];
});
