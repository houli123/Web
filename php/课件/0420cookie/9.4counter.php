<?php
    if(isset($_COOKIE['num'])){
        $count=$_COOKIE['num'];
    }else{
        $count=0;
    }
    $count++;
    setcookie('num',$count,time()+3);
    echo "welcome ,you are the $count visitor";