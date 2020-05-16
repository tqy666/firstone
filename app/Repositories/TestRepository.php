<?php
/**
 * Created by PhpStorm.
 * User: tian
 * Date: 2020/5/12
 * Time: 13:32
 */
namespace App\Repositories;

use App\Model\Luck;
use App\Model\User;

class TestRepository{

    private $User;
    private $Luck;

    public function __construct(User $user,Luck $luck)
    {
         $this->User=$user;
         $this->Luck=$luck;

    }

    public function accessdata(){

        $result = $this->User->with('userluck')->get();

        return $result;
    }


    public function checkuser($data){

        $user = $this->User->where('name',$data['name'])->first();

        return $user;

    }


}