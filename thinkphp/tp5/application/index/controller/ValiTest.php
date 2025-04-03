<?php


namespace app\index\controller;

use app\index\model\User;
use app\index\validate\UserValidator;
use think\Controller;
use think\Validate;

class ValiTest extends Controller
{
    public function test1(){
        //构造了一个验证器类的实例，参数是具体的验证规则，用于验证
//        $vali=new Validate(
//            [
//                'name'=>'require|max:10',  //要求name必须需要，而且最长10个字符
//                'email'=>'email'  //类型验证，也可以float等，这里要求是邮箱，例如要有@
//            ]
//        );
        //把验证规则单独定义为一个数据类型的变量
        $rule=[
            'name'=>'require|max:10',  //要求name必须需要，而且最长10个字符
            'email'=>'email'  //类型验证，也可以float等，这里要求是邮箱，例如要有@
        ];
        //测试数据
        $data=[
            'name'=>'',
            'email'=>'tp#szpu.edu.cn'
        ];
        $msg=[  //指定报错信息，而不用系统默认的
            'name.require'=>'必须输入用户名',
            'name.max'=>'用户名不能超过10个字符',
            'email'=>'邮箱格式错误'
        ];
        //验证器类的check方法执行验证，参数是测试数据
//        $vali=new Validate($rule);//将存储验证规则的数组作为参数
        $vali=new Validate($rule,$msg);  //传入规则顺便还有自定义信息，而不用系统的
        if(!$vali->batch()->check($data))//加了batch是可以输出全部错误，所以不能return
        //如if(!$vali->check($data))  //没有batch的话只有第一个错误
//            return $vali->getError();
            //该方法返回报错的信息
            dump($vali->getError());
        else
            return '数据正确';
    }

    public function test2(){
        //测试数据
        $data=[
            'name'=>'',
            'email'=>'tp#szpu.edu.cn'
        ];
        $vali=new UserValidator();  //实例化自己定义的验证器，上面的是系统内置的验证器，这个是我自己定义的
        if(!$vali->batch()->check($data))
            dump($vali->getError());
        else
            return '数据正确';
    }

    public function test3(){//调用validate的模型类方法实现插入数据库前进行验证
        $user = new User();
        $data=['name'=>'John','pwd'=>'123456','role'=>'guest'];//数组的方式插入数据
        if($user->validate([  //用validate的模型类方法，参数是验证规则
            'name'=>'require|max:10',  //要求name必须需要，而且最长10个字符
            'pwd'=>'require|length:6'  //指定长度必须6
        ])->save($data))  //若验证合格就保存数据
            return "插入成功";
        else
            return $user->getError();
    }

    public function test4(){//调用validate的模型类方法实现插入数据库前进行验证
        $user = new User();
        $data=['name'=>'John','pwd'=>'123','role'=>'guest'];//数组的方式插入数据
        if($user->validate('UserValidator')->save($data))  //若验证合格就保存数据
            return "插入成功";
        else
            return $user->getError();
    }

    public function test5(){  //调用自身控制器的validate方法对数据进行验证
        $rule = [
            'name' => 'require|max:10',  //要求name必须需要，而且最长10个字符
            'email' => 'email'  //类型验证，也可以float等，这里要求是邮箱，例如要有@
        ];
        $data = [
            'name' => 'abc',
            'email' => 'tp@szpu.edu.cn'
        ];
        $msg = [  //指定报错信息，而不用系统默认的
            'name.require' => '必须输入用户名',
            'name.max' => '用户名不能超过10个字符',
            'email' => '邮箱格式错误'
        ];
        $result = $this->validate($data, $rule, $msg); //这里this的validate方法第一个参数是数据，和上述的validate的参数有点差异
//        echo $result;  //$result的值：
        //1.正确：true；2.错误：错误的提示信息字符串，如msg
        if ($result===true)
            return "数据正确";
        else
            return $result;
    }

    public function test6(){
        $data = [
            'name' => 'abc',
            'email' => 'tp@szpu.edu.cn'
        ];
        //交给验证器的方法处理，不用现炒现卖反复定义
        $result = $this->validate($data,'UserValidator');
        if ($result===true)
            return "数据正确";
        else
            return $result;
    }

    public function test7(){//验证场景
        $rule = [
            'name' => 'require|max:10',  //要求name必须需要，而且最长10个字符
            'email' => 'email',  //类型验证，也可以float等，这里要求是邮箱，例如要有@
            'age'=>'number|between:0,150'
        ];
        $data = [
            'name' => 'abc',
            'email' => 'tp#szpu.edu.cn',
            'age'=>-18
        ];
        $vali=new Validate($rule);
        $vali->scene('edit',['name','age']); //1是场景名，2是针对的字段，这里表示不管email的规则
        //上面建立了场景规则，则发起动作前可以指定哪个场景
        if(!$vali->scene('edit')->check($data))
            dump($vali->getError());
        else
            return '数据正确';
    }

    public function test8(){//验证场景
        $data = [
            'name' => 'abc',
            'email' => 'tp#szpu.edu.cn',
            'age'=>-18
        ];
        $vali=new UserValidator(); //使用自定义的验证器类实例
        //同时指定要用的场景名
        if(!$vali->scene('edit')->check($data))
            dump($vali->getError());
        else
            return '数据正确';
    }
}