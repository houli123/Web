<?php
    // admin.ph与userhp
    // 将session中保存的用户类型显示在网页上
    // 提供“注销”超链接跳转lgout.php。

    header('content-type:type/html:charset-utf-8');
    session_start();
    if(!isset($_SESSION['role'])){
        header("location:login.php");
    }else{
        $role=$_SESSION['role'];
        if($role=='user'){
            echo "欢迎您，普通用户";
            echo "<a href='logout.php'>注销</a>";
        }else{
            header('location:admin.php');
        }
    }