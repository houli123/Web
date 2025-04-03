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

    // 处理用户密码更新
    public function do_update(Request $request){
        $this->checkLogin(); // 确保用户已登录

        // 获取所有表单数据
        $data = $request->param();
        $old_password = $data['old_password'];
        $new_password = $data['new_password'];
        $confirm_password = $data['confirm_password'];

        // 获取用户信息
        $user_id = session('user_id');
        $user = Db::name('user')->where('user_id', $user_id)->find();

        // 验证旧密码

        if (!$user || !password_verify($old_password, $user['password'])) {
            dump($user,password_verify($old_password, $user['password']));
//            return $this->error('旧密码不正确');
        }

        // 验证新密码和确认密码是否一致
        if ($new_password !== $confirm_password) {
            return $this->error('新密码和确认密码不一致');
        }

        // 验证新密码的格式（可以根据需要添加更多验证规则）
        $vali = new UserValidator();
        if (!$vali->scene('updatePwd')->check($data)) {
            return $this->error($vali->getError());
        }

        // 更新密码
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        Db::name('user')->where('user_id', $user_id)->update(['password' => $hashed_password]);

        return $this->success('密码修改成功', 'index');
    }
}