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


   	public static function lotteryWin($id){
   		//change status to complete,
   		Lottery::where('id', $id)->update(['complete' => true]);
   		//pick a weener
   		$ween = \App\Models\LotteryEntry::pickWinner($id);

   		$winAmount = Lottery::where('id', $id)->value('current_value');
   		$userAmount = \App\Models\UserWallet::where('user_id',$ween->id)->value('usd');
   		$userTotal = $winAmount + $userAmount; 
   		\App\Models\UserWallet::where('user_id',$ween->id)->update(['usd' => $userTotal]);

   		//add money to user wallets
   		//alert admins
   		
   	}

        public function getEndDateAttribute($value)
    {
        $utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);

        return $utc;

        
    }
}
