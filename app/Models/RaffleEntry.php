<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RaffleEntry extends Model
{
	protected $fillable = ['user_id', 'lottery_id'];

    public function user()
    {
   		return $this->belongsTo('App\User','user_id');
   	}

   	public function raffle()
   	{
   	return $this->belongsTo('App\Models\Raffle','raffles_id');
   }
    public static function filterEntrants($raffleId)
   {
   		$entrants = RaffleEntry::where('raffles_id', '=', $raffleId)->get();

   		

   		if (count($entrants)) {
   			return false;
   		}

   		return true;

   }
}
