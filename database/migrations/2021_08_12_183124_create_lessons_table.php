<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name');
            $table->string('tutor');
            $table->string('description');
            $table->string('notes');

            $table->integer('lecturer_id')->unsigned()->index()->nullable(true);
            $table->foreign('lecturer_id')->references('id')->on('lecturers')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('course_id')->unsigned()->index()->nullable(true);
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
