<?php

use Illuminate\Database\Seeder;

use App\Lecturer;
use App\Subscription;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Lecturer::all() as $lecturer) {
            $faker = Faker::create();
            $lecturers = App\Subscription::inRandomOrder()->take(rand(1,4))->pluck('id');
            $lecturer->subscriptions()->attach($lecturers,  
            [
                'tx_id' => $faker->randomDigit,
                'tx_status' => $faker->boolean,
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
