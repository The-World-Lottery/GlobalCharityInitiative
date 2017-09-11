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
   	return $this->belongsTo('App\Models\Raffle','raffle_id');
   }

   public static function pickWinner($id){
    $user_id = RaffleEntry::select('user_id')->where('id', $id)->get();
    $arr = (array)$user_id;
    if (!empty($arr)) {
      $weener = rand(0,count($user_id)-1);
      $winner = $user_id[$weener]['user_id'];
      $victor = \App\User::find($winner);
      return $victor;
    }
    return false;
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
