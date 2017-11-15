<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    protected $fillable = ['title', 'content','init_value','end_date'];

    public function user()
    {
   		return $this->belongsTo('App\User','user_id');
   	}

   	 public function lotteryEntries()
    {
        return $this->hasMany('App\Models\LotteryEntry','lottery_id');
    }


    public static function lotteryFunction($time){
   		return Lottery::where('end_date', '<=', $time)->where('complete',0)->get();
   	}


   	public static function lotteryWin($id)
    {
   		//change status to complete,
   		Lottery::where('id', $id)->update(['complete' => true]);
   		//pick a weener
   		$win = \App\Models\LotteryEntry::pickWinner($id);

   		$winAmount = Lottery::where('id', $id)->value('current_value');
   		$userAmount = \App\Models\UserWallet::where('user_id',$win->id)->value('usd');
   		$userTotal = $winAmount + $userAmount; 
   		\App\Models\UserWallet::where('user_id',$win->id)->update(['usd' => $userTotal]);

   		//add money to user wallets
      Lottery::where('id', $id)->update(['winner_id' => $win->id]);

       // \Mail::raw("Congrats! You've won a Lottery", function($message){
       //  $message->subject('Please return to the site and Login to claim you prize!');
       //  $message->from('no-reply@TheWorldLottery.com', 'TheWorldLottery');
       //  $message->to($ween->email);
      // });
   		//alert admins
   		
   	}

    public function getEndDateAttribute($value)
    {
        $utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);

        return $utc;

        
    }
}
