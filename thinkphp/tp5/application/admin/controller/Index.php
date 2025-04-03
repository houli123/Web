<?php
namespace app\admin\controller;
use app\common\controller\Index as commonindex;
class Index
{
//    public function say()
//    {
//        return "admin say";
//    }
//    public function commonsay()
//    {
//        $c = new commonindex();
//        return $c->commonsay();
//    }
    public function index()
    {
        return config('app_title');
    }
    public function dyconf()
    {
        config('dy','动态配置');
        return config('dy');
    }
    public function readconf()
    {
        return config('app_title');
    }
}