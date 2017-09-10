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
        $theWorldLottery->init_value = 100000;
        $theWorldLottery->current_value = 100000;
        $theWorldLottery->end_date = '2017-09-11 00:00:00';
        $theWorldLottery->user_id = 1;
        $theWorldLottery->save();
  
    }
}
