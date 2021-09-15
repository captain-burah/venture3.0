<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseUserTable extends Migration
{
    public function up()
    {
        Schema::create('course_user', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('course_id')->unsigned()->index();
            $table->foreign('course_id')->references('id')->on('courses');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('tx_id')->nullable(false);
            $table->string('tx_status')->nullable(false);
            $table->string('tx_payee_fname')->nullable(false);
            $table->string('tx_payee_lname')->nullable(false);
            $table->string('tx_payer_id')->nullable(false);
            $table->string('tx_currency_code')->nullable(false);
            $table->decimal('tx_amount', 8, 2)->nullable(false);
            $table->string('tx_payee_email')->nullable(false);
            $table->string('tx_payee_merchant_id')->nullable(false);
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
