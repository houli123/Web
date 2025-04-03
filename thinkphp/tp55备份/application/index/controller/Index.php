<?php
//首页帖子管理控制器
// 用户注册、登录、修改密码、退出登录
// 发表留言
// 删除本人留言
// 查看本人留言
// 以列表的形式查看所有留言，需要分页显示，并对分页效果进行美化
// 使用验证对留言数据进行格式验证
// 使用自动时间功能记录用户注册时间和发表留言时间
// 其他你想到的扩展功能

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Paginator;
use think\Request;
use app\index\model\Message;

class Index extends Controller
{
    //查看用户是否登录方法
    public function checkLogin(){
        if(!session('?username')){
            $this->error('请登录后操作','User/login');
        }
    }

    // 首页留言列表
    public function index()
    {
        // 获取排序方式,默认为降序(desc)
        $order = input('order', 'desc');
        
        // 查询留言列表
        $message_list = Db::name('message')
            ->alias('m')
            ->join('user u', 'u.user_id = m.user_id')
            ->field('m.*, u.username')
            ->order('m.create_time ' . $order)
            ->paginate(5);
        
        // 向视图传递数据
        $this->assign([
            'message_list' => $message_list,
            'current_order' => $order  // 传递当前排序方式到视图
        ]);
        return view();
    }

    // 发布留言页面
    public function post(){
        $this->checkLogin();
        return $this->fetch();
    }

    // 处理发布留言的方法
    public function do_post(Request $request){
        $this->checkLogin();
        // 获取留言内容和用户ID
        $content=$request->param('content');
        $user_id=session('user_id');
        // 创建Message模型实例
        $message=new Message();
        $message->content=$content;
        if(empty($message))
            $this->error('留言内容不能为空','post');
        else{
            $message->user_id=$user_id;
            // 保存留言到数据库
            if($message->save())
                $this->success('发布留言成功','index');
            else
                $this->error('发布留言失败','post');
        }
    }

    // 删除留言
    public function delete(Request $request){
        $message_id=$request->param('id');
        $message=Message::get($message_id);
        if($message->delete())
            $this->success('删除成功','index');
        else
            $this->error('删除失败','index');
    }

    // 显示用户个人留言列表
    public function show(){
        $this->checkLogin();
        $user_id = session('user_id');
        $order = input('order', 'desc');
        
        // 使用视图查询连接user和message表
        $list = Db::view('user','username,user_id')
            ->view('message','message_id,content,create_time','user.user_id=message.user_id')
            ->where('user.user_id',$user_id)
            ->order('message.create_time', $order)
            ->paginate(5);
            
        $this->assign([
            'list' => $list,
            'current_order' => $order
        ]);
        return $this->fetch();
    }
}
