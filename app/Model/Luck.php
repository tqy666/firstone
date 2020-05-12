<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Luck extends Model
{
    //

    protected $table = 'luck';
    public $timestamps = false;
    protected $fillable=[
        'id', 'u_id','name'

    ];
}
