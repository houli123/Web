<?php
namespace app\myinfo\model;

use think\Model;

class Student extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'student';
    
    // 设置数据库连接
    protected $connection = [
        // 数据库类型
        'type'        => 'mysql',
        // 服务器地址
        'hostname'    => '127.0.0.1',
        // 数据库名
        'database'    => 'testdb',
        // 数据库用户名
        'username'    => 'root',
        // 数据库密码
        'password'    => '123456',
        // 数据库编码默认采用utf8
        'charset'     => 'utf8',
        // 数据库表前缀
        'prefix'      => '',
    ];
} 