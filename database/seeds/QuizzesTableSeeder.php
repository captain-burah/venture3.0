<?php

use App\Lesson;
use App\Quiz;
use Illuminate\Database\Seeder;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::all()->each(function (Lesson $lesson)  //'each' is a laravel loop statement like 'for-each'
        {
            $quiz = factory(Quiz::class)->make();
            $target = App\Quiz::inRandomOrder()->take(rand(1,3))->pluck('id');
            $quizzes = collect([$quiz], $target);
            $lesson->quizzes()->saveMany($quizzes);
        });
    }
}
