<form action="table22.php" method="post">
    <table border="1">
        <tr style="background-color:blue;">
            <td>请选择</td>
            <th>
                班级编号
            </th>
            <th>
                班级名称
            </th>
        </tr>
        <?php
        include "database.php";
        $sql="select * from class";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
            $classNo=$row[0];
            $className=$row[1];
            echo "<tr align='center'>
                <td><input type='checkbox' name='myNo[]' value='$classNo'></td>
                <td>$classNo</td>
                <td>$className</td></tr>";
        }
        ?>
    </table>
    <input type="submit" value="提交">
    <input type="reset" value="重置">
</form>
<?php
