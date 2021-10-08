<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name');

            $table->integer('lesson_id')->unsigned()->index()->nullable(true);
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');

            $table->integer('user_id')->unsigned()->index()->nullable(true);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('quiz_id')->unsigned()->index()->nullable(true);
            $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');

            $table->integer('exam_id')->unsigned()->index()->nullable(true);
            $table->foreign('exam_id')->references('id')->on('exams')->onDelete('cascade');

            $table->integer('assignment_id')->unsigned()->index()->nullable(true);
            $table->foreign('assignment_id')->references('id')->on('assignments')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submissions');
    }
}
