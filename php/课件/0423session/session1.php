<!--Session_1.php:-->
<!--显示表单，若Session中有用户名和密码则将其显示在表单中-->

<?php
    session_start();
?>
<form method='post' action="session2.php">
    <table>
        <tr>
            <td>用户名：</td>
            <td>
                <input type="text" name="user" value="<?php
                if(isset($_SESSION['user'])){
                    echo $_SESSION['user'];
                }
                ?>">
            </td>
        </tr>

        <tr>
            <td>密码：</td>
            <td>
                <input type="password" name="password" value="<?php
                if(isset($_SESSION['password'])){
                    echo $_SESSION['password'];
                }
                ?>">
            </td>
        </tr>

        <tr>
            <td>

            </td>
            <td>
                <input type="submit">
            </td>
        </tr>
    </table>

</form>