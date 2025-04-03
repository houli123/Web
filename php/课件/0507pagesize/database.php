<?php
$conn=mysqli_connect("localhost","root","123456","testdb");
if(!$conn){
    die("连接失败".mysqli_connect_error($conn));
}
mysqli_query($conn,"SET NAMES UTF8");