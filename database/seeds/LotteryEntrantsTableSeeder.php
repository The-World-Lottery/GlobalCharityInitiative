<?php

use Illuminate\Database\Seeder;

class LotteryEntrantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i <= 5;$i++) {

       	$lotteryEntry = new \App\Models\LotteryEntry();
        $lotteryEntry->lottery_id = $i;
        $lotteryEntry->user_id = 1;
        $lotteryEntry->save();
    	}
    }
}
