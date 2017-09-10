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
        for($i = 0;$i <= 20;$i++) {

       	$lottery = new \App\Models\Lottery();
        $lottery->title = 'Lottery #'.$i;
        $lottery->content = 'for charity';
        $lottery->init_value = 1000 * $i;
        $lottery->end_date = '2017-09-11 1'. $i .':00:00';
        $lottery->user_id = 1;
        $lottery->save();
    	}
    }
}
