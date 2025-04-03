<?php
session_start();
session_destroy();
echo "<script>alert('您已安全退出，如有需要请重新登录');location.href='index.php';</script>";