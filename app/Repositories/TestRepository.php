<?php
/**
 * Created by PhpStorm.
 * User: tian
 * Date: 2020/5/12
 * Time: 13:32
 */
namespace App\Repositories;

use App\Exports\UsersExport;
use App\Model\Luck;
use App\Model\User;
use Illuminate\Support\Facades\Cache;
use Maatwebsite\Excel\Facades\Excel;


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


    public function expostexcel(){

        $alldata = $this->User->get();
        $data[0] =['姓名','email','id'];
        foreach ($alldata as $key=>$val){
            $key ++;
            $data[$key]['name']=$val->name;
            $data[$key]['email']=$val->email;
            $data[$key]['id'] =$val->id;

        }
         return $data;


    }

}