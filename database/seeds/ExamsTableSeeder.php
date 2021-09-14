<?php

use App\Lesson;
use App\Exam;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ExamsTableSeeder extends Seeder
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
            $exam = factory(Exam::class)->make();
            $exams = collect([$exam]);
            $lesson->exams()->saveMany($exams);
        });
    }
}
