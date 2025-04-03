<?php

// 注销cookie
setcookie('username', '', time() - 3600); // 过期时间设置为当前时间之前
setcookie('password', '', time() - 3600);
header('Location: cookie_1.php');
?>