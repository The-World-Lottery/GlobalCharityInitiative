<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorldLotteryComplete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('the_world_lotteries', function (Blueprint $table) {
            $table->boolean('complete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('the_world_lotteries', function (Blueprint $table) {
            $table->dropColumn('complete');
        });
    }
}
