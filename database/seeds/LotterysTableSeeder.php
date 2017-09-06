<?php

use Illuminate\Database\Seeder;

class LotterysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i <= 5;$i++) {
       	$lottery = new \App\Models\Lottery();
        $lottery->title = 'emmetts'.$i;
        $lottery->content = 'for charity'.$i;
        $lottery->init_value ='his hair'.$i;
        $lottery->end_date = '2017-09-07 1'.$i.':00:00';
        $lottery->user_id = 1;
        $lottery->save();
    	}
    }
}
