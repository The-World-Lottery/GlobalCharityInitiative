<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    public static $rules = [
    	'title'=>'required|max:100',
    	'content'=>'required|max:500'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function votes()
    {
        return $this->hasMany('App\Models\Vote','vote_id');
    }

    public static function search($q)
    {
        $suggestion = Suggestion::where('title','like','%'. $q .'%')
                    ->orWhere('content','like','%'. $q .'%')
                    // ->orWhere('url','like','%'. $q .'%')
                    // ->orWhereHas('user',function($query) use ($q){$query->where('name','like',"%$q%");})
                    ->paginate(6);
        return $suggestions;
    }
}
