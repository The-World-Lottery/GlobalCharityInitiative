<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TheWorldLotteryEntry extends Model
{
    protected $fillable = ['user_id', 'the_world_lottery_id', 'first_num', 'second_num', 'third_num', 'fourth_num', 'fifth_num', 'key_num'];

    public function user()
    {
   		return $this->belongsTo('App\User','user_id');
   	}

   	public function theworldlottery()
   	{
   		return $this->belongsTo('App\Models\Lottery','the_world_lottery_id');
    }
}
