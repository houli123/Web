<?php
header("content-Type: text/html; charset=utf-8");
if(isset($_COOKIE['num']))
{
    echo "The last visit time:".$_COOKIE['num'];
}
else
{
    echo "This is the first visit";
}
setcookie('logtime',date('Y-m-d H:i:s'),time()+5);