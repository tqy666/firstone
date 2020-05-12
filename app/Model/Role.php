<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    //
    protected $table = 'roles';

    protected $fillable = [
        'id','name','status','updated_time','created_time'

    ];


}
