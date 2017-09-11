<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LotteryEntry extends Model
{
	protected $fillable = ['user_id', 'lottery_id'];

    public function user()
    {
   		return $this->belongsTo('App\User','user_id');
   	}

   	public function lottery()
   	{
   	return $this->belongsTo('App\Models\Lottery','lottery_id');
   }

   public static function filterEntrants($lottoId)
   {
   		$entrants = LotteryEntry::where('lottery_id', '=', $lottoId)->get();

   	
   		if (count($entrants)) {
   			return false;
   		}

   		return true;

   }
}
