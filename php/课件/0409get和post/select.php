<html>
    <head>
        <title>活动安排</title>
    </head>
<body>本周安排<br/>
<form method="POST" action="select_1.php">
    <select name="weeks">
        <option value="比赛">周一</option>
        <option value="上班">周二</option>
        <option value="篮球">周三</option>
        <option value="足球">周四</option>
        <option value="游泳">周五</option>
        <option value="读书">周六</option>
        <option value="看电影">周七</option>
    </select>
    <input type="submit" value="提交">
    <input type="reset" value="重置">
</form>
</body>
</html>

<?php
header('content-type:text/html;charset=utf-8');