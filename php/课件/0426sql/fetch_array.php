<?php
//header('content-type')
include "mysql.php";
$sql="select * from class";
$result=mysqli_query($conn,$sql);
//mysqli_fetch_array(resource result[,int result_type])
while($row=mysqli_fetch_row($result)){
    echo $row[0].":".$row[1].'<br/>';
//    echo $row["classNo"].":".$row["className"]."<br/>";
}

#学生表全部信息
$sql="select * from student";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_row($result)){
    echo $row[0].":".$row[1].":".$row[2].":".$row[3]."<br/>";
}
