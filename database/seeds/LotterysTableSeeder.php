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
       	$lotterys = new \App\Models\Lottery();
        $lotterys->title = 'emmetts'.$i;
        $lotterys->content = 'for charity'.$i;
        $lotterys->product ='his hair'.$i;
        $lotterys->end_date = '2017-09-07 1'.$i.':00:00';
        $lotterys->user_id = 1;
        $lotterys->save();
    	}
    }
}
