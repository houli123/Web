<?php
    if(isset($_COOKIE['user'])){
        echo "用户名：".$_COOKIE['user']."<br/>";
        echo "密码：".$_COOKIE['password']."<br/>";
    }
    echo "<a href='cookie_4.php'>注销</a><br/>";
    echo "<a href='cookie_1.php'>返回</a>";