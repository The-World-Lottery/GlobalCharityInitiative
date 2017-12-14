<?php

use Illuminate\Database\Seeder;

class TheWorldLotteriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$theWorldLottery = new \App\Models\TheWorldLottery();
        $theWorldLottery->title = 'TheWorldLottery';
        $theWorldLottery->init_value = 10000000000;
        $theWorldLottery->current_value = 10000000000;
        
        $date = new DateTime(date('Y-m-d H:i:s'));
        // $date->add(new DateInterval('PT1M')); 
        $date->add(new DateInterval('PT20S')); 
        $theWorldLottery->end_date = $date->format('Y-m-d H:i:s');
        // $theWorldLottery->winner_id = null;
        $theWorldLottery->user_id = 1;
        $theWorldLottery->save();
    }
}
