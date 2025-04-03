<?php


namespace app\index\validate;


use think\Validate;

class UserValidator extends Validate
{
    // 当前验证的规则
    protected $rule = [
        'name'=>'require|max:10',  //要求name必须需要，而且最长10个字符
        'email'=>'email',  //类型验证，也可以float等，这里要求是邮箱，例如要有@
        'pwd'=>'require|length:6',
        'age'=>'number|between:0,150',
        //作业
        'username'=>'require|different:data',
        'password2'=>'require',
        'password'=>'require|confirm:password2',
    ];

    // 验证提示信息
    protected $message = [
        'name.require'=>'必须输入用户名',
        'name.max'=>'用户名不能超过10个字符',
        'email'=>'邮箱格式错误',
        'pwd.require'=>'必须输入密码',
        'pwd.length'=>'密码长度必须为6',
        //作业
        'username.require' => '必须输入用户名',
        'username.different' => '用户名已存在',
        'password.require' => '必须输入密码',
        'password2.require' => '必须输入密码',
        'password.confirm' => '两次输入的密码不一致',
    ];

    // 验证场景 scene = ['edit'=>'name1,name2,...']
    //定义了一个场景名叫edit的运用某某规则，之后需要制定运用哪个场景名
    protected $scene = ['edit'=>['name','email'],'reg'=>['username','password','password2','data']];
}