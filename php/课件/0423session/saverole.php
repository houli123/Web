<?php
    // SaveRole.php：
    // 将用户选择的用户类型保存在session变量中
    // 信息提示后根据用户类型跳转到不同的网页。
    header('content-type:text/html:charset-utf-8');
    session_start();
    $role=$_POST['role'];
    $_SESSION['role']=$role;
    if(isset($role)){
        if($role=='admin'){
            echo "<script>";
            echo "alert('即将进入管理员页面');";
            echo "location.href='admin.php'";
            echo "</script>";
        }else{
            echo "<script>";
            echo "alert('即将进入用户界面');";
            echo "location.href='user.php'";
            echo "</script>";
        }
    }else{
        echo '<script>';
        echo "alert('请选择用户身份');";
        echo "location.href='login.php'";
        echo '</script>';
    }