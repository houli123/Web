<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post" action="table1.php">
        <table border=1>
                <tr>
                    <td>选择头像：</td>
                    <td>
                        <select name="touxiang" onchange="javascript:face.src=this.value">
                            <?php
                                for($i=1;$i<=10;$i++){
                                    echo "<option value='img/$i.gif'>$i.gif</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
            <tr>
                <td>
                    <input type="submit" value="提交">
                    <input type="reset" value="重置">
                </td>
                <td>
                    <img src="img/1.gif" name="face" style="width:150px;height:150px;">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>