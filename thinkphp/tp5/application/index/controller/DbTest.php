<?php

namespace app\index\controller;

use think\Controller;
use think\Db;

class DbTest extends Controller
{
    //查询表
    public function dbread(){
        // 在database里指定了'prefix'
        //只用name方法能用prefix的省略功能
//        $result=Db::name('user')->select();
        $result=Db::name('user')
            ->fetchSql(true)  //不执行结果，而是对应的select语句
//            ->field('id,name as username')//指定字段
//            ->field(['id','name'=>'username'])  //同上，以数组的方式
//            ->field('id',true)//第二个参数表示除了第一个参数列，其他都要
//            ->where('id','exp','>10') //用了exp表示参数1和参数3连一起
//            ->where('id','exp','<10 and role="admin"') //用了exp表示参数1和参数3连一起
            //上面1句等于下面两句
//            ->where('id','>',10)
//            ->where('role','admin')//多个where表示and
//            ->whereOr('role','admin')//or连接上面的
            ->where(  //whereOr
                [
                    'id'=>['>',10],
                    'role'=>['=','admin']
                ]//用数组方式表示多个条件
            )
            ->select();  //查找所有记录（一维数组）：SELECT * FROM `think_user`
        //    ->find();  //自己查找第一条记录（数组）：SELECT * FROM `think_user` LIMIT 1
//            ->value('id'); //获取表中某一字段的第一条数据（类型和原本数据一致）：SELECT `name` FROM `think_user` LIMIT 1
//            ->count();  //聚合函数：SELECT COUNT(*) AS tp_count FROM `think_user` LIMIT 1
        return $result;
//        dump($result);
    }
    //插入数据
    public function dbcreate(){
        //用table不能省略前缀，需要输入全名
        $str=Db::table('think_user')
            ->fetchSql(true)
            ->insert(['name'=>'rose','pwd'=>'123','role'=>'admin']);
        return $str;
    }
    //修改数据
    public function dbupdate(){
        //用table不能省略前缀，需要输入全名
        $str=Db::table('think_user')
            ->fetchSql(true)
            ->where('id','1')
            ->update(['name'=>'David1']);
        return $str;
    }
    //删除数据
    public function dbdelete(){
        //用table不能省略前缀，需要输入全名
        $str=Db::table('think_user')
            ->fetchSql(true)
            ->where('id','1')
            ->delete();
        return $str;
    }
}