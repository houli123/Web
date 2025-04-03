<?php

namespace app\index\controller;

use app\index\validate\UserValidator;
use think\Controller;
use think\Request;
use think\Db;

class User extends Controller
{
    public function user(){
        return $this->fetch();
    }
    public function login(){
        return $this->fetch();  //return表示进入view试图里面的对应user文件夹下的login.html
    }
    public function do_login(Request $request){
        $username=$request->param('username','','strtolower');
        $pwd=$request->param('pwd');
//        $result=Db::query("select * from think_user where name=? and pwd=?",[$username,$pwd]);
        $result = Db::table("think_user")
            ->where ("name",$username)
            ->where ("pwd",$pwd)
            ->select();
//        if($username=='tom' && $pwd=='123'){  //原本写死的
        if($result){
            session('username',$username);
            $this->success('登录成功','index');
        }
        else
            $this->error('登录失败','login');
    }
    public function index(){
        //传统方法
//        $this->assign('username',session('username'));
        //将session里面的username分配出去给username，使index.html可以访问到username
        if(session('?username'))
            return $this->fetch();  //表示进入view视图中的index.html
        else
            $this->error('尚未登录','login');
    }
    public function logout(){
        session(null);
        //跳转
        return $this->redirect('login');
    }
    public function chgpwd(){
        return $this->fetch();
    }
    public function do_chgpwd(Request $request){
        $username=$request->param('username');
        $oldpwd=$request->param('oldpwd');
        $newpwd1=$request->param('newpwd1');
        $newpwd2=$request->param('newpwd2');
        if($newpwd1!=$newpwd2)
            $this->error('两次密码不一致','chgpwd');
        if($oldpwd==$newpwd1)
            $this->error('新旧密码一样','chgpwd');
//        $result=Db::query("select * from think_user where name=? and pwd=?",[$username,$oldpwd]);
        $result = Db::table("think_user")
            ->where("name",$username)
            ->where("pwd",$oldpwd)
            ->select();
        if(!$result)
            $this->error('旧密码错误','chgpwd');
//        $result=Db::execute('update think_user set pwd=? where name=?',[$newpwd1,$username]);
        $result = Db::table("think_user")
            ->where("name",$username)
            ->update(["pwd"=>$newpwd1]);
        if($result)
            $this->success('修改密码成功','logout');
        else
            $this->error('修改密码失败','chgpwd');
    }
    public function reg(){
        return $this->fetch();
    }


    public function do_reg(Request $request){
        $username=$request->param('username');
        $newpwd1=$request->param('newpwd1');
        $newpwd2=$request->param('newpwd2');
        // if($newpwd1!=$newpwd2)
        //     $this->error('两次密码不一致','reg');
//        $result=Db::execute('insert into think_user(name,pwd,role) values (?,?,?)',[$username,$newpwd1,'guest']);
        // $result =  Db::table("think_user")
        //     ->insert(["name"=>$username,"pwd"=>$newpwd1,"role"=>"guest"]);


    // 修改用户注册功能，对用户输入的数据用验证器进行如下验证：
        // 用户名不能为空；
        // 用户名不能和数据库中已有的用户名一样；
        // 两次输入的密码都不能为空；
        // 两次输入的密码必须一样。
        $existingUser = Db::table("think_user")
            ->where("name", $username)
            ->find()['name'];
        $data = [
            'username' => $username,
            'password' => $newpwd1,
            'password2' => $newpwd2,
            'data' => $existingUser,
        ];
        
        $vali=new UserValidator();
        if(!$vali->scene('reg')->check($data))
            dump($vali->getError());
        else{
            $result = Db::name("user")
                ->insert([
                    "name" => $username, 
                    "pwd" => $newpwd1, 
                    "role" => "guest",
                ]);
            if($result)
                $this->success('注册用户成功','login');
            else
                $this->error('注册用户失败','reg');
        }
    }
}