<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('content');

            $table->integer('discussion_id')->unsigned()->index();
            $table->foreign('discussion_id')->references('id')->on('discussions');

            $table->integer('lecturer_id')->unsigned()->index()->nullable(true);
            $table->foreign('lecturer_id')->references('id')->on('lecturers');

            $table->integer('user_id')->unsigned()->index()->nullable(true);
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replies');
    }
}
