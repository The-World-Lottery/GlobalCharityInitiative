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
        for($i = 0;$i <= 20;$i++) {

       	$raffleEntry = new \App\Models\RaffleEntry();
        $raffleEntry->raffles_id = 1;
        $raffleEntry->user_id = 1;
        $raffleEntry->save();
    	}
    }
}