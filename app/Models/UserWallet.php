<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    protected $fillable = ['user_id', 'usd','eur','jpy','gbp','chf','btc','ltc','eth','doge','bch','xrp'];

    public function user()
	{
		return $this->belongsTo('App\User','user_id');
   	}

  
}
