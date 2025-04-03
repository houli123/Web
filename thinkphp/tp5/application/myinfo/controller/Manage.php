<?php
namespace app\myinfo\controller;

use think\Controller;
use app\myinfo\model\Student;

class Manage extends Controller
{
    public function stuinfo()
    {
        // 获取所有学生信息
        $students = Student::all();
        
        // 将数据传递给模板
        $this->assign('students', $students);
        
        // 渲染模板
        return $this->fetch('info');
    }
} 