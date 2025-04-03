<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的生活空间</title>
    <link href="../css/index.css" type="text/css" rel="stylesheet" />
    <link href="../css/study-image.css" type="text/css" rel="stylesheet" />
    <link rel="icon" href="../images/icon/星.png" sizes="32*32">
    <script src="../js/background.js"></script>
    <style>
        #main{
            padding:5%;
        }
        #main img{
            cursor: unset;
            position: relative;
            top:-30px;
            max-width: 673px;
            min-width: 673px;
            max-height: 250px;
            margin-right: 40px;
        }
        #main h1{
            font-size: 40px;
            font-family: 华文行楷;
        }
        #right{
            overflow: auto;
        }
        #right img{
            margin:initial auto;
        }
    </style>
</head>


<body>
    <div id="container">
        <!-- 回到顶部箭头 -->
        <a href="#"><img class="head" src="../images/head.png"></a>
        <!-- 点击更换背景图片的设置 -->
  	    <div id="js">
            <img src="../images/3.jpg" alt="" class="photo1">
            <img src="../images/bak4.png" alt="" class="photo1">
            <img src="../images/bak5.png" alt="" class="photo1">
            <img src="../images/bak2.png" alt="" class="photo1">
        </div>
        <!-- 搜索框 -->
        <div class="search">
            <input type="search" placeholder="Search">
            <a href="#" onclick="alert('查找失败')">
                <i>🔍</i>
            </a>
        </div>


        <img id="leaf" src="../images/gif.png" />
        <!-- 最上面那部分 -->
        <div id="head">
            <!-- 头部背景图片 -->
            <div id="head-background">
                <img src="../images/photo.png"/>
            </div>
            <!-- 导航栏 -->
            <div id="nav">
                <ul>
                    <li><a href="../index.php">主页</a></li>
                    <li><a href="study-main.php">学习空间</a></li>
                    <li><a href="travel.php">生活空间</a></li>
                    <li><a href="album.php">相册空间</a></li>
                    <li><a href="blog.php">博客空间</a></li>
                    <li><a href="music.php">音乐空间</a></li> 
                    <li><a href="center.php">个人中心</a></li> 
                </ul>
            </div>
        </div>



        <!-- 中间的一块 -->
        <div id="middle">
            <!-- 中间左边 -->
            <div id="left">

                <!-- 导航栏 -->
                <div id="nav1">
                    <ul>
                        <li><a href="travel.php">旅游记录</a></li>
                        <li><a href="school-video.php">生活视频</a></li>
                        <li><a href="school.php">校园生活</a></li>
                        <li><a href="school-tool.php">校园工具箱</a></li>
                    </ul>
                </div>
            </div>

        <!-- 中间右边 -->   
            <div id="right">
                <div id="index">
                    生活空间&nbsp;>&nbsp;校园工具箱
                </div>
                <hr>
                <!-- 以下是正式内容 -->
                <div id="main">
                    <h1>校园工具箱</h1>
                    <image id="img" src="../images/sc11.jpg" usemap="#mymap" alt="error"/>
                    <map name="mymap" id="mymap">
                        <area href="https://jwxt.szpt.edu.cn/jwapp/sys/kccx/*default/index.do?THEME=green&EMAP_LANG=zh#/kccx" shape="circle" coords="77,50,40" title="全校课程查询" target="_blank"/>
                        <area href="https://jwxt.szpt.edu.cn/jwapp/sys/kcbcxmdl/*default/index.do#/qxkcb" shape="circle" coords="258,50,40" title="全校课表查询" target="_blank"/>
                        <area href="https://jwxt.szpt.edu.cn/jwapp/sys/wdkb/*default/index.do?THEME=green&EMAP_LANG=zh#/xskcb" shape="circle" coords="420,51,40" title="我的课表" target="_blank"/>
                        <area href="https://jwxt.szpt.edu.cn/jwapp/sys/qxfacx/*default/index.do?THEME=green&EMAP_LANG=zh#/pyfacx" shape="circle" coords="592,51,40" title="全校方案查询" target="_blank"/>
                        <area href="https://jwxt.szpt.edu.cn/jwapp/sys/studentWdksapApp/*default/index.do?THEME=green&EMAP_LANG=zh#/wdksap" shape="circle" coords="77,171,40" title="我的考试安排" target="_blank"/>
                        <area href="https://jwxt.szpt.edu.cn/jwapp/sys/zywcjd/*default/index.do?THEME=green&EMAP_LANG=zh#/zywcjd" shape="circle" coords="258,171,40" title="中英文成绩单" target="_blank"/>
                        <area href="https://jwxt.szpt.edu.cn/jwapp/sys/cjcx/*default/index.do?THEME=green&EMAP_LANG=zh#/cjcx" shape="circle" coords="420,171,40" title="成绩查询" target="_blank"/>
                    </map>
                </div>

            </div>
        </div>



        <!-- 页脚 -->
        <footer>
            深圳职业技术大学——人工智能学院信息楼实验室<br>
地址：广东省深圳市南山区沙河西路4089号 邮编：518055 <br/>电话：0755—2046336

邮编：518055 电话：0755—2046337
<br>更多信息：<a href="http://www.szpt.edu.cn" target="_blank">点击官网</a>
        </footer>
    </div>

    
</body>
</html>