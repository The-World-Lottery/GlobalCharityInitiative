<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raffle extends Model
{
     protected $fillable = ['title', 'content','product','end_date','img'];


   	public static function raffleFunction($time){
   		//not completed
   		return Raffle::where('end_date', '<', $time)->get();
   	}

   	public static function raffleWin($id){
   		//change status to complete,
   		Raffle::where('id', $id)->update(['complete' => 1]);
   		//pick a weener
   		$ween = \App\Models\RaffleEntry::pickWinner($id);


   		
   		//alert admins
   		//return Raffle::where('id', '=', $id)->delete();
   	}

	 public function user()
	 {
		return $this->belongsTo('App\User','user_id');
   	}

   	public function raffleEntries()
    {
        return $this->hasMany('App\Models\RaffleEntry','raffle_id');
    }

}
