<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWalletsTable extends Migration
{
    public function up()
    {
         Schema::create('user_wallets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            // national currencies
            $table->decimal('usd');
            $table->decimal('eur');
            $table->decimal('jpy');
            $table->decimal('gbp');
            $table->decimal('chf');
            // cryptocurrencies
            $table->decimal('btc');
            $table->decimal('ltc');
            $table->decimal('eth');
            $table->decimal('doge');
            $table->decimal('bch');
            $table->decimal('xrp');
            
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
        Schema::drop('user_wallets');
    }
}
