<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    //
    protected $table='permission';
    protected $fillable =[

        'id','title','urls','status','updated_time','created_time'
    ];
}
