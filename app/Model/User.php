<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    public $timestamps = false;

    protected $fillable=[
            'id','name','email','email_verified_at','password','remember_token','created_at','updated_at'
    ];

    public function userluck(){

        return $this->hasMany('App\Model\Luck','u_id','id');

    }


}