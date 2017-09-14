<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TheWorldLotteryEntry extends Model
{
    protected $fillable = ['user_id', 'the_world_lottery_id', 'first_num', 'second_num', 'third_num', 'fourth_num', 'fifth_num', 'key_num'];

    public function user()
    {
   		return $this->belongsTo('App\User','user_id');
   	}

   	public function theworldlottery()
   	{
   		return $this->belongsTo('App\Models\TheWorldLottery','the_world_lottery_id');
    }

    public static function findWinners(){
    	$numb = [];
      	for($i = 0;$i < 6; $i++){
      		$numb[] = rand(0,100);
  		}
  		$peeps = TheWorldLotteryEntry::where('the_world_lottery_id' , $id)->get();
  		foreach ($peeps as $peep) {
  			$x = 0;
  			if($peep->first_num == $numb[0]){
  				$x++; 
  			}
  			if($peep->second_num == $numb[1]){
  				$x++; 
  			}
  			if($peep->third_num == $numb[2]){
  				$x++; 
  			}
  			if($peep->fourth_num == $numb[3]){
  				$x++; 
  			}
  			if($peep->fifth_num == $numb[4]){
  				$x++; 
  			}
  			if($peep->key_num == $numb[5]){
  				$x++; 
  			}
  			if($x === 6){
  				$winners[] = $peep->user_id;
  			}
  		}
  		if(isset($winners)){
     		return $winners;
     	}
     	else{
     		return null;
     	}
   }
}
