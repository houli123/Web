<?php
    if(!isset($_POST['myNo'])){
        echo "<script>alert('请选择班级');";
        echo "location.href='database_table2.php'";
        echo "</script>";
    }
?>
<table border="1">
    <tr style="background-color:blue;">
        <th>
            学号
        </th>
        <th>
            姓名
        </th>
        <th>
            年龄
        </th>
        <th>
            班级编号
        </th>
    </tr>
    <?php
    include "database.php";
    $classes=$_POST['myNo'];
    foreach ($classes as $classNo){
        $sql="select * from student where class=$classNo";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
            $stuNo=$row[0];
            $stuName=$row[1];
            $stuAge=$row[2];
            $classNo=$row[3];
            echo "<tr align='center'><td>$stuNo</td><td>$stuName</td>
                <td>$stuAge</td><td>$classNo</td></tr>";
        }
    }
    echo "<a href='database_table2.php'>返回</a>";
    ?>
</table>
<?php
