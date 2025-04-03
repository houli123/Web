<?php
//用户登录注册控制器
namespace app\index\controller;
use app\index\validate\UserValidator;
use think\Controller;
use think\Db;
use think\Request;
use app\index\model\User as UserModel;

class User extends Controller
{
    public function login(){
        return $this->fetch();
    }

    //Request $request 请求对象
    public function do_login(Request $request){
        $username=$request->param('username');
        $password=$request->param('password');
        // 查询数据库验证用户名和密码
        $result=db('user')
            ->where('username',$username)
            ->where('password',$password)
            ->select();
        if($result){
            // 登录成功,设置session
            session('username',$username);
            session('user_id',$result[0]['user_id']);
            $this->success('登录成功','index/index');
        }
        else{
            $this->error('登录失败','login');
        }
    }

    /**
     * 用户登出
     * 清除session并重定向到首页
     */
    public function logout(){
        session(null);
        $this->redirect('index/index');
    }

    public function reg(){
        return $this->fetch();
    }

    //处理用户注册
    public function do_reg(Request $request){
        $username=$request->param('username');
        $password=$request->param('password');
        $password_confirm=$request->param('password_confirm');

        // 获取所有表单数据
        $data=$request->param();

        // 检查用户名是否已存在
        $result = db("user")
            ->where("username", $username)
            ->select();
        if($result)
            $this->error('用户名已被注册','reg');

        //验证表单数据
        $vali=new UserValidator();
        if(!$vali->scene('reg')->check($data))
            dump($vali->getError());
        else{
            // 原始的数据库插入方式
            // $result = Db::name("user")
            //     ->insert([
            //         "username" => $username,
            //         "password" => $newpwd1,
            //     ]);
            
            //使用模型User完成用户注册,自动添加创建和更新时间
            $user=new UserModel();
            if($user->allowField(true)->save($data))
                $this->success('用户注册成功','login');
            else
                $this->error('用户注册失败','reg');
        }
    }
}