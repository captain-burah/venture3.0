<?php

use App\Course;
use App\Lecturer;
use App\Lesson;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Course::all()->each(function (Course $course)  //'each' is a laravel loop statement like 'for-each'
        {
            $lesson = factory(Lesson::class)->make();

            $target = App\Lesson::inRandomOrder()->take(rand(1,3))->pluck('id');
            $lessons = collect([$lesson], $target);
            $course->lessons()->saveMany($lessons);

            // Lecturer::all()->each(function (Lecturer $lecturer)
            // {
            //     $lesson2 = App\Lesson::inRandomOrder()->take(rand(1,3));
            //     $target2 = App\Lesson::inRandomOrder()->take(rand(1,3))->pluck('id');
            //     $lessons2 = collect($target2);
            //     $lecturer->lessons()->attach($lessons2);
            // });
            
        });

        // Lesson::all()->each(function (Lesson $lesson)
        // {
        //     $target2 = App\Lecturer::inRandomOrder()->take(rand(1,3))->pluck('id');
        //     $lectures = collect($target2);
        //     $lesson->lessons()->saveMany($lectures);
        // });

        // factory(App\Lesson::class, 100)->create()->each(function ($lesson) {
        //     $target2 = App\Lecturer::inRandomOrder()->take(rand(1,3))->pluck('id');
        //     $lectures = collect($target2);
        //     $lesson->lecturer()->saveMany($lectures);
        // });
    }
}
