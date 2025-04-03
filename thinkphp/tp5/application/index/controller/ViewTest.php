<?php


namespace app\index\controller;

use think\Controller;
use think\Db;

class ViewTest extends Controller
{
    public function test1(){
        $name='b';
        $this->assign('age',19);
//        $name=strtoupper($name);  //html渲染或者在控制器处理
        // $this->assign('name',$name);
        //return $this->fetch();
        //等价于上面两句
        return $this->fetch('',['name'=>$name]);
    }

    public function test2(){
//        $datas=Db::name('user')->select();
        $datas=Db::name('user')->where('id','>',10)->select();
        $this->assign('datas',$datas);
        return $this->fetch();
    }

    public function test3($sg=150){
        $this->assign('sg',$sg);
        return $this->fetch();
    }
}