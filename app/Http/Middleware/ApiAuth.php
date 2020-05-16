<?php
/**
 * Created by PhpStorm.
 * User: tian
 * Date: 2020/5/16
 * Time: 11:00
 */
namespace App\Http\Middleware;

use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
class ApiAuth{

    public function handle($request,Closure $next){

        //  var_dump(JWTAuth::getToken()) ;die;
        try{
            if (!$user = JWTAuth::parseToken()->authenticate()){ //获取到用户数据，并赋值给$user
                return response()->json([
                    'errcode' => 1004,
                    'errmsg' => 'user not found'

                ], 404);
            }
            //如果想向控制器里传入用户信息，将数据添加到$request里面
            // $request->attributes->add($userInfo);//添加参数
            return $next($request);

        }catch (TokenExpiredException $e){

            return response()->json([
                'errcode' => 1003,
                'errmsg' => 'token 过期' , //token已过期
            ]);

        }catch (TokenInvalidException $e){

            return response()->json([
                'errcode' => 1002,
                'errmsg' => 'token 无效',  //token无效
            ]);
        }catch (JWTException $e){

            return response()->json([
                'errcode' => 1001,
                'errmsg' => '缺少token' , //token为空
            ]);
        }

    }



}