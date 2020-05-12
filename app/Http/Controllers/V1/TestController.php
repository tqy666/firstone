<?php

namespace App\Http\Controllers\V1;

use App\Repositories\TestRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //
    private $testRepository;

    public function __construct(TestRepository $testRepository)
    {
        $this->testRepository = $testRepository;
    }


    public function testdata(){

       // return 11;

        $result = $this->testRepository->accessdata();

        return $result;

    }

}
