<!--Session_4.php:-->
<!--清空session中的内容，信息提示后跳转到Session_1php。-->

<?php
session_start();
session_destroy();
echo "您的信息已注销<br/>";
echo "<a href='session1.php'>返回</a>";
?>