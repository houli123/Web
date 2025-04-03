<?php
namespace app\index\controller;

use think\Config;
use think\Controller;
use think\Db;
use think\Request;

class Index extends Controller
{
    public function _empty(){
        return 'index控制器的空方法';
    }

//    protected $beforeActionList=[
//        'first',
//        'second'=> ['except'=>'show1,show2'],
//        'third'=> ['only'=>'show2']
//    ];
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    }
//    public function _initialize()
//    {
//        echo "ini<br/>";
//    }

//    public function abc()
//    {
//        return 'abc';
//    }
    public function hello($name="Jerry")
{
        $this->assign('name',$name);
        return $this->fetch();
        //return $this->fetch('',[])
}
//    public function showdata()
//    {
//        $result = Db::name('user')->find();
//        $this->assign('result',$result);//调用
//        return $this->fetch();
//    }

    public function sayhello()
    {
        echo "hello";
    }
//    protected function first()
//    {
//        echo "first";
//    }
//    protected function second()
//    {
//        echo "second";
//    }
//    protected function third()
//    {
//        echo "third";
//    }
//    public function show1()
//    {
//        echo "show1";
//    }
//    public function show2()
//    {
//        echo "show2";
//    }
//    public function show3()
//    {
//        echo "show3";
//    }
    public function readconf()
    {
//        return var_dump(config());  //输出所有配置项
//         return config('default_return_type');
//        return Config::get('app_title');  //静态类方式
        $name=config('app_title');
        $this->assign("result",$name);
        return $this->fetch();
//        return config('app_title');  //助手函数
    }
    public function hi($name='User',$age=18){
        return "hello,".$name.". Your age is ".$age;
    }

    public function demo1($id){
        return "index控制器的demo1方法，参数\$id为：".$id;
    }
    public function demo2($name){
        return "index控制器的demo2方法，参数\$name为：".$name;
    }
    public function demo3($role){
        return "index控制器的demo3方法，参数\$role为：".$role;
    }
}

