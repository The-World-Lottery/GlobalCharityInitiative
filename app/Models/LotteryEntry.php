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
}
