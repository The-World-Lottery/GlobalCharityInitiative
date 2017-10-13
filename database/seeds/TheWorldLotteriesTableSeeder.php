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
        $theWorldLottery->end_date = date("Y-m_d", time()+1186400);
        $theWorldLottery->user_id = 1;
        $theWorldLottery->save();
  
    }
}
