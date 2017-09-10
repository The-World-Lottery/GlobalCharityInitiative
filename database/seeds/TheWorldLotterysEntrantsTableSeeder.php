<?php

use Illuminate\Database\Seeder;

class TheWorldLotterysEntrantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i <= 20;$i++) {

       	$theWorldLotteryEntry = new \App\Models\TheWorldLotteryEntry();
        $theWorldLotteryEntry->the_world_lottery_id = 1;
        $theWorldLotteryEntry->user_id = random_int(0, 10);
        $theWorldLotteryEntry->first_num = random_int(0, 100);
        $theWorldLotteryEntry->second_num = random_int(0, 100);
        $theWorldLotteryEntry->third_num = random_int(0, 100);
        $theWorldLotteryEntry->fourth_num = random_int(0, 100);
        $theWorldLotteryEntry->fifth_num = random_int(0, 100);
        $theWorldLotteryEntry->key_num = random_int(0, 100);
        $theWorldLotteryEntry->save();
    	}
    }
}
