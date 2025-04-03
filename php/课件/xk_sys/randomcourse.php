<?php
include "db_conn.php";
$sql="select * from course,department where course.Departno=Department.Departno";
$result=mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);
$num=rand(0,$total-1);
mysqli_data_seek($result,$num);
$row=mysqli_fetch_array($result);
//var_dump($row);
?>
<table border="2">
<tr>
    <td rowspan="8"><img src="./uploadpics/<?php echo $row['CouNo'];?>.jpg"></td>
    <td>课程编码</td>
    <td><?php echo $row['CouNo'];  ?></td>
</tr>
<tr>
    <td>课程名称</td>
    <td><?php echo $row[1];  ?></td>
</tr>
<tr>
    <td>类型</td>
    <td><?php echo $row[2];  ?></td>
</tr>
<tr>
    <td>学分</td>
    <td><?php echo $row[3];  ?></td>
</tr>
<tr>
    <td>任课教师</td>
    <td><?php echo $row[4];  ?></td>
</tr>
<tr>
    <td>开课系部</td>
    <td><?php echo $row["DepartName"];  ?></td>
</tr>
<tr>
    <td>上课时间</td>
    <td><?php echo $row[6];  ?></td>
</tr>
<tr>
    <td>限定人数</td>
    <td><?php echo $row[7];  ?></td>
</tr>
</table>
