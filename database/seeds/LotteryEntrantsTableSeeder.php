<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Lottery;

class LotteryEntrantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i <= 50;$i++) {

       	$lotteryEntry = new \App\Models\LotteryEntry();
        $lotteryEntry->lottery_id = rand(1,25);;
        $lotteryEntry->user_id = rand(1,10);
        $lotteryEntry->save();
    	}
    }
}
