<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(true);
            $table->decimal('price', 8, 2)->nullable(true);
            $table->string('duration')->nullable(true);
            $table->string('accounts')->nullable(true);
            $table->string('students')->nullable(true);
            $table->string('storage')->nullable(true);
        });

        DB::table('subscriptions')->insert(
            [
                'id' => 1,
                'name' => 'Starter',
                'price' => 0.00,
                'duration' => '30 days',
                'accounts' => '2',
                'students' => '100',
                'storage' => '1 GB',
            ],
        );
        DB::table('subscriptions')->insert(

            [
                'id' => 2,
                'name' => 'Beginner',
                'price' => 10000.00,
                'duration' => '30 days',
                'accounts' => '2',
                'students' => '30',
                'storage' => '2 GB',
            ],
        );

        DB::table('subscriptions')->insert(

            [
                'id' => 3,
                'name' => 'Master',
                'price' => 20000.00,
                'duration' => '30 days',
                'accounts' => '5',
                'students' => '120',
                'storage' => '5 GB',
            ],
        );

        DB::table('subscriptions')->insert(

            [
                'id' => 4,
                'name' => 'Professor',
                'price' => 50000.00,
                'duration' => '30 days',
                'accounts' => '15',
                'students' => '100000',
                'storage' => '10 GB',
            ],  
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
