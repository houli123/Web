<?php
//mysqli_connect("host",'user','password','database');
    $conn=mysqli_connect("localhost",'root','123456','testdb');
    if(!$conn){
        die("连接失败".mysqli_connect_error($conn));
    }
    echo "连接成功";
//    mysqli_select_db();
//    mysqli_query(mysqli link,string query[,int resultmode]);
//select成功返回结果集，失败False，insert这些成功True
    mysqli_query($conn,"SET NAMES UTF8");
