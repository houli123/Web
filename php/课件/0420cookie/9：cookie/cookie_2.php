<?php
header("content-Type: text/html; charset=utf-8");
if (isset($_POST['save']))
{
    setcookie('username',$_POST['username'],time()+10);
    setcookie('pwd',$_POST['pwd'],time()+10);
    header("Location:cookie_3.php");
}
else
{
    setcookie('username','',time()-1);
    setcookie('pwd','',time()-10);
    echo '请勾选保存登录信息<br/>';
    echo "<a href='cookie_1.php'>返回</a>";
}
