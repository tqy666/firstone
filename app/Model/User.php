<?php

namespace App\Model;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $table = 'user';
    public $timestamps = false;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $fillable=[
            'id','name','email','email_verified_at','password','remember_token','created_at','updated_at'
    ];

//    protected $hidden = [
//
//        'password','remember_token'
//    ];

    public function userluck(){

        return $this->hasMany('App\Model\Luck','u_id','id');

    }


}
