<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TheWorldLottery extends Model
{
    protected $fillable = ['title','user_id','end_date','init_value','current_value','complete'];

	 public function user()
	 {
		return $this->belongsTo('App\User','user_id');
   	}

   	public static function TheWorldLotteryFunction($now){
   		//Find expired World lottos
      // var_dump(TheWorldLottery::orderBy('id','desc')->limit(1)->get()[0]['id']);
      // var_dump(TheWorldLottery::where('end_date', '<', $now)->where('complete',0)->get());
   		return TheWorldLottery::orderBy('id','desc')->limit(1)->get()[0]['id'];
   	}

   	public static function TheWorldLotteryWin($id)
    {
   		//change status to complete,
   		TheWorldLottery::where('id', $id)->update(['complete' => true]);

      
      $biglot = TheWorldLottery::where('id',$id)->value('current_value');
      $winners = \App\Models\TheWorldLotteryEntry::findWinners($id);
      // var_dump($winners);

      if(isset($winners)){
        // var_dump("Its gabi this dumb language!");
   			$nextWorldCut = $biglot * .2; 
   			$biglot -= $nextWorldCut;
        // var_dump($nextWorldCut);
   			$numbOfWinners = count($winners);
   			$cut = $biglot / $numbOfWinners;

   			foreach ($winners as $winner) {
   				$userAmount = \App\Models\UserWallet::where('user_id',$winner)->value('usd');
   				$userTotal = $cut + $userAmount; 
   				\App\Models\UserWallet::where('user_id',$winner)->update(['usd' => $userTotal]);
   			}

   			$theWorldLottery = new \App\Models\TheWorldLottery();
        $theWorldLottery->title = 'TheWorldLottery' . ($id + 1);
        $theWorldLottery->init_value = $nextWorldCut;
        $theWorldLottery->current_value = $nextWorldCut;

        $date = new \DateTime(date('Y-m-d H:i:s'));
        $date->add(new \DateInterval('P14D'));
        $theWorldLottery->end_date = $date->format('Y-m-d H:i:s');

        $theWorldLottery->user_id = 1;
        // $theWorldLottery->winner_id = $winners[0]['id'];
        // $theWorldLottery->winner_id = 2;
        $theWorldLottery->save();
	   		TheWorldLottery::where('id', $id)->update(['winner_id' => $winners[0]['id']]);

   		} else {

        // var_dump("Hello?");
        $theWorldLottery = new \App\Models\TheWorldLottery();
        $theWorldLottery->title = 'TheWorldLottery' . ($id + 1);
        $theWorldLottery->user_id = 1;
        $theWorldLottery->init_value = $biglot;
        $theWorldLottery->current_value = $biglot;
        // var_dump($biglot);

        $date = new \DateTime(date('Y-m-d H:i:s'));
        $date->add(new \DateInterval('P14D'));
        $theWorldLottery->end_date = $date->format('Y-m-d H:i:s');

        $theWorldLottery->complete = 0;
        $theWorldLottery->winner_id = 1;
        $theWorldLottery->save();

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
