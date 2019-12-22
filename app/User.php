<?php

namespace App;
//use App\NOtifications\VerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password','token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function verified(){

        return $this->token ===null;
    }
    public function sendVerificationEmail(){

        $user->notify(new VerifyEmail($this));
    }


    public function orders(){
        
    return $this->hasMany('App\Order');

    }
}
