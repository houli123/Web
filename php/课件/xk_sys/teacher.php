<?php
session_start();
if(!isset($_SESSION['role'])){
    echo "<script>alert('请登录');location.href='index.php';</script>";
}else{
    if($_SESSION['role']=="teacher"){
        $username=$_SESSION['username'];
        echo "欢迎$username"."用户";
        echo "<a href='index.php'>返回</a>";
        echo "<a href='logout.php'>注销</a>";
    }else{
        echo "<script>alert('即将进入学生页面');location.href='student.php';</script>";
    }
}