<?php


namespace app\index\model;


use think\Model;

class User extends Model{
    // 保存自动完成列表
//    protected $auto = [];//同时指定下面两个，自动写入的字段信息
//    // 新增自动完成列表
//    protected $insert = ['role'=>'guest','status'=>1];
//    // 更新自动完成列表
//    protected $update = [];
    //protected $name='user';
//根据新增用户的身份决定工资
//    protected $insert=['salary'];
//    protected function setSalaryAttr($value,$data){  #用上data两个参数是为了进行判断，区分不同的salary
//        if($data['role']=='admin')
//            return $data['salary']=10000;
//        else
//            return $data['salary']=5000;
//}

//自动时间戳
    // 是否需要自动写入时间戳 如果设置为字符串 则表示时间字段的类型
//    protected $autoWriteTimestamp=true;  //如果下面没设置，则只会生效一次
    // 创建时间字段
//    protected $createTime = 'create_time';  //指定创建时间字段的名字
    // 更新时间字段
//    protected $updateTime = 'update_time';  //指定修改时间字段的名字
//     protected $updateTime = false;//指定关闭修改时间自动写入功能

// 字段类型或者格式转换
    protected $type = [
        'status'=>'integer',
        'salary'=>'float',
        'birthday'=>'datetime:Y年-m月-d日'  //按照日期相应的格式转换
    ];
    //设置只读，左边是固定的，右边是该模型（表）的字段
    protected $readonly=['salary','role'];

    //定义查询范围，函数名：scope+查询范围
    //相当于把查询条件预先定义好，需要的时候直接用::scope静态方法(查询范围名)指定即可
    protected function scopeRole($query){
        $query->where('role','guest');
    }
    //base是一个全局的查询范围，会自动为所有查询添加该条件
    protected static function base($query){
        $query->where('role','guest');
    }

//读取器工作原理：读取对应数据的时候，会查找模型类中是否又该字段对应的读取器方法，有则执行该方法，没有则直接输出原始字段数据
//    protected function getRoleAttr($role){//读取器方法：名字组成由get+驼峰命名法的字段（列）名+Attr
//        return $role=='admin'?'管理员':'游客';
//    }
    protected function getInfoAttr($value,$data){  //无中生有的字段，然后控制器就能使用该字段
        return $data['name'].($data['role']=='admin'?'管理员':'游客');
    }
////修改器工作原理：修改对应数据的时候，会查找模型类中是否有该字段对应的读取器方法，有则执行该方法，没有则直接将原始数据写入数据库中
//    protected function setRoleAttr($value){//修改器方法：名字组成由set+驼峰命名法的字段（列）名+Attr
//        return $value=='管理员'?'admin':'guest';  //这里的value就是role的值
//    }
//    protected function setPwdAttr($value){
//        return strtolower($value);
//    }
}