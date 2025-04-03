<form method="post" action="cookie_2.php">
    用户名：<input type="text" name="username" value="
<?php
if (isset($_COOKIE['username']))
{
    echo $_COOKIE['username'];
}
?>"><br/>
    密码：<input type="password" name="pwd" value="
<?php
    if (isset($_COOKIE['pwd']))
    {
        echo $_COOKIE['pwd'];
    }
    ?>"><br/>
    <input type="checkbox" name="save" value="save">是否保存用户登录<br/>
    <input type="submit" value="提交">
</form>
<?php
header("content-Type: text/html; charset=utf-8");
?>