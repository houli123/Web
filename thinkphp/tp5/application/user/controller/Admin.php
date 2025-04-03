<?php
namespace app\user\controller;

use think\Controller;

class Admin extends Controller
{
    public function dosth($age = 0)
    {
        return 'Age is: ' . $age;
    }

    
    public function getsth($number = 0)
    {
        // 判断数字并设置对应的消息
        if ($number > 0) {
            $message = "参数大于0";
        } elseif ($number < 0) {
            $message = "参数小于0";
        } else {
            $message = "参数等于0";
        }
        
        // 将消息传递给模板
        $this->assign('message', $message);
        
        // 渲染模板
        return $this->fetch('showsth');
    }
}
