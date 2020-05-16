<?php
/**
 * Created by PhpStorm.
 * User: tian
 * Date: 2020/5/16
 * Time: 10:45
 */
namespace App\Service;

use Tymon\JWTAuth\Facades\JWTAuth;

class JWTServices{

    public function getfromuser($user){

        $token =JWTAuth::fromUser($user);
        return $token;

    }


}