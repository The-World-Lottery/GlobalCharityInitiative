<?php

use Illuminate\Database\Seeder;

class RafflesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i = 0;$i <= 20;$i++) {
       	$raffle= new \App\Models\Raffle();
        $raffle->title = 'Raffle #'. $i;
        $raffle->content = 'for charity'.$i;
        $raffle->product ='A product donated by company # '.$i . ' to advertise their business.';
       if($i < 9){
        	$raffle->end_date = date("Y-m-d ") .'0'. $i .':00:00';
    	}
    	else{
    		$raffle->end_date = date("Y-m-d ") . $i .':00:00';
    	}
        $raffle->user_id = 1;
        $raffle->save();
    	}
    }
}
