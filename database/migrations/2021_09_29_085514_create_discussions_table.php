<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscussionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('name');
            $table->longText('content');

            $table->integer('channel_id')->unsigned()->index();
            $table->foreign('channel_id')->references('id')->on('channels');

            $table->integer('lecturer_id')->unsigned()->index()->nullable(true);
            $table->foreign('lecturer_id')->references('id')->on('lecturers');

            $table->integer('user_id')->unsigned()->index()->nullable(true);
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discussions');
    }
}
