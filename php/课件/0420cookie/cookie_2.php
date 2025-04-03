<?php
    if(isset($_POST['flag'])){
        setcookie('user',$_POST['user'],time()+5);
        setcookie('password',$_POST['password'],time()+5);
        echo "<script>","alter('用户名和密码已保存，即将会到cookie_1文件');","</script>";
        header('Location:cookie_3.php');
    }
    else{
        setcookie('user',"");
        setcookie('password',"");
        echo "<script>","alter('用户名和密码未保存');","</script>";
        echo "请勾选保存登录信息<br/>";
        echo "<a href='cookie_1.php'>返回</a>";
    }