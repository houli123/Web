<?php


namespace app\index\validate;


use think\Validate;

class UserValidator extends Validate
{
    // 当前验证的规则
    protected $rule = [
        'username'=>'require|length:4,20|alphaNum',
        'password_confirm'=>'require',
        'password'=>'require|confirm:password_confirm',
    ];

    // 验证提示信息
    protected $message = [
        'username.require' => '必须输入用户名',
        'username.length' => '用户名长度必须在4-20个字符之间',
        'username.alphaNum' => '用户名只能是字母和数字的组合',
        'password.require' => '必须输入密码',
        'password_confirm.require' => '必须输入密码',
        'password.confirm' => '两次输入的密码不一致',
    ];

    // 验证场景 scene = ['edit'=>'name1,name2,...']
    //定义了一个场景名叫edit的运用某某规则，之后需要制定运用哪个场景名
    protected $scene = ['edit'=>['name','email'],'reg'=>['username','password','password_confirm']];
}