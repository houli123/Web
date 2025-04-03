<body>
<form method="post" action="tab1.php">
    <table border=1>
        <tr>
            <td>
                用户名：
            </td>
            <td>
                <input type="text" name="user">
            </td>
        </tr>

        <tr>
            <td>
                密码：
            </td>
            <td>
                <input type="password" name="password">
            </td>
        </tr>

        <tr>
            <td>
                请输入你的简介：
            </td>
            <td>
                <textarea name="textarea"></textarea>
            </td>
        </tr>

        <tr>
            <td>
                请选择你的身份：
            </td>
            <td>
                <section name="section">
                    <option value="普通用户"></option>
                    <option value="vip用户"></option>
                    <option value="管理员"></option>
                </section>
            </td>
        </tr>

        <tr>
            <td>
                选择头像：
            </td>
            <td>
                <input type="file" name="file">
            </td>
        </tr>

        <tr>
            <td>选择头像2：</td>
            <td>
                <select name="touxiang" onchange="javascript:face.src=this.value">
                    <?php
                    for($i=1;$i<=10;$i++){
                        echo "<option value='img/$i.gif'>$i.gif</option>";
                    }
                    ?>
                </select>
                <img src="img/1.gif" name="face" style="width:150px;height:150px;">
            </td>
        </tr>

        <tr>
            <td>
                爱好：
            </td>
            <td>
                <input type="checkbox" name="checkbox1">读书
                <input type="checkbox" name="checkbox2">游戏
                <input type="checkbox" name="checkbox3">旅游
            </td>
        </tr>

        <tr>
            <td>
                爱好：
            </td>
            <td>
                <input type="radio" name="radio1">男</inputradio>
                <input type="radio" name="radio2">女</radio>
            </td>
        </tr>
    </table>
    <input type="submit" value="提交">
    <input type="reset" value="重置">
</form>