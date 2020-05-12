<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Foundation\Auth\User as Authenticatable;


use Illuminate\Notifications\Notifiable;
use Zizaco\Entrust\Traits\EntrustPermissionTrait;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use  Notifiable, EntrustUserTrait;

    protected $table = 'user';
    public $timestamps = false;

    protected $fillable=[
            'id','name','email','email_verified_at','password','remember_token','created_at','updated_at'
    ];

    protected $hidden = [

        'password','remember_token'
    ];

    public function userluck(){

        return $this->hasMany('App\Model\Luck','u_id','id');

    }


}
