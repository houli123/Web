<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的学习空间</title>
    <link href="../css/index.css" type="text/css" rel="stylesheet" />
    <link href="../css/study-image.css" type="text/css" rel="stylesheet" />
    <link href="../css/study-video.css" type="text/css" rel="stylesheet" />
    <link href="../css/study-main.css" type="text/css" rel="stylesheet" />
    <link rel="icon" href="../images/icon/圣诞日历.png" sizes="32*32">
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
                            <li><a href="#">学习记录</a></li>
                            <li><a href="study.php">好言好句</a></li>
                            <li><a href="study-img.php">学习笔记</a></li>
                            <li><a href="study-video.php">学习视频</a></li>
                        </ul>
                    </div>
                </div>

            <!-- 中间右边 -->   
                <div id="right">
                    <div id="index">
                        学习空间&nbsp;>&nbsp;学习记录
                    </div>
                    <hr>
                    <!-- 以下是正式内容 -->

                    <!-- 日历 -->
                    <div class="calendar">
                        <!-- 日历与图片 -->
                        <div id="date_img">
                            <div class="date">
                                <h3>December</h3>
                                <div class="days">
                                    <div class="day">一</div>
                                    <div class="day">二</div>
                                    <div class="day">三</div>
                                    <div class="day">四</div>
                                    <div class="day">五</div>
                                    <div class="day">六</div>
                                    <div class="day">日</div>
                                    <div class="number"></div>
                                    <div class="number"></div>
                                    <div class="number"></div>
                                    <div class="number"></div>
                                    <div class="number  active">1</div>
                                    <div class="number  active">2</div>
                                    <div class="number  active">3</div>
                                    <div class="number  active">4</div>
                                    <div class="number  active">5</div>
                                    <div class="number  active">6</div>
                                    <div class="number  active">7</div>
                                    <div class="number  active">8</div>
                                    <div class="number  active">9</div>
                                    <div class="number  active">10</div>
                                    <div class="number  active">11</div>
                                    <div class="number  active">12</div>
                                    <div class="number  active">13</div>
                                    <div class="number  active">14</div>
                                    <div class="number  active">15</div>
                                    <div class="number  active">16</div>
                                    <div class="number  active">17</div>
                                    <div class="number  active">18</div>
                                    <div class="number  active">19</div>
                                    <div class="number  active">20</div>
                                    <div class="number  active">21</div>
                                    <div class="number  active">22</div>
                                    <div class="number  active">23</div>
                                    <div class="number  active" id="today">24</div>
                                    <div class="number">25</div>
                                    <div class="number">26</div>
                                    <div class="number">27</div>
                                    <div class="number">28</div>
                                    <div class="number">29</div>
                                    <div class="number">30</div>
                                    <div class="number">31</div>
                                </div>
                            </div>
                            <div class="img">
                                <img src="../images/bgm.png" alt="Error">
                            </div>
                        </div>

                            <!-- 签到功能 -->
                            <div id="this">
                                本月已连续签到学习24天，再接再厉！
                                <p style="text-align: center;"><a href="study-main2.php#main2"><input type="button" value="签到"></a></p>
                            </div>
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