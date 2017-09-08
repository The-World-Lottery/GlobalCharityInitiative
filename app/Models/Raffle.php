<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raffle extends Model
{
     protected $fillable = ['title', 'content','product','end_date','img'];

     public function user(){
   	return $this->belongsTo('App\User','user_id');
   }
}
