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
            $table->decimal('usd',8,6);
            $table->decimal('eur',8,6);
            $table->decimal('jpy',8,6);
            $table->decimal('gbp',8,6);
            $table->decimal('chf',8,6);
            // cryptocurrencies
            $table->decimal('btc',8,6);
            $table->decimal('ltc',8,6);
            $table->decimal('eth',8,6);
            $table->decimal('doge',8,6);
            $table->decimal('bch',8,6);
            $table->decimal('xrp',8,6);
            
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
