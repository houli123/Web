<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

//将route（模块控制器方法），改为rule，之后通过hi访问
//参数用：开头，如果是可选参数，用【】括起来
//请求方式可以用get或post，并且要求后缀以.html结尾，否则访问不到
//形如：http://localhost:8080/tp5/public/hi/2/6.html。在最后一个参数后加.html
Route::rule('hi/[:name]/[:age]$',  //新名字
    'index/index/hi',  //老名字
    'GET|POST',
    ['ext'=>'html'],  //指定扩展名，禁止后缀：'deny_ext'=>'php'
//允许为空后缀：'ext'=>''
    ['age'=>'\d{1,2}']);  //限制age形参的正则范围

//既可以用上面的Route类的rule方法定义路由规则
//也可以用返回数组的方式返回路由规则
//return[
//    'hi/[:name]/[:age]$'=>'index/index/hi',
//    ['method'=>'GET|POST',
//        'ext'=>'html']
//];

//Route::rule('demo/:id','index/index/demo1','GET',[],['id'=>'\d{2,3}']);
//Route::rule('demo/:name','index/index/demo2','GET',[],['name'=>'[a-z]+']);
//Route::rule('demo/:role','index/index/demo3','GET',[],['role'=>'[01]']);
//路由分组，将调用方式都采用demo/xx，根据xx来调用不同的方法
Route::group('demo',[
    ':id'=>['index/index/demo1',['method'=>'get'],['id'=>'\d{2,3}']],
    ':name'=>['index/index/demo2',['method'=>'get'],['name'=>'[a-z]+']],
    ':role'=>['index/index/demo3',['method'=>'get'],['role'=>'[01]']],
]);



// 定义简化路由 test/:age 映射到 user/admin/dosth
Route::get('test/:age', 'user/admin/dosth', [], ['age' => '\d+']);

// 或者使用另一种写法
// Route::rule('test/:age', 'user/admin/dosth', 'GET', [], ['age' => '\d+']);