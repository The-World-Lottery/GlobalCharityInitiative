<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\Models\RaffleEntry;
use App\Models\TheWorldLotteryEntry;
use App\Models\LotteryEntry;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password','username','image','phone_number'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function suggestions()
    {
        return $this->hasMany('App\Models\Suggestion','user_id');
    }

    public function votes()
    {
        return $this->hasMany('App\Models\Vote','vote_id');
    }

    public function lotteries()
    {
        return $this->hasMany('App\Models\Lottery','user_id');
    }

    public function raffles()
    {
        return $this->hasMany('App\Models\Raffle','user_id');
    }

    public function lotteryEntries()
    {
        return $this->hasMany('App\Models\LotteryEntry','user_id');
    }

    public function raffleEntries()
    {
        return $this->hasMany('App\Models\RaffleEntry','user_id');
    }


     public function worldLotteryEntries()
    {
        return $this->hasMany('App\Models\TheWorldLotteryEntry','user_id');
    }

     public function userWallet()
    {
        return $this->hasOne('App\Models\UserWallet','user_id');
    }

    public function userComments()
    {
        return $this->hasMany('App\Models\UserComment','user_id');
    }

}