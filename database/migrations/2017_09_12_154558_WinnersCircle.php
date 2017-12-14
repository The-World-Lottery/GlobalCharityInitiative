<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WinnersCircle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('raffles', function (Blueprint $table) {
            $table->integer('winner_id')->nullable();
            $table->foreign('winner_id')->references('id')->on('users');
        });
          Schema::table('lotteries', function (Blueprint $table) {
            $table->integer('winner_id')->nullable();
            $table->foreign('winner_id')->references('id')->on('users');
        });
           Schema::table('the_world_lotteries', function (Blueprint $table) {
            $table->integer('winner_id')->nullable();
            $table->foreign('winner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('raffles', function (Blueprint $table) {
            $table->dropForeign(['winner_id']);
            $table->dropColumn('winner_id');
        });
        Schema::table('lotteries', function (Blueprint $table) {
            $table->dropForeign(['winner_id']);
            $table->dropColumn('winner_id');
        });
        Schema::table('the_world_lotteries', function (Blueprint $table) {
            $table->dropForeign(['winner_id']);
            $table->dropColumn('winner_id');
        });
    }
}
