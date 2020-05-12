<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//
//
//Route::get('/test', function () {
//    echo 111;
//});
$api = app('Dingo\Api\Routing\Router');

$api->version('v1',function ($api){

    $api->group(['namespace'=>'App\Http\Controllers\V1'],function ($api){

        //测试接口
       $api->get('testdata','TestController@testdata');

    });


});


