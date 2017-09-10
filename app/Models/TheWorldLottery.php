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

   	public function theWorldLEntries()
    {
        return $this->hasMany('App\Models\TheWorldLotteryEntry','the_world_lottery_id');
    }
}
