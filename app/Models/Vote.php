<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
   //relation to user
   public function user(){
   	return $this->belongsTo('App\User','user_id');
   }

   //relation to suggestion
   public function suggestion(){
   	return $this->belongsTo('App\Models\Suggestion','suggestion_id');
   }
}
