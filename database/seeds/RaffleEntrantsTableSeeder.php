<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Raffle;

class RaffleEntrantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i <= 50;$i++) {

       	$raffleEntry = new \App\Models\RaffleEntry();
        $raffleEntry->raffles_id = rand(1,20);;
        $raffleEntry->user_id = rand(1,10);;
        $raffleEntry->save();
    	}
    }
}