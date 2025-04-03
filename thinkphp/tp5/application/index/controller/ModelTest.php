<?php

namespace app\index\controller;


use think\Controller;
use app\index\model\User;

class ModelTest extends Controller
{
    public function dbinsert()//插入数据
    {
        $user = new User();
        $user->name="Andy66";
        $user->pwd="123ABC";
//        $user->role="游客";
        $user->role="guest";
        $user->status='1';
        $user->salary='5500.50';
        $user->birthday='2002-12-03';
        if($user->save())  //保存数据
            return "插入成功";
        else
            return "插入失败";
        $data=['name'=>'John','pwd'=>'123','role'=>'guest'];//数组的方式插入数据
//        if($user->save($data))  //保存数据
//            return "插入成功";
//        else
//            return "插入失败";
//        if(User::create($data))  //无需new实例化，直接用静态方法
//            return "插入成功";
//        else
//            return "插入失败";
        //多条数据新增用saveAll
//        $data=[
//            ['name'=>'z','pwd'=>'123','role'=>'guest'],
//            ['name'=>'rose','pwd'=>'123','role'=>'admin'],
//        ];
//        $user = new User();
//        if($user->saveAll($data))  //保存数据
//            return "插入成功";
//        else
//            return "插入失败";
    }
    public function dbread()//查询数据
    {
        $user = new User();
        $result = $user->select(); //查所有数据
//        $result=User::scope('role')->select();
        foreach ($result as $i)
        {
            echo "id:".$i["id"]."<br>";
            echo "name:".$i["name"]."<br>";
            echo "pwd:".$i["pwd"]."<br>";
//            echo "role:".$i["role"]."<br>";
            echo "role:".$i->role."<br>";
//            echo "info：".$i->info."<br/>";
            echo "-----------------<br>";
        }
//        $user=new User();
//        $i=$user->where('id','exp','>2')->find();//第一条的记录
////      $i=User::get(1); //获取一条记录，参数是主键
//        $i=User::getByName('tom');
//        $i=User::get(['name'=>'jerry']);
//        echo "id:".$i["id"]."<br>";
//        echo "name:".$i["name"]."<br>";
//        echo "pwd:".$i["pwd"]."<br>";
//        echo "role:".$i->role."<br>";
//        echo "-----------------<br>";
    }
    public function dbupdate(){
        /////////////用save进行修改
        $i=User::get(5); //获取一条记录，参数是主键
        $i->name='tomtom3';  //对该记录的字段进行修改
        $i->pwd='111';
        $i->role='admin';
        $i->status=0;
        if($i->save())  //保存数据
            return "修改成功";
        else
            return "修改失败";
        ///////将要修改的数据和条件保存在数组类型变量中
//        $user=new User();
//        $data=['name'=>'JerryJerry','pwd'=>'123','role'=>'admin'];
//        $where=['id'=>2];
//        if($user->save($data,$where))  //修改数据
//            return "修改成功";
//        else
//            return "修改失败";

        /////////////用update进行修改
//        $data=['name'=>'MikeMike','pwd'=>'123','role'=>'admin'];
//        $where=['id'=>3];
//        $field=['name'];  //允许修改字段，所以role的修改不生效
//        if(User::update($data,$where,$field))  //修改数据
//            return "修改成功";
//        else
//            return "修改失败";
    }
    public function dbdelete(){
//        $user=User::get(5);
//        if($user->delete())  //保存操作
//            return "删除成功";
//        else
//            return "删除失败";
        ///////////
        User::destroy(['id'=>['>',4]]);
    }
    public function read(){
        $user=User::get(11);
        echo $user->birthday;
    }
}