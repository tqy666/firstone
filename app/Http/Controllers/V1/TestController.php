<?php

namespace App\Http\Controllers\V1;

use App\Repositories\TestRepository;
use App\Service\JWTServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

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

    //excel导出
    public function exportdata (){

        $result = $this->testRepository->expostexcel();

        return $result;

    }

    //redis
    public function redisdata(){

        Redis::set('name', 'guwenjie');
        echo Redis::get('name');
       // return Redis::del('name'); //删除成功会返回1
     //   Redis::append('str','-123');
      //  return Redis::get('str');
//        Redis::hset('hash1','key1',123);
//        Redis::hset('hash1','key2',555);
//        Redis::hmset('hash1',array('key3'=>'v3','key4'=>'v4'));
       //return  Redis::hgetall('hash1');
      //  $data = [1,2,3,4,5,6,'wa','oo','op','bar1','bar0'];
       // Redis::rpush('list1',$data);
      //  Redis::rpush('list1','key');
       /// Redis::rpush('list1','key1');
      // return Redis::lrange('list1',0,-1);
      //  Redis::rpush('list1',array(1,2,3,4,5,6,'wa','oo','op','bar1','bar0'));
//        Redis::zadd('zset1',1,'ab');
//        Redis::zadd('zset1',10,'ef');
//       return  Redis::zrange('zset1',0,-1);
    }

}
