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
        $raffle->end_date = '2017-09-11 1'.$i.':00:00';
        $raffle->user_id = 1;
        $raffle->save();
    	}
    }
}
