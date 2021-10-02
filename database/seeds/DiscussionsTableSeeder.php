<?php

use Illuminate\Database\Seeder;
use App\Discussion;
use App\User;
use App\Channel;
use App\Lecturer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::all()->each(function (Channel $channel)  //'each' is a laravel loop statement like 'for-each'
        {
            $discussion = factory(Discussion::class)->make();
            $target = App\Discussion::inRandomOrder()->take(rand(1,3))->pluck('id');
            $discussions = collect([$discussion], $target);
            $channel->discussions()->saveMany($discussions);
        });
    }
}