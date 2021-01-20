<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stu_email')->unique()->index();
            $table->string('profileImg')->default('profile.png');
            $table->string('bio')->nullable(true);
            $table->string('gender')->nullable(true);
            $table->string('contact')->nullable(true);
            $table->date('dob')->nullable(true);
            $table->string('profession')->nullable(true);
            $table->string('experience')->nullable(true);
            $table->string('qualifications')->nullable(true);
            $table->string('school')->nullable(true);
            $table->string('achievements')->nullable(true);
            $table->string('address01')->nullable(true);
            $table->string('address02')->nullable(true);
            $table->string('address03')->nullable(true);
            $table->string('address04')->nullable(true);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('stu_email')->references('email')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_infos');
    }
}
