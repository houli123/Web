<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的个人中心</title>
    <link href="../css/index.css" type="text/css" rel="stylesheet" />
    <link href="../css/study-image.css" type="text/css" rel="stylesheet" />
    <link href="../css/center3.css" type="text/css" rel="stylesheet" />
    <link rel="icon" sizes="16x16" href="../images/icon/用户.png">
    <script src="../js/background.js"></script>
    <style>
        
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
                        <li><a href="center.php">更改基本资料</a></li>
                        <li><a href="center2.php">更改个人信息</a></li>
                        <li><a href="center3.php">好友留言</a></li>
                       
                    </ul>
                </div>
            </div>

         <!-- 中间右边 -->   
            <div id="right">
                <div id="index">
                    个人中心&nbsp;>&nbsp;好友留言
                </div>
                <hr style="opacity: unset;">



                <!-- 以下是正式内容 -->
                <ul class="ul"> 
        
                    <li><a href="#" onclick="return false"> 
                        <h2>f114：</h2> 
                        <p>你是一个一个，对，好人</p> 
                    </a></li> 
                    <li>
                        <a href="#" onclick="return false"> 
                        <h2>汤姆：</h2> 
                        <p>不要像我一样，落了个...</p> 
                    </a></li> 
                    <li><a href="#" onclick="return false"> 
                        <h2>ggbond：</h2> 
                        <p>想到人都会死的，骂你就没意思了</p> 
                    </a></li> 
                    <li><a href="#" onclick="return false"> 
                        <h2>韦子：</h2> 
                        <p>yes~yes~yes</p> 
                    </a></li> 
                    <li><a href="#" onclick="return false"> 
                        <h2>h女士：</h2> 
                        <p>将权限管理、工作流管理做到我能力的极致，一个人只能做好那么很少的几件事情</p> 
                    </a></li> 
                    <li><a href="#" onclick="return false"> 
                        <h2>麦克阿瑟：</h2> 
                        <p>谁要是给差评，那简直是有偏见</p> 
                    </a></li> 
                </ul> 


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