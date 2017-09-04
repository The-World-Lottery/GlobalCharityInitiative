<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
   //relation to user
   public function user(){
   	return $this->belongsTo('App\User','user_id');
   }

   //relation to post
   public function post(){
   	return $this->belongsTo('App\Models\Suggestion','suggestion_id');
   }
}
