<?php
    header('content-type:text/html;charset=utf-8');
    setcookie('name','dxm',time()+5);
    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }
    else{
        echo 'no cookie';
    }
