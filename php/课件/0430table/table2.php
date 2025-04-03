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
    $classNo=$_GET['class'];
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
    echo "<a href='database_table.php'>返回</a>";
    ?>
</table>
<?php
