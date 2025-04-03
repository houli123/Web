<!--Session_3.php:-->
<!--（若有则）将session中保存的用户名与密码显示在网页上，并提供“返回”超链接跳转Session_1.php ，提供“注销”超链接跳转Session_4.php 。-->
<!--若没有，则提示无登录信息，并提供“登录”超链接。-->


<?php
session_start();
if(isset($_SESSION['user'])){
    echo "用户名：".$_SESSION['user']."<br/>";
    echo "密码：".$_SESSION['password']."<br/>";
    echo "<a href='session4.php'>注销</a><br/>";
    echo "<a href='session1.php'>返回</a>";
}
else{
    echo "无登录信息，请登录！";
    echo "<a href='session1.php'>登录</a>";
}
