<?php
//    mysqli_num_rows(resource )
include "mysql.php";
$sql="select * from student";
$result=mysqli_query($conn,$sql);
//方法1：num_rows
$num=mysqli_num_rows($result);
echo '<br/>'.'total:'.$num.'<br/>';

//方法2：while
$count=0;
while($row=mysqli_fetch_row($result)){
    echo $row[0].':'.$row[1].':'.$row[2].':'.$row[3].'<br/>';
    $count++;
}
echo 'total:'.$count.'<br/>';
//方法3：修改查询语句
$sql="select count(*) from student";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$num=$row[0];
echo 'total:'.$num.'<br/>';

#年龄超过20岁的学生信息和人数
$sql="select * from student where age>20";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)){
    echo $row[0].":".$row[1].":".$row[2].":".$row[3]."<br/>";
}
echo "年龄大于20岁的总人数=".$num;
