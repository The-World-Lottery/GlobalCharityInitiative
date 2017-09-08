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
}
