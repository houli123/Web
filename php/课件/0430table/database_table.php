
    <table border="1">
        <tr style="background-color:blue;">
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
                <td><a href='table2.php?class=$classNo'>$classNo</a> </td>
                <td>$className</td></tr>";
        }
        ?>
    </table>
<?php
