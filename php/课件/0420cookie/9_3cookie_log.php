<?php
    if(isset($_COOKIE['logtime'])){
        echo "last time:".$_COOKIE['logtime'];
    }else{
        echo "firt visit";
    }
    setcookie('logtime',date('Y-m-d H:i:s'),time()+5);