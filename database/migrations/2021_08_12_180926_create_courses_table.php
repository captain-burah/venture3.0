<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('tutor');
            $table->string('duration');
            $table->string('description');
            $table->string('author');
            $table->string('status');
            $table->string('objectives');
            $table->string('learning_outcomes');
            $table->string('certificate')->default('certificate.png');
            $table->string('course_leader');
            $table->string('image')->default('image.png');
            $table->integer('price')->default('0');

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
        Schema::dropIfExists('courses');
    }
}
