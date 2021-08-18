<?php

use App\Lecturer;
use App\Course;
use Illuminate\Database\Seeder;

class AcademicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lecturer::all()->each(function (Lecturer $lecturer)  //'each' is a laravel loop statement like 'for-each'
        {
            $course = factory(Course::class)->make();
            $courses = collect([$course]);
            $lecturer->courses()->saveMany($courses);
        });
        
        foreach(Course::all() as $course) {
            $users = App\User::inRandomOrder()->take(rand(1,3))->pluck('id');
            $course->users()->attach($users);
        }
    }
}