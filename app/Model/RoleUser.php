<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    //
    protected $table = 'user_roles';

    protected $fillable = [
        'id','user_id','role_id','created_time'

    ];
}
