<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('raffle_entries')->truncate();
        DB::table('lottery_entries')->truncate();
        DB::table('suggestions')->truncate();
        DB::table('users')->truncate();
        DB::table('lotteries')->truncate();
        DB::table('raffles')->truncate();


        $this->call('UsersTableSeeder');
        $this->call('SuggestionsTableSeeder');
        $this->call('RafflesTableSeeder');
        $this->call('LotterysTableSeeder');
        $this->call('LotteryEntrantsTableSeeder');
        $this->call('RaffleEntrantsTableSeeder');

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        Model::reguard();
    }
}
