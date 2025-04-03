<form method='post' action="cookie_2.php">
    <table>
        <tr>
            <td>用户名：</td>
            <td>
                <input type="text" name="user" value="<?php
                if(isset($_COOKIE['user'])){
                    echo $_COOKIE['user'];
                }
                ?>">
            </td>
        </tr>

        <tr>
            <td>密码：</td>
            <td>
                <input type="password" name="password" value="<?php
                if(isset($_COOKIE['password'])){
                    echo $_COOKIE['password'];
                }
                ?>">
            </td>
        </tr>

        <tr>
            <td>
                <input type="checkbox" name="flag">是否保存信息
            </td>
            <td>
                <input type="submit">
            </td>
        </tr>
    </table>
    
</form>

