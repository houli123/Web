<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的生活空间</title>
    <link href="../css/index.css" type="text/css" rel="stylesheet" />
    <link href="../css/study-image.css" type="text/css" rel="stylesheet" />
    <link href="../css/study-video.css" type="text/css" rel="stylesheet" />
    <link rel="icon" href="../images/icon/video.png" sizes="32*32">
    <script src="../js/background.js"></script>
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
                    生活空间&nbsp;>&nbsp;生活视频<a name="one"></a>
                </div>
                <hr>
                <div id="row">
                    <!-- 第一行图片 -->

                        <div id="video">
                            <div id="vid1">
                                <video controls muted src="../video/sc.mp4"></video>
                            </div>
                            <div id="name1">
                                <h3>3D投影</h3>
                            </div>
                        </div>
                        <div id="video">
                            <div id="vid2">
                                <video height="500px" controls muted src="../video/sc1.mp4"></video>
                            </div>
                            <div id="name2">
                                <h3>学长的视频</h3>
                            </div>
                        </div>
                    
                </div> 

                <!-- 下一页按钮 -->
                <div id="next">
                    <a href="#one" class="previous round">&#8249;</a>
                    <a href="school-video2.php#two" class="next round">&#8250;</a>
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