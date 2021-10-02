<?php

use Illuminate\Database\Seeder;
use App\Discussion;
use App\Reply;
use App\User;
use App\Lecturer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class DiscussionRepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discussion::all()->each(function (Discussion $discussion)  //'each' is a laravel loop statement like 'for-each'
        {
            factory(Reply::class)->create();
            // $target = App\Reply::inRandomOrder()->take(rand(1,3))->pluck('id');
            // $replies = collect([$reply], $target);
            // $discussion->replies()->saveMany($replies);
        });
    }
}
