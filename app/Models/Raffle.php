<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raffle extends Model
{
     protected $fillable = ['title', 'content','product','end_date'];

     public function user(){
   	return $this->belongsTo('App\User','user_id');
   }

   	public static function raffleFunction($id){
   		DB::table('raffles')->where('id', '=', $id)->delete();
   	}
}
