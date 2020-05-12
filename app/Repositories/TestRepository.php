<?php
/**
 * Created by PhpStorm.
 * User: tian
 * Date: 2020/5/12
 * Time: 13:32
 */
namespace App\Repositories;

use App\Model\Luck;
use App\Model\Users;

class TestRepository{

    private $Users;
    private $Luck;

    public function __construct(Users $users,Luck $luck)
    {
         $this->Users=$users;
         $this->Luck=$luck;

    }

    public function accessdata(){

        $result = $this->Users->with('userluck')->get();

        return $result;
    }


}