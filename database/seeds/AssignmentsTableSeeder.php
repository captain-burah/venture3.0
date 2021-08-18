<?php

use App\Lesson;
use App\Assignment;
use Illuminate\Database\Seeder;

class AssignmentsTableSeeder extends Seeder
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
            $assignment = factory(Assignment::class)->make();
            $assignments = collect([$assignment]);
            $lesson->assignments()->saveMany($assignments);
        });
    }
}
