<?php

use App\Lecturer;
use App\Course;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;

class AcademicsTableSeeder extends Seeder
{
    public function run()
    {
        Lecturer::all()->each(function (Lecturer $lecturer)  //'each' is a laravel loop statement like 'for-each'
        {
            $course = factory(Course::class)->make();
            $courses = collect([$course]);
            $lecturer->courses()->saveMany($courses);
        });
        
        foreach(Course::all() as $course) {
            $faker = Faker::create();
            $users = App\User::inRandomOrder()->take(rand(1,3))->pluck('id');
            $course->users()->attach($users,  
            [
                'tx_id' => $faker->randomDigit,
                'tx_status' => $faker->boolean,
                'tx_create_time' => $faker->iso8601,
                'tx_update_time' => $faker->iso8601,
                'tx_payee_fname' => $faker->firstName,
                'tx_payee_lname' => $faker->lastName,
                'tx_payer_id' => $faker->randomDigit,
                'tx_currency_code' => $faker->city,
                'tx_amount' => $faker->randomDigit,
                'tx_payee_email' => $faker->email,
                'tx_payee_merchant_id' => $faker->randomDigit,
            ]);
        }
    }
}
//     private function create()
//     {
//         $faker = Factory::create();
//         return DB::table('course_user');
//     }
// }
// $arrays = ([
            //     'id' => App\User::inRandomOrder()->take(rand(1,3))->pluck('id'),
            //     'tx_id' => $faker->randomDigit,
            //     'tx_status' => $faker->boolean,
            //     'tx_create_time' => $faker->iso8601,
            //     'tx_update_time' => $faker->iso8601,
            //     'tx_payee_fname' => $faker->firstName,
            //     'tx_payee_lname' => $faker->lastName,
            //     'tx_payer_id' => $faker->randomDigit,
            //     'tx_currency_code' => $faker->city,
            //     'tx_amount' => $faker->randomDigit,
            //     'tx_payee_email' => $faker->email,
            //     'tx_payee_merchant_id' => $faker->randomDigit,
            // ]);
            // $user = '';
            // foreach ($arrays as $a => $key)
            // {
            //     $user .= $key.',';
            // }
            // $users = substr($user,0,-1);
            // foreach ($users as $subQuery => $key){
                // $course->users()->attach($users);
            // }
            // $course->users()->attach($users);