<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->integer('applyer')->unsigned();
            $table->integer('applied')->unsigned();
            $table->foreign('applyer')->references('id')->on('users');
            $table->foreign('applied')->references('id')->on('users');
            $table->integer('status');//0好友，1申请中，2拒绝
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
        Schema::drop('friends');
    }
}
