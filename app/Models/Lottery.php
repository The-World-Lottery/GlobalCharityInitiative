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
   		return Lottery::where('end_date', '<=', $time)->get();
   	}


   	public static function lotteryWin($id){
   		//change status to complete,
   		Lottery::where('id', $id)->update(['complete' => 1]);
   		//pick a weener
   		$ween = \App\Models\LotteryEntry::pickWinner($id);

   		//$winAmount = Lottery::where('id', $id)->value('current_value');

   		//$ween->usd += $winAmount;
   		//add money to user wallets
   		//alert admins
   		
   	}

        public function getEndDateAttribute($value)
    {
        $utc = \Carbon\Carbon::createFromFormat($this->getDateFormat(), $value);

        return $utc;

        
    }
}
