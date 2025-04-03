<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>我的音乐空间</title>
    <link href="../css/index.css" type="text/css" rel="stylesheet" />
    <link href="../css/study-image.css" type="text/css" rel="stylesheet" />
    <link href="../css/music.css" type="text/css" rel="stylesheet" />
    <link rel="icon" href="../images/icon/音乐.png" sizes="32*32">
    <script src="../js/background.js"></script>
    <style>
        /* 音乐 */
        .audio{
            min-width: 250px;
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
            <div class="main1">
                <div class="cloud">
                    <div class="cloud_photo">
                        <img src="../images/2.png" />
                    </div>
                    <div class="cloud_music">
                        <h1>我喜欢的音乐</h1><br />
                        <audio src="../audio/纯音乐-忧伤还是快乐.mp3" class="audio" controls autoplay></audio>
                        <p> 用户：Jack &nbsp;2022-12-7 &nbsp;</p><br />
                        <div class="buttons">
                            <button>
                                <img src="../images/Play Green Button.png" />
                                <p>播放</p>
                            </button>
                            <button>
                                <img src="../images/Play Blue Button.png" />
                                <p>收藏</p>
                            </button>
                            <button>
                                <img src="../images/Import Audio Document.png" />
                                <p>分享</p>
                            </button>
                            <button>
                                <img src="../images/Star.png" />
                                <p>下载</p>
                            </button>
                        </div>
                    </div>
                </div>



                
                <div class="detail_layout">
                    <div class="main_part ">
                        <ul class="song_head">
                            <li class="song_head_name">歌曲</li>
                            <li class="song_head_author">歌手</li>
                            <li class="song_head_time">时长</li>
                        </ul>
                        <ol class="song__list">
    
                            <li>
                                <div class="song__songname">句号
    
                                    <div class="play">
                                        <ol>
                                            <li><a href="https://music.163.com/#/song?id=1405283464">
                                                    <img src="../images/Play Green Button.png" />
                                                    <img src="../images/Play Blue Button.png" />
                                                    <img src="../images/Import Audio Document.png" />
                                                    <img src="../images/Star.png" /></a></li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="song__artist">邓紫棋</div>
                                <div class="song__time">03:55</div>
                            </li>
                            <li>
                                <div class="song__songname">Die Young
                                    <div class="play">
                                        <ol>
                                            <li><a href="https://music.163.com/#/song?id=25704014">
                                                    <img src="../images/Play Green Button.png" />
                                                    <img src="../images/Play Blue Button.png" />
                                                    <img src="../images/Import Audio Document.png" />
                                                    <img src="../images/Star.png" /></a></li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="song__artist">Kesha</div>
                                <div class="song__time">03:31</div>
                            </li>
                            <li>
                                <div class="song__songname">小半
                                    <div class="play">
                                        <ol>
                                            <li><a href="https://music.163.com/#/song?id=421423806">
                                                    <img src="../images/Play Green Button.png" />
                                                    <img src="../images/Play Blue Button.png" />
                                                    <img src="../images/Import Audio Document.png" />
                                                    <img src="../images/Star.png" /></a></li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="song__artist">陈粒</div>
                                <div class="song__time">04:57</div>
                            </li>
                            <li>
                                <div class="song__songname">Hello
                                    <div class="play">
                                        <ol>
                                            <li><a href="https://music.163.com/#/song?id=1381703334">
                                                    <img src="../images/Play Green Button.png" />
                                                    <img src="../images/Play Blue Button.png" />
                                                    <img src="../images/Import Audio Document.png" />
                                                    <img src="../images/Star.png" /></a></li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="song__artist">Delaney</div>
                                <div class="song__time">03:21</div>
                            </li>
                            <li>
                                <div class="song__songname">枕边童话
                                    <div class="play">
                                        <ol>
                                            <li>
                                                <a href="https://music.163.com/#/song?id=1456393572">
                                                    <img src="../images/Play Green Button.png" />
                                                    <img src="../images/Play Blue Button.png" />
                                                    <img src="../images/Import Audio Document.png" />
                                                    <img src="../images/Star.png" /></a></li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="song__artist">傲七爷</div>
                                <div class="song__time">03:10</div>
                            </li>
                            <li>
                                <div class="song__songname">幸福上瘾
                                    <div class="play">
                                        <img src="../images/Play Green Button.png" />
                                        <img src="../images/Play Blue Button.png" />
                                        <img src="../images/Import Audio Document.png" />
                                        <img src="../images/Star.png" />
                                    </div>
                                </div>
                                <div class="song__artist">张艺兴</div>
                                <div class="song__time">01:25</div>
                            </li>
                            <li>
                                <div class="song__songname">幸福
                                    <div class="play">
                                        <img src="../images/Play Green Button.png" />
                                        <img src="../images/Play Blue Button.png" />
                                        <img src="../images/Import Audio Document.png" />
                                        <img src="../images/Star.png" />
                                    </div>
                                </div>
                                <div class="song__artist">张艺兴</div>
                                <div class="song__time">01:25</div>
                            </li>
                            <li>
                                <div class="song__songname">麻婆豆腐
                                    <div class="play">
                                        <img src="../images/Play Green Button.png" />
                                        <img src="../images/Play Blue Button.png" />
                                        <img src="../images/Import Audio Document.png" />
                                        <img src="../images/Star.png" />
                                    </div>
                                </div>
                                <div class="song__artist">张艺兴</div>
                                <div class="song__time">01:25</div>
                            </li>
                            <li>
                                <div class="song__songname">香水
                                    <div class="play">
                                        <img src="../images/Play Green Button.png" />
                                        <img src="../images/Play Blue Button.png" />
                                        <img src="../images/Import Audio Document.png" />
                                        <img src="../images/Star.png" />
                                    </div>
                                </div>
                                <div class="song__artist">张艺兴</div>
                                <div class="song__time">01:25</div>
                            </li>
                            <li>
                                <div class="song__songname">快门回溯
                                    <div class="play">
                                        <img src="../images/Play Green Button.png" />
                                        <img src="../images/Play Blue Button.png" />
                                        <img src="../images/Import Audio Document.png" />
                                        <img src="../images/Star.png" />
                                    </div>
                                </div>
                                <div class="song__artist">张艺兴</div>
                                <div class="song__time">01:25</div>
                            </li>
                        </ol>
                    </div>


                    
                    <div class="other_part">
                        <h2>专辑简介</h2>
                        <p>无论何时何地，梦想都是人生的必需品
                            口中念着“NAMANANA”的能量暗号
                            用100%的梦想 + 200%的行动力，浇灌出让万物生长的1000%生命力
                            中英文双碟同步出发，带你进入张艺兴的“梦不落雨林”，邀你开启一场冒险之旅
    
                            「制作人张艺兴全程主理，让你听见最完整的Lay Zhang」
                            影、视、歌、综艺全面进击的张艺兴，始终怀揣着对音乐最质朴的初心。
                            <!-- 他一直希望，能够作出代表华人的原创音乐。这是他的梦想，也是他赋予自己的使命。 -->
                        </p>
                        <h2>该歌手的其他专辑</h2>
                        <div class="other_zhuanji">
                            <div>
                                <img src="../images/music1.png" />
                                <p>一个人</p>
                            </div>
                            <div>
                                <img src="../images/music2.png" />
                                <p>青春快乐</p>
                            </div>
                            <div>
                                <img src="../images/music3.png" />
                                <p>祈愿</p>
                            </div>
                            <div>
                                <img src="../images/music4.png" />
                                <p>眼泪机场</p>
                            </div>
                            <div>
                                <img src="../images/music5.png" />
                                <p>MYM</p>
                            </div>
                            <div>
                                <img src="../images/music6.png" />
                                <p>独角戏</p>
                            </div>
                        </div>
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

    
</body>
</html>