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
        for($i = 0;$i <= 23;$i++) {

       	$lottery = new \App\Models\Lottery();
        $lottery->title = 'Lottery #'.$i;
        $lottery->content = 'for charity';
        $lottery->init_value = 1000 * $i + 1000;
        $lottery->current_value = 1000 * $i + 1000;
        if($i < 9){
        	$lottery->end_date = date("Y-m-d ") .'0'. $i .':00:00';
    	}
    	else{
    		$lottery->end_date = date("Y-m-d ") . $i .':00:00';
    	}
        $lottery->user_id = 1;
        $lottery->save();
    	}
    }
}
