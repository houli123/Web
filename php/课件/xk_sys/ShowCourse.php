<?php
include "db_conn.php";
$sql_num="select * from course order by CouNo";
$result_num=mysqli_query($conn,$sql_num);
$num=mysqli_num_rows($result_num);
$pagesize=5;
$total_pg=ceil($num/$pagesize);

if(isset($_GET['page'])){
    $pagenum=$_GET['page'];
}else{
    $pagenum=1;
}

$sql="select * from course limit ".($pagenum-1)*$pagesize.",$pagesize";
    $result=mysqli_query($conn,$sql);
    ?>
    <table border="1">
        <tr>
            <td align="center" colspan="6">点击课程编码查询课程详细信息</td>
    </tr>
    <tr align="center" bgcolor="#f0e68c">
        <td>课程编码</td>
        <td>课程名称</td>
        <td>课程类别</td>
        <td>学分</td>
        <td>任课教师</td>
        <td>上课时间</td>
    </tr>
        <?php
        while($row=mysqli_fetch_array($result)){
            $CouNo=$row['CouNo'];
            $CouName=$row['CouName'];
            $Kind=$row['Kind'];
            $Credit=$row['Credit'];
            $Teacher=$row['Teacher'];
            $SchoolTime=$row['SchoolTime'];
            echo "<tr align=\"center\"><td><a href='CourseDetail.php?CouNo=$CouNo&&page=$pagenum'>$CouNo</a></td><td>$CouName</td><td>$Kind</td><td>$Credit</td><td>$Teacher</td><td>$SchoolTime</td></tr>";
        }
        ?>
</table>
<?php
if($pagenum>1){
    echo "<a href='ShowCourse.php?page=1'>第一页</a>|<a href='ShowCourse.php?page=".($pagenum-1)."'>上一页</a>";
}
else{
    echo "第一页|上一页";
}
if($pagenum<$total_pg){
    echo "<a href='ShowCourse.php?page=".($pagenum+1)."'>下一页</a>|<a href='ShowCourse.php?page=$total_pg'>最后一页</a>";
}else{
    echo "下一页|最后一页";
}
