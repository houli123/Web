<!--php格式-->
<?php
/*    echo "hello,world<br/>";
    echo "刘杰<br/>";
    echo "22190494";*/
?>

<!--php里的h5-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    php可以嵌入html中-->
    <title>h5测试<?php echo "-php test";?></title>
    <style>
        h1{color: red;}
    </style>
    <script type="text/javascript">
        // alert("js的hello!")
        // window.alert("js的hello2!")
    </script>
</head>

<body>
<hr>
<h1>body的This is a test  <?php "php1".".连接php2"?> </h1>
<hr>
</body>
</html>

<!--php例子-->
<?php
    echo "hello";
    printf("第一个06d：%06d<br/>第二个a6d：%'a6d",10122,10313);
    echo "<br/>";var_dump('abc');
    echo "<br/>";var_dump("abc");
//    单双引号例子
    $a=22;$b=33;
    echo ("<br/>$a"."：双引号能解析变量");
    echo ('<br/>$b'.'：单引号不能解析变量<br>');
    $c=<<<note
定界符，类似于
py的'''

note;
    echo $c;

    $d='ab\\cd\'ef\tgh';  //单引号只能转移'和\

    $str="Tom";
    echo "<br />";
    echo "我的名字叫'".$str."'";
    echo "<br />";
    echo '我的名字叫"'.$str.'"'."<br />";
    echo "我的名字叫\"".$str."\"<br />";
    echo "我的名字叫\"{$str}\"";          //{}将变量括成一个整体
?>
