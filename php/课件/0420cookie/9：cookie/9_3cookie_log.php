<?php
header("content-Type: text/html; charset=utf-8");
if(isset($_COOKIE['logtime']))
{
    echo "The last visit time:".$_COOKIE['logtime'];
}
else
{
    echo "This is the first visit";
}
setcookie('logtime',date('Y-m-d H:i:s'),time()+5);