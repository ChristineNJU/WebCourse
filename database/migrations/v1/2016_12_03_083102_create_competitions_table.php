<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->integer('authorid')->unsigned();
            $table->foreign('authorid')->references('id')->on('users');
            $table->string('title');
            $table->dateTime('begin');
            $table->dateTime('end');
            $table->integer('peopleHave');
            $table->integer('peopleAll');
            $table->increments('id');
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
        Schema::drop('competitions');
    }
}
