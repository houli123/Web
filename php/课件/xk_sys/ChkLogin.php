<?php
$username=$_POST['username'];
$userpwd=$_POST['userpwd'];
$role=$_POST['role'];
if($username==""||$userpwd=""){
    echo "<script>alert('用户名密码不能为空');location.href='index.php';</script>";
}else{
    include "db_conn.php";
    if($role=="teacher"){
        $sql="select * from teacher where TeaNo='$username'";
    }else{
        $sql="select * from student where stuno='$username'";
    }
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    if($row['Pwd']==$userpwd){
        $_SESSION['username']=$username;
        $_SESSION['userpwd']=$userpwd;
        if($role=='teacher'){
            $_SESSION['role']=$role;
            $_SESSION['DepartNo']=$row['DepartNo'];
            echo "<script>alert('即将进入教学秘书页面');location.href='teacher.php';</script>";
        }else{
            $_SESSION['role']=$role;
            $_SESSION['ClassNo']=$row['ClassNo'];
            echo "<script>alert('即将进入学生页面');location.href='student.php';</script>";
        }
    }else{
        echo "<script>alert('信息填写错误，请重新登录');location.href='index.php';</script>";
    }
}