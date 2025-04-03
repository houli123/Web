<?php
if(isset($_COOKIE['username']))
{
    echo '欢迎您：'.$_COOKIE['username'].'<br/>';
    echo '您的密码为：'.$_COOKIE['pwd'].'<br/>';
    echo "<a href='cookie_4.php'>注销信息</a>>";
    echo '<br/>';
    echo "<a href='cookie_1.php'>返回登录</a>>";
}
