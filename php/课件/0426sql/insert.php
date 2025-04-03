<?php
include "mysql.php";
$sql="insert into student values('222','大熊猫','4','3')";
mysqli_query($conn,$sql);
$sql="select * from student where class=3";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    echo $row['studentId'].":".$row['studentName'].":".$row['age'].":".$row['class']."<br/>";
}

$sql="update student set studentName='小熊猫' where studentId=222";
mysqli_query($conn,$sql);
$sql="select * from student where class=3";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    echo $row['studentId'].":".$row['studentName'].":".$row['age'].":".$row['class']."<br/>";
}

$sql="delete from student where studentId=222";
mysqli_query($conn,$sql);
$sql="select * from student where class=3";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    echo $row['studentId'].":".$row['studentName'].":".$row['age'].":".$row['class']."<br/>";
}