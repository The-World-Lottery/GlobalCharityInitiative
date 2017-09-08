<?php

use Illuminate\Database\Seeder;

class RaffleEntrantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i <= 5;$i++) {

       	$raffleEntry = new \App\Models\raffleEntry();
        $raffleEntry->raffles_id = $i;
        $raffleEntry->user_id = 1;
        $raffleEntry->save();
    	}
    }
}
