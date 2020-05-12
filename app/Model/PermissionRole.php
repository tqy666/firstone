<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    //
    protected $table = 'role_permissions';

    protected $fillable=[

        'id','role_id','permission_id','created_time'

    ];
}
