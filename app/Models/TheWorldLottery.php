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
