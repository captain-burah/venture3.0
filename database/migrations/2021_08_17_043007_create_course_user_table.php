<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_user', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('course_id')->unsigned()->index();
            $table->foreign('course_id')->references('id')->on('courses');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('tx_id')->unsigned()->index()->nullable(false)->default('10');
            $table->string('tx_status')->nullable(false);
            $table->string('tx_create_time')->nullable(false);
            $table->string('tx_update_time')->nullable(false);
            $table->string('tx_payee_fname')->nullable(false);
            $table->string('tx_payee_lname')->nullable(false);
            $table->integer('tx_payer_id')->unsigned()->nullable(false);
            $table->string('tx_currency_code')->nullable(false);
            $table->integer('tx_amount')->unsigned()->nullable(false);
            $table->string('tx_payee_email')->nullable(false);
            $table->integer('tx_payee_merchant_id')->unsigned()->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_user');
    }
}
