<?php

use App\Course;
use App\Lesson;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
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
        });
    }
}
