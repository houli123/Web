<?php
    // lgoutphp：清空session中的内容，信息提示后跳转到oginph
    // 青采取措施防用户直接访问Userphp页面 
    session_start();
    session_destroy();
    echo '<script>';
    echo "alert('已注销');";
    echo "location.href='login.php'";
    echo '</script>';
    header('content-type:type/html:charset-utf-8');