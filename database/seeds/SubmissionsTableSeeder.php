<?php

use App\Lesson;
use App\Submission;
use Illuminate\Database\Seeder;

class SubmissionsTableSeeder extends Seeder
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
            $submission = factory(Submission::class)->make();
            $submissions = collect([$submission]);
            $lesson->submissions()->saveMany($submissions);
        });
    }
}
