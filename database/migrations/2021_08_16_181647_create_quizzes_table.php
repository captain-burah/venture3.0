<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name');
            $table->string('lesson');
            $table->string('description');
            $table->string('notes');

            $table->integer('lesson_id')->unsigned()->index()->nullable(true);
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
            
            $table->integer('lecturer_id')->unsigned()->index()->nullable(true);
            $table->foreign('lecturer_id')->references('id')->on('lecturers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
}
