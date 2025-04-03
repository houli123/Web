<?php
    // admin.php与user.php
    // 将session中保存的用户类型显示在网页上
    // 提供“注销”超链接跳转lgout.php。
    header('content-type:type/html:charset-utf-8');
    session_start();
    if(!isset($_SESSION['role'])){
        header("location:login.php");
    }else{
        $role=$_SESSION['role'];
        if($role=='admin'){
            echo "欢迎您，管理员";
            echo "<a href='logout.php'>注销</a>";
        }else{
            header('location:user.php');
        }
}