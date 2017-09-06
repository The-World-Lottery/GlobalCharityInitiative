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
    	for($i = 0;$i <= 5;$i++) {
       	$raffle= new \App\Models\Raffle();
        $raffle->title = 'emmetts'.$i;
        $raffle->content = 'for charity'.$i;
        $raffle->product ='his hair'.$i;
        $raffle->end_date = '2017-09-07 1'.$i.':00:00';
        $raffle->user_id = 1;
        $raffle->save();
    	}
    }
}
