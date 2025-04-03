<!--Session_2.php:-->
<!--若用户名和密码输入信息不为空，则将用户输入的用户名与密码保存在session变量中，信息提示后跳转到Session_3.php；若为空，则提示后直接跳转到Session_1.php-->


<?php
    session_start();
    $user=$_POST['user'];
    $pwd=$_POST['password'];
    if($user=='' || $pwd==''){
        echo "<script>";
        echo "alert('用户名和密码不能为空');";
        echo "location.href='session1.php'";
        echo "</script>";
    }
    else{
        $_SESSION['user']=$user;
        $_SESSION['password']=$pwd;
        echo "<script>";
        echo "alert('用户名和密码已保存');";
        echo "location.href='session3.php'";
        echo "</script>";
    }