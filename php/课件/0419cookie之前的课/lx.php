<html>
<head>
    <title>头像选择</title>
</head>
<body>
<form method="POST" action="headNest.php">
    <table border="1">
        <tr><td>头像选择:</td>
            <td>
                <select name="touxiang" onchange="javascript:face.src=this.value">
                    <?php
                    for($i=1;$i<=10;$i++)
                    {
                        echo "<option value='img/$i.gif'>$i.gif</option>";
                    }
                    ?>
                </select>
                <img src="img/1.gif" name="face">
            </td></tr>

        <tr><td></td>
            <td>
                <input type="submit" value="提交">
                <input type="reset" value="重置">
            </td></tr>
    </table>
</form>
<?php
