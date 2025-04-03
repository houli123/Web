<?php
include "counter.php";
session_start();
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'teacher') {
        echo "<script>alert('您已登录，请直接进入教师页面');location.href='teacher.php';</script>";
        header("location:teacher.php");
    } else {
        echo "<script>alert('您已登录，请直接进入学生页面');location.href='student.php';</script>";
        header("location:student.php");
    }
}
?>
<html>
  <head>
    <title>我的选课系统</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="greenspan.css" />
  </head>
  <body>
    <div id="header"><h1>任选课网上选课系统</h1></div>	
    <div id="topnav">
    	<a href="#">学校主页</a>
    	<a href="#">学生处</a>
    	<a href="#">团委</a>
    	<a href="#">公共服务</a>
    	<a href="#">关于本系统</a>
    </div>
    <div id="left">
    	<div class="box"><h3>用户登录</h3>
		
        <form action="ChkLogin.php" method="post">
      	  <p>用户名<br/>
	        <input type="text" name="username" size="10"/><br/>
	        密码<br/>
	        <input type="password" name="userpwd" size="12"/><br/>
	        身份<br/>
	        <select name="role">
		        <option value=student>学生</option>
		        <option value=teacher>教师</option>
	        </select><br/>
	        <input type="submit" value="确定" name="ok">
	        <input type="reset" value="重置" name="reset">
	        </p>
        </form>
        您是第<font color="#0000FF"><?php
                echo $num;
                ?></font>个访问者
     </div>
     <div class="box"><h3>快速链接</h3>
     	<ul>
     		<li><a href="#">使用方法</a></li>
     		<li><a href="#">常见问题</a></li>
     		<li><a href="#">联系我们</a></li>
     	</ul>
    </div>
   </div>
   
   <div id="middle">
     <div class="box">
        <h3>随机课程展示</h3>
         <?php
         include "randomcourse.php";
         ?>
     </div>
   </div>
  </body>
</html>