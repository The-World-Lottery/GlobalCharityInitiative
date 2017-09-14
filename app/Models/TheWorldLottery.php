<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TheWorldLottery extends Model
{
    protected $fillable = ['title','user_id','end_date','init_value'];

	 public function user()
	 {
		return $this->belongsTo('App\User','user_id');
   	}

   	public static function TheWorldLotteryFunction($time){
   		//Find expired World lottos
   		return TheWorldLottery::where('end_date', '<', $time)->where('complete',0)->get();
   	}

   	public static function TheWorldLotteryWin($id){
   		//change status to complete,
   		TheWorldLottery::where('id', $id)->update(['complete' => true]);
   		
   		// find a weener(s)
   		$winners = \App\Models\TheWorldLotteryEntry::findWinners($id);
   		var_dump($winners);
   		if(isset($winners)){
   			$biglot = TheWorldLottery::where('id',$id)->value('current_value');
   			$nextWorldCut = $biglot * .2; 
   			$biglot -= $nextWorldCut;
   			$numbOfWinners = count($winners);
   			$cut = $biglot / $numbOfWinners;
   			foreach ($winners as $winner) {
   				$userAmount = \App\Models\UserWallet::where('user_id',$winner)->value('usd');
   				$userTotal = $cut + $userAmount; 
   				\App\Models\UserWallet::where('user_id',$winner)->update(['usd' => $userTotal]);
   			}

   			$theWorldLottery = new \App\Models\TheWorldLottery();
        	$theWorldLottery->title = 'TheWorldLottery';
        	$theWorldLottery->init_value = $nextWorldCut;
        	$theWorldLottery->current_value = $nextWorldCut;
        	$theWorldLottery->end_date = date("Y-m_d", time()+ 1209600);
        	$theWorldLottery->user_id = 1;
        	$theWorldLottery->winner_id = 1;
        	$theWorldLottery->save();
	   		TheWorldLottery::where('id', $id)->update(['winner_id' => $winner[0]]);
   		}
   		else{
   			TheWorldLottery::where('id', $id)->update(['complete' => 0, 'end_date' => date("Y-m_d", time()+ 1209600)]);
   		}

   		  // \Mail::raw("Congrats! You've won the World Lottery!", function($message){
       //  $message->subject('Please return to the site and Login to claim you prize!');
       //  $message->from('no-reply@TheWorldLottery.com', 'TheWorldLottery');
       //  $message->to($ween->email);
   	}
   	

   	public function theWorldLotteryEntries()

    {
        return $this->hasMany('App\Models\TheWorldLotteryEntry','the_world_lottery_id');
    }

	public function getEndDateAttribute($value)
	{
		$utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);

		return $utc;
	
	}
}
