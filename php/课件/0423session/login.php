<?php
    // login.php：显示表单，若session中有用户类型，则根
    // 据用户类型跳转到不同的网页。
    header('content-type:text/html:charset-utf-8');
    session_start();
    if(isset($_SESSION['role'])){
        if($_SESSION['role']=='admin'){
            header("location:admin.php");
        }
        else{
            header('location:user.php');
        }
    }
?>

<form method="post" action="saverole.php">
    身份：<select name="role">
        <option value="user">普通用户</option>
        <option value="admin">管理员</option>
    </select>
    <input type="submit" value="提交">
</form>