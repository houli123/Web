<?php
include "database.php";
$pagesize=5;  //每页条数
//$sql_stu=ceil(($pagenum-1)*$pagesize);
$sql_stu="select * from student";
$result=mysqli_query($conn,$sql_stu);
$nums=mysqli_num_rows($result);  //总条数
$pagecount=ceil($nums/$pagesize);  //总页数，判断是否到最后一页

if(isset($_GET['page'])){
    $pagenum=$_GET['page'];  //如果当前页面有则跳，每有就跳到1
}
else{
    $pagenum=1;  //当前页数
}

$sql="select * from student limit ".($pagenum-1)*$pagesize.",$pagesize";
//echo $sql;  //检查sql错误
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
    echo "学号：$row[0]，姓名：$row[1]<br/>";
}
if($pagenum>1){
    echo "<a href='pagesize.php?page=1'>第一页</a>/<a href='pagesize.php?page=".($pagenum-1)."'>上一页</a>";
}
else{
    echo "第一页/上一页";
}
if($pagenum<$pagecount){
    echo "<a href='pagesize.php?page=".($pagenum+1)."'>下一页</a>/<a href='pagesize.php?page=$pagecount'>最后一页</a>";
}
else{
    echo "下一页/最后一页";
}
