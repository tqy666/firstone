<?php

namespace App\Http\Controllers\V1;

use App\Repositories\TestRepository;
use App\Service\JWTServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //
    private $testRepository;
    private $JWTServices;

    public function __construct(TestRepository $testRepository,JWTServices $JWTServices)
    {
        $this->testRepository = $testRepository;
        $this->JWTServices = $JWTServices;
    }


    //登录接口
    public function userlogin(){

        $data = app('request')->only('name','password');

        $user = $this->testRepository->checkuser($data);

        $token = $this->JWTServices->getfromuser($user);

        return $token;
    }

    public function testdata(){

       // return 11;

        $result = $this->testRepository->accessdata();

        return $result;

    }

}
