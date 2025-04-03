<?php
namespace app\index\controller;

use think\Controller;
use think\Request;

class TestReq extends Controller{
    public function index(Request $request){
//        $request=Request::instance();
//        echo $request->param('name','Mary','strtoupper');
        //1.只能获取?参数名=参数值方式传来的参数
//        if($request->has('name','get'))
        #2.可以实现参数名/参数值的方式
        if(input("?param.name"))
            //1的返回操作
//            return "name=".$request->get('name');
            //2的返回操作
            return "name=".$request->param('name');
        else
            return "没有设置name";
    }
    public function jump($name="tom"){
        if($name==="tom")
            return $this->success('正确用户','right');
        else
            return $this->error('用户错误','wrong');
    }
    public function right(){
        return "right";
    }
    public function wrong(){
        return "wrong";
    }
    //redirect重定向的方式
    public function jump2($name="tom"){
        if($name==="tom")
            $this->redirect('right');
        else
            $this->error('错误','wrong');
    }
}