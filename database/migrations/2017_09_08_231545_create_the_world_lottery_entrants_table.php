<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTheWorldLotteryEntrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('the_world_lottery_entries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('the_world_lottery_id')->unsigned();
            $table->foreign('the_world_lottery_id')->references('id')->on('the_world_lotteries');
            $table->integer('first_num');
            $table->integer('second_num');
            $table->integer('third_num');
            $table->integer('fourth_num');
            $table->integer('fifth_num');
            $table->integer('key_num');
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
         Schema::drop('the_world_lottery_entries');
    }
}
