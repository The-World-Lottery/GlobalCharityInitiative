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
        for($i = 0;$i <= 20;$i++) {

       	$lotteryEntry = new \App\Models\LotteryEntry();
        $lotteryEntry->lottery_id = 1;
        $lotteryEntry->user_id = 1;
        $lotteryEntry->save();
    	}
    }
}
