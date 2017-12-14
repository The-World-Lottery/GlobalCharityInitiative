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

    public static function findWinners($id){
    	$numb = [];
      	for($i = 0;$i < 5; $i++){
          $randNum = rand(0,100);
          if(!in_array($randNum, $numb)){
      		  $numb[] = $randNum;
          }
    		}
      $key = rand(0,100);
  		$peeps = TheWorldLotteryEntry::where('the_world_lottery_id' , $id)->get();
  		foreach ($peeps as $peep) {
  			$x = 0;
        if (in_array($peep->first_num, $numb)) {
            $x++;
        }
        if (in_array($peep->second_num, $numb)) {
            $x++;
        }
        if (in_array($peep->third_num, $numb)) {
            $x++;
        }
        if (in_array($peep->fourth_num, $numb)) {
            $x++;
        }
        if (in_array($peep->fifth_num, $numb)) {
            $x++;
        }	
  			if($peep->key_num == $key){
  				$x++; 
  			}
  			if($x === 6){
  				$winners[] = $peep->user_id;
  			}
  		}
  		if(isset($winners))
      {
     		return $winners;
     	}
     	else
      {
     		return null;
     	}
   }
}
