<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RaffleComplete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('raffles', function (Blueprint $table) {
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
        Schema::table('raffles', function (Blueprint $table) {
            $table->dropColumn('complete');
        });
    }
}
