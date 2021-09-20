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
            $target = App\Assignment::inRandomOrder()->take(rand(1,3))->pluck('id');
            $assignments = collect([$assignment], $target);
            $lesson->assignments()->saveMany($assignments);
        });
    }
}
