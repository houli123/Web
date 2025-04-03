# php认识

1）一门运行于服务端的脚本语言；  
2）一般常用于做[后台管理系统](https://so.csdn.net/so/search?q=%E5%90%8E%E5%8F%B0%E7%AE%A1%E7%90%86%E7%B3%BB%E7%BB%9F&spm=1001.2101.3001.7020)，或与html混合使用、结合第三方后台框架开发web应用等；文件名以**.php**结尾；  
3）php原始名Personal Home Pagepersonal，后来更改为Hypertext Preprocessor，由拉斯马斯·勒德尔夫(Rasmus Lerdorf)编写，最初用于存放简历给hr浏览简历用，后来经过底层重写，再后来慢慢演变成一门用于网站开发或实现其他功能的语言，以及作为后端给前台提供服务。

# php代码工作流程

1）php代码存放于服务器端，并运行；  
2）客户端发送请求给服务端；  
3）php代码执行，查询数据库或者加载其他文件，然后将结果返回给客户端。  
**说明：**其中数据库查询要通过数据库database，文件的加载通过文件系统file system。

# php优点

语法简单、学习成本低、免费开源、开发效率高、跨平台、开发部署方便和开源框架丰富等等。

# php能做什么

1）**创建动态网页，**别以为只有其他前端脚本语言可以创建网页，php作为一门脚本语言，其实是可以实现动态网页的编写的，还可以和html一起混合编写；  
2）**php还能与服务器的文件进行交互，**比如拿到服务器上的资源（文件等等）返回给客户端；  
3）**常见的处理任务还有处理表单事件，**给客户端返回表单的处理结果和反馈；  
4）**发送和接收cookie；**  
5）**与数据库进行交互。**

# php常用于开发的程序类型

1）基本的网站和博客是php开发比较常见的；  
2）社交网络应用；  
3）各种后台管理系统，一般涉及到数据存储和交互的应用都可以用到php；  
4）php还可以编写搜索引擎和接口文档，因为涉及数据的交互存储和向客户端返回数据。

# 一些概念需要理解

PHP开发工具：PhpStorm、zenstudio、eclipse等；  
ssh、scp、xampp、Linux、Nginx、Apache、xshell等。

**xampp**

xampp可以理解为php开发的环境依赖集成包或工具软件，安装这个集成软件之后php代码才能在系统环境跑起来，就像html、css或js代码运行环境是浏览器一样。

xampp集成了Apache、MariaDB、PHP和Perl这几个部分，第一个是服务器软件，第二个是数据库软件，后两个是两个语言开发环境。而开头的x指的是你的系统环境，比如Windows、Linux或者OSX。

安装完并且运行这个集成工具软件之后，就可以在本地电脑运行php代码了，也就是说你的电脑由于装了这个集成工具软件之后变成了服务器或者说具有了服务器环境特性。

安装完之后需要注意的是，存放代码的位置是一个叫htdocs的文件夹，php代码需要放在这个文件夹里面才能正常运行。

在浏览器地址栏输入localhost或者127.0.0.1或者输入你当前网络的IP地址，之后浏览器打开运行了一个文件，这个文件实际就是htdocs下面的index.php文件。

**Nginx**

Nginx (engine x) 是一个高性能的HTTP和反向代理web服务器，同时也提供了IMAP/POP3/SMTP服务。由俄罗斯人伊戈尔·赛索耶夫开发，Nginx 可以在大多数Unix、Linux系统上编译运行，并有Windows移植版。

**代理服务器**

代理服务器是网络信息的中转站。一般情况下，使用网络浏览器直接去链接其它Internet站点并取得网络信息时，须送出请求信号来得到应答，然后对方再把信息传送回来。

代理服务器是介于浏览器和Web服务器之间的一台服务器，有了它之后，浏览器不是直接到Web服务器去取回网页而是向代理服务器发出请求，请求信号会先送到代理服务器，由代理服务器来取回浏览器所需要的信息并传送给你的浏览器。而且，大部分代理服务器都具有缓冲的功能，就好像一个大的Cache，它不断将新取得数据包存到它本机的存储器上，如果浏览器所请求的数据在它本机的存储器上已经存在而且是最新的，那么它就不重新从Web服务器取数据，而直接将存储器上的数据传送给用户的浏览器，这样就能显著提高浏览速度和效率。

代理服务器不仅可以实现提高浏览速度和效率的功能，它还可以实现网络的安全过滤、流量控制（减少Internet使用费用）、用户管理等功能，因此它既是一种网络防火墙技术，同时也可以解决许多单位连接Internet引起IP地址不足的问题。

**反向代理服务器**

也是代理服务器的一种，与**前向代理（正向代理）**不同，前向代理作为客户端的代理，将从互联网上获取的资源返回给一个或多个的客户端，服务端（如Web服务器）只知道这个前向代理的IP地址而不知道客户端的IP地址；

而反向代理是作为服务器端（如Web服务器）的代理使用，而不是客户端。客户端借由前向代理可以间接访问很多不同互联网服务器（簇）的资源，而反向代理是供很多客户端都通过它间接访问不同后端服务器上的资源，而不需要知道这些后端服务器的存在，而以为所有资源都来自于这个反向代理服务器。

前后向代理区别图例：

![](https://img-blog.csdnimg.cn/20191010172146785.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L2ppbXNvbl96aHU=,size_16,color_FFFFFF,t_70)

**说明：**图片来源：[http://developer.51cto.com/art/201906/598036.htm](http://developer.51cto.com/art/201906/598036.htm)，欢迎跳转阅读。

**SSH和SCP**

欢迎跳转阅读：[https://cloud.tencent.com/developer/article/1042350](https://cloud.tencent.com/developer/article/1042350)

# 语法部分

**1）起步**

php文件已**.php**后缀结尾，在php文件中可以编写和识别html标签代码，但是如果要写php代码需要怎么做呢？

需要使用下面所说的标识符包裹起来，代码就可以在标识符中间进行编写了。

```php
<?php......?>
```

php代码可以混合在html代码中，谁混合谁都可以：

```php
<?php    <div>    </div>?> <div>    <?php        ......    ?></div>
```

如果是纯粹的php代码，php标识符可以不加末尾的结束部分 ?>，但是如果后面跟的是html代码（比如第一种情况），则会报错，因为不是纯php代码，所以建议还是带上结束部分。如果要返回数据给客户端，需要使用echo/print等语句，而且既然它是一个脚本语言，当然可以和js一样写成多个标识符的形式：

```php
<?php    ......?> <?php    ......?>
```

**2）注释**

单行通过//或者#，多行通过/\* \*/

```php
<?php    //单行注释    #单行注释    /*    多行注释    多行注释    */?>
```

**3）声明变量和使用**

```php
$a = 10;echo $a;
```

注意命名规范，和其他语言类似，php声明的变量以字母和下划线\_开头，由字母、数字和下滑线组成，建议使用驼峰命名法，而且对大小写敏感。

**4）声明常量和使用**

```php
const THE_VALUE = 100;echo THE_VALUE;
```

**声明变量和常量的两者区别**

1）常量只能被赋值一次，赋值两次会出错；  
2）变量可以被赋值多次；  
3）而且常量不可以重复定义，也就是不可以使用同样的名字声明两次。

**php5之前的版本定义常量和使用**

```php
define('THE_VALUE',200);echo THE_VALUE;
```

当然，如果要确保声明的常量大小写形式都能输出，则可以加一个true参数：

```php
define('THE_VALUE',200,true);
```

这样就可以实现大小写都能输出了：

```php
echo the_value;echo THE_VALUE;
```

其他特性和const一样，但是实际上还是有很多区别的。

**5）php数据类型**

String、Integer、Float、Boolean、Array、Object、Null、Resource；

**String**

注意，php字符串相连接，**使用.而不是加号+：**

```php
'hello'.'world';
```

两个字符串使用加号的结果是返回0，即false；

注意，单、双引号里面包裹的内容都是字符串类型，但是单引号内的内容只可能是字符串，而双引号内的内容如果是变量则可以被正常解析出来：

```php
<?php    echo 'hello'.'world';    echo "the params is:$params"."haha";?>
```

另外，很有可能使用到转义字符\\，因为输出英文的时候经常使用到单引号，比如：they're here，这种情况就可以使用转义字符：they\\'re here，  
当然也可以使用双引号包住的形式："they're here"

**6）分支和条件**

和其他语言一样，就不详细说明了：

```php
if/if else/if else ifswitch case == === < > <= >= != !==AND OR XOR&&  ||
```

**逻辑运算符总结**

**逻辑与：**两边必须都为真才为真；  
**逻辑或：**两边有真则为真；  
**逻辑异或：**两边必须有真才为真，其他情况为假，例如“两边都为真/两边都为假”，和或的区别在于“两边都为真”的情况，或为真，异或为假。

**switch注意**

内部case如果没有break，则会有穿透现象，即输出多个结果的情况。

**7）数组**

数组是存储多个数值的变量。

**php创建数组的形式：**

```php
$arr = array("","","");$arr = ["","",""];
```

**下标数组和关联数组**

**下标数组：**$people\[0\]这种形式；  
**关联数组：**其实就是key和value的形式，当然key和value反过来也行：

```php
$arr =array("Bob" => 26,"Jim" => 23);
```

关联数组添加内容：

```php
$arr["Bob"] = 27;
```

打印数组的方法：**print\_r(数组)**

万能打印方法：**var\_dump(数组)**，打印的信息更详细，但不常用。

**多维数组**

数组中存放数组的形式：

```php
$arr = array(array("jim","bob"),array(1,22));
```

**8）循环**

for、while、do...while、foreach。

主要说一下foreach循环：

主要功能是用来遍历数组，多用于处理下标数组：

```php
foreach(数组 as item){    echo item;}
```

**说明：**item指数组中取出的对应的每一个值。

**处理关联数组的结构：**

```php
foreach(数组 as key => value){    echo key.":".value;}
```

这时候就可以输出关联数组对应的key和value了。当然key和value可以自己取任意名字。

**9）函数使用**

和其他语言一样，定义函数使用function关键字，函数的命名主要有三种方式：  
**Camel Case：小驼峰命名法，myFunction()  
Lower Case：下划线命名法，my\_function()  
Pascal Case：大驼峰命名法，MyFunction()**

常用的是小驼峰命名法。

定义函数和调用：

```php
function functionName(){    ......} functionName();
```

另一种调用方式：

```php
$func = 'functionName';$func();
```

传参和返回值与其他编程语言一样，只是php的形参都是多了一个$符号，这也是php的特点。

```php
function testName($paramsName){    return $paramsName*2;} testName(3);
```

当然调用的时候可以不给参数，但是定义函数的时候需要给定参数的默认值：

```php
function testName($name = "jimson"){    echo "Hello $name";} testName();
```

特别的，函数传引用：

```php
$testValue = 10; function addFive($num){    $num += 5;} function addTen(&$num){    $num += 10;} addFive($testValue);echo $testValue; addTen($testValue);echo $testValue;
```

**结果：**我们发现第一个打印的结果显示$testValue的值依然是10，但是第二个打印的却是20，这说明第二种方式使得变量$testValue的值发生了改变。

**解析：**第二种就是传引用的形式。变量实际在内存中的表现形式是，开辟一块内存空间将值存储进去，这样的内存空间叫栈区，以后会解析。当把变量$testValue传入函数时，**实际是将自身在内存中的地址传入函数**，然后此时函数中进行了相关操作（相加），相当于是在传入的这一块内存地址进行的操作，此时变量值就发生了改变。至于第一种函数的调用方式为什么不会使变量值发生改变呢？因为是在另一块内存中做的相关操作，对变量$testValue所在地址没有影响，所以变量值未变。

**10）字符串函数**

php中内置有很多字符串函数，这里介绍一些常用的。

**substr()：返回字符串的一部分**

```php
//例一：返回从1号位置到后面的字符echo substr("hello",1);//结果：ello //例二：返回一号位置到三号位置的字符echo substr("hello",1,3);//结果：ell //例三：返回后两位字符echo substr("hello",-2);//结果：lo
```

**strlen()：返回字符串长度**

```php
echo strlen("hello");// 结果：5
```

**strpos()：查找字符串中某字符第一次出现的位**

```php
echo strpos("hello world","o");//结果：4
```

**strrpos()：查找字符串中某字符最后一次出现的位置**

```php
echo strrpos("hello world","o");//结果：7
```

**trim()：去除首尾空格**

```php
var_dump(trim("hello world      "));//结果：11
```

**strtoupper()：将字符串转为大写**

```php
echo strtoupper("hello");//结果：HELLO
```

**strtolower()：将字符串转为小写**

```php
echo strtolower("HELLO");//结果：hello
```

**ucwords()：将每个单词的首字母转成大写**

```php
echo ucwords("hello world");//结果：Hello World
```

**str\_replace()：替换字符串中所匹配的内容**

```php
echo str_replace("world","jimson","hello world");//结果：hello jimson
```

**说明：**参数一指要查找的内容，参数二指要替换成的内容，参数三指要做查找替换字符串操作的对象（从哪里查找匹配）

**is\_string()：判断是不是字符串**

```php
echo is_string("jimson");//结果：1
```

**说明：**返回1说明是字符串，不返回任何内容说明不是字符串。另外，单双引号包裹的内容都是字符串。这一方法常常结合循环结构（foreach）去过滤数组中的非字符串的值。

**gzcompress()：压缩字符串**

```php
echo gzcompress("sjdkfjskdjfskfjks");//结果：是一堆乱码。
```

**gzuncompress()：解压字符串**

```php
echo gzuncompress(gzcompress("sjdkfjskdjfskfjks"));//结果：这时候就可以将压缩过的字符串解压还原回原来的样子。
```

**11）数组函数**  
这里对常用的内置数组函数做一个说明。

**添加、删除函数：**

```php
$array = array(); //array_push()：添加元素到数组末尾。array_push($array,"hello");//结果：往数组的末尾添加了hello。 //array_pop()：删除数组末尾元素。array_pop($array);//结果：删除了数组末尾的元素hello。 //array_unshift()：添加元素到数组开头。array_unshift($array,"hello");//结果：往数组的开头添加了hello。 //array_shift()：删除数组开头元素。array_unshift($array);//结果：删除了数组开头的元素hello。
```

**排序函数**

```php
$array = [1,2,15,6,33,44,5]; //sort()：数组排序。print_r(sort($array));//结果：Array([0]=>1 [1]=>2 [2]=>5 ...)
```

**字符串和数组相互转换函数**

```php
$array = ["hello","jim"]; //implode()：将数组转换成字符串。echo implode(",", $array);//结果：hello,jim//说明：将数组根据逗号“,”转换成字符串。  //explode()：将字符串转换成数组。print_r(explode(",", "hello,jim"));//结果：Array([0] => hello  [1] => jim)//说明：将字符串根据逗号“,”转换成数组。
```

# 文件引入

php可以将公共的代码保存到同一个文件里，然后通过文件引入的方式，以此来减少代码的冗余：

```php
<?php include "inc/header.php" ?>    <h1>Home</h1><?php include "inc/footer.php" ?>
```

文件引入的方式有两种：**include和require。**

**区别**

include引入时，即使此时引入出错也不会影响后面的代码执行，只是当前引入语句报错；

require则不同，一旦报错则下面的代码都不会执行。

例如：

**<?php include "inc/header1.php" ?>**

如果此时不存在引入文件header1.php，则会报错，但后面的语句依然会正常输出。而使用require时，则不会执行后面的语句，会阻塞在报错代码行。

**include\_once和require\_once**

文件只引入一次，重复引入不生效。

```php
<?php include_once "inc/header.php" ?><?php include_once "inc/header.php" ?><?php include_once "inc/header.php" ?>    <h1>Home</h1><?php include "inc/footer.php" ?>
```

而include则是引入几次就输出几次：

```php
<?php include "inc/header.php" ?><?php include "inc/header.php" ?><?php include "inc/header.php" ?>    <h1>Home</h1><?php include "inc/footer.php" ?>
```

# php语法糖

**1）三目运算符**

```php
$loggedIn = false;echo ($loggedIn) ? "you are logged in" : "you are not logged in";
```

当然三目运算可以嵌套使用：

```php
$loggedIn = false;$age = 18;echo ($loggedIn) ? (($age > 18) ? "" : "") :"";
```

**2）php代码混合html代码时的语法糖**

普通写法：

```php
<div>    <?php if ($loggedIn) { ?>        <h1>welcome to php world!</h1>    <?php } else{ ?>        <h1>hello you guys.</h1>    <?php } ?></div>
```

语法糖形式，更美观：

```php
<div>    <?php if ($loggedIn): ?>        <h1>welcome to php world!</h1>    <?php else: ?>        <h1>hello you guys.</h1>    <?php endif; ?></div>
```

**3）循环也有语法糖形式**

for循环语法糖：

```php
<div>    <?php for($i = 0; $i < 10; $i++) ?>        <li><?php echo $i."<br>";</li>    <?php endfor; ?></div>
```

foreach循环语法糖：

```php
<?php    $arr = ["jimson","lily","candy","alice"];?> <div>    <?php foreach($arr as $val): ?>        <?php echo $val."<br>";    <?php endforeach; ?></div>
```

# php预定义变量

**1）超全局对象：$\_SERVER**

它是一个包含了诸如头信息（header）、路径（path）、以及脚本位置（script locations）等等信息的数组。这个数组中项目由Web服务器创建。但是不同的服务器提供的项目不一定都是全部项目，有些会忽略，使用时应该查阅相关服务器规范或说明。可以使用这个对象来查阅服务器和客户端的信息。

**服务器信息获取**

获取主机名：$\_SERVER\["SERVER\_NAME"\];  
获取服务器软件信息：$\_SERVER\["SERVER\_SOFTWARE"\];  
获取服务器文件（向客户端返回的文件）根路径：$\_SERVER\["DOCUMENT\_ROOT"\];  
获取http主机名，结果和获取主机名一样：$\_SERVER\["HTTP\_HOST"\];  
获取当前脚本（执行该$\_SERVER\[......\]语句所在的php文件）的路径：$\_SERVER\["SCRIPT\_NAME"\];  
获取当前脚本的绝对路径：$\_SERVER\["SCRIPT\_FILENAME"\];  
获取当前页面路径，结果和$\_SERVER\["SCRIPT\_NAME"\]一样：$\_SERVER\["PHP\_SELF"\];

最后一个其实很多时候和action一起使用，相当于执行当前文件了，因为当前路径可不就是一个文件吗：

```html
<body>    <form method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">        <div>            <label>名字</label>            <input type="text" name="name">        </div>        <div>            <label>邮箱</label>            <input type="text" name="email">        </div>        <input type="sumit" value="确认">    </form></body>   // 分割线<body>    <form method="GET" action="get_post.php">        <div>            <label>名字</label>            <input type="text" name="name">        </div>        <div>            <label>邮箱</label>            <input type="text" name="email">        </div>        <input type="sumit" value="确认">    </form></body>
```

**客户端信息获取**

获取客户端信息，一般是浏览器信息：$\_SERVER\["HTTP\_USER\_AGENT"\];  
获取客户端协议头信息：$\_SERVER\["REMOTE\_ADDR"\];  
获取客户端端口号：$\_SERVER\["REMOTE\_PORT"\];

我们可以尝试着把这些信息在客户端浏览器打印出来：

```html
<?php include "serve-info.php" ?> <!DOCTYPE html><html lang="en"><head>    <meta charset="UTF-8">    <title>服务器与客户端信息</title>    <link href="https://bootswatch.com/cosmo/bootstrap.min.css" /></head><body>    <div class="cantainer">        <h1>服务器端配置信息</h1>        <?php if($server): ?>        <ul class="list-group">        <?php foreach($server as $key => $val): ?>            <li class="list-group-item">                <strong><?php echo $key; ?></strong>                <?php echo $val; ?>            </li>            <?php endforeach; ?>        </ul>        <?php endif; ?>    </div></body></html>
```

**2）$\_GET和$\_POST的使用**

和$\_SERVER一样属于全局对象。用于请求获取从前台返回的数据。

```php
<?php     if(isset($_GET["name"])){        echo $_GET["name"];    }    if(isset($_POST["name"])){        echo $_POST["name"];    }    if(isset($_REQUEST["name"])){        echo $_REQUEST["name"];    }?> <!DOCTYPE html><html lang="en"> <head>    <meta charset="UTF-8">    <title>Document</title></head> <body>    <form method="GET" action="get_post.php">        <div>            <label>名字</label>            <input type="text" name="name">        </div>        <div>            <label>邮箱</label>            <input type="text" name="email">        </div>        <input type="sumit" value="确认">    </form></body> </html>
```

**说明：**上面的method指的是请求的方式，只需要填写对应的方法即可。$\_REQUEST包含了$\_GET和$\_POST两者的作用，所以使用它时，就不用担心method的类型选择的是什么了。

```php
if(isset($_REQUEST["name"])){        echo $_REQUEST["name"];    }
```

常用的还有$\_SERVER\["QUEST\_STRING"\]，它可以获取客户端get请求url的?后面所带的参数。


**小实践**

实时展示从后台返回的数据。

```php
<?php     if(isset($_GET["name"])){        $name = $_GET["name"];    }    <!-- if(isset($_POST["name"])){        echo $_POST["name"];    }    if(isset($_REQUEST["name"])){        echo $_REQUEST["name"];    } -->?> <!DOCTYPE html><html lang="en"> <head>    <meta charset="UTF-8">    <title>Document</title></head> <body>    <form method="GET" action="get_post.php">        <div>            <label>名字</label>            <input type="text" name="name">        </div>        <div>            <label>邮箱</label>            <input type="text" name="email">        </div>        <input type="sumit" value="确认">    </form>     <ul>        <li><a href="get_post.php?name=jimson">jimson</a></li>        <li><a href="get_post.php?name=tim">tim</a></li>    </ul>     <h1>        <?php echo "从前台获取再返回的名字是:{$name}" ?>    </h1></body> </html>
```

# 过滤器函数

php中有很多以filter开头的方法用于验证数据，下面对几个常用的进行说明。

**filter\_input；**

**filter\_has\_var；**

**filter\_var。**

```php
<?php# 检查post过来的数据// if(filter_has_val(INPUT_POST,'data')) {//     echo 'has found';// } else {//     echo 'no data';// } # 验证内容是否是邮箱// if(isset($_POST['data'])) {//     if(filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)) {//         echo '邮箱合法';//     } else {//         echo '邮箱不合法';//     }// } # 干掉不合法字符if(isset($_POST['data'])) {    $email = $_POST['data'];    $email = filter_var($email,FILTER_SANITIZE_EMAIL);    if(filter_var($email,FILTER_VALIDATE_EMAIL)) {        echo '邮箱合法';    } else {        echo '邮箱不合法';    }}?>
```

**说明：**注意结合php内置的常量一起进行数据验证。常用的内置常量还有很多，根据功能不同划分：

**验证**

FILTER\_VALIDATE\_EMAIL

FILTER\_VALIDATE\_URL

FILTER\_VALIDATE\_FLOAT

FILTER\_VALIDATE\_INT

FILTER\_VALIDATE\_IP

**去除**

FILTER\_SANITIZE\_EMAIL

FILTER\_SANITIZE\_ENCODE

FILTER\_SANITIZE\_STRING

FILTER\_SANITIZE\_URL

FILTER\_SANITIZE\_NUMBER\_FLOAT

举例说明：

```php
$var = 11; if(filter_var($var,FILTER_VALIDATE_INT) {    echo 'yes';} else {    echo 'no';}
```

# session和cookie

**session存储是指在服务器环境中的存储。**

**步骤：**

**1）使用session存储前**必须开启：session\_start()；

**2）设置的时候**可以取任意名字：$\_SESSION\['name'\] = value;

**3）使用：**$getValue = $\_SESSION\['name'\]；

**4）干掉session：**unset($\_SESSION\['name'\])；

**5）清除所有session：**session\_destroy()。

**注：**页面跳转方法：header("Location:page.php");

**cookie是存储在浏览器中的。**

**步骤：**

**1）设置cookie：**setcookie("cookiename",$params,time() +3600)；

参数一是cookie名，参数二是要保存为cookie的变量对象，参数三是过期时间。

**2）取cookie：**通过全局变量$\_COOKIE\["cookiename"\]，来取设置存储的cookie；

**3）更改cookie**和设置一样，通过setcookie来更改：setcookie("cookiename","newvalue",time() + (86400 \* 30))；

**4）删除cookie**也是使用setcookie来进行操作，只要将过期时间和设置cookie时对应上即可：setcookie("cookiename",$params,time() - 3600)；

**5）判断有几个cookie：**count($\_COOKIE)。

# 面向对象部分

**基本概念**

**1）类：**一类事物的统称。和其他面向对象编程语言类似，php通过class关键字声明类，其中一个类包含属性和方法两部分；

**2）对象：**某类事物的实例，比如人类指类，那单个人就是对象。

创建类和实例化对象举例说明：

```php
class Person {    # 属性    private $name = "cercy";    public $sex = "girl";    protected $height = 1.88;     # 方法    public function setName($name){        $this->name = $name;    }     public function getName(){        return $this->name;    }} # 实例化一个对象$myObject = new Person();echo $myObject->name; echo $myObject->getName();
```

**注：**上面的private、public和protected值修饰符，private修饰的属性在类外部不能访问，所以$myobject->name会报错。

**三个修饰符的访问场景说明：**

public：类内部可以访问，外部可以访问，子类可以访问；

private：类内部可以访问；

protected：类内部可以访问，子类可以访问。

**3）构造函数：**类中存在默认的构造函数，也可以指定构造函数，用于在实例化对象时指定属性而不是使用默认的属性，构造函数自动执行，无需手动调用。

```php
class Person {    private $name = "jimson";    public $sex = "boy";     public function getName(){        return $this->$name;    }     public function __construct($name,$sex){        $this->$name = $name;        $this->$sex = $sex;    }} $newObj = new Person("Tim","girl");
```

**注意：**构造函数的的名字是两个下划线。

**4）析构函数：**也是自动执行的函数，用于实例化对象之后将类销毁。

```php
class Person {    # ……    public function __destruct(){        echo __CLASS__."被销毁了";    }} $newObj = new Person("Tim","girl");
```

**5）继承：**可以通过关键字extends来定义类，被继承的类叫父类，以此继承父类的非private属性和方法。

```php
class Person {    private $name = "jimson";    public $sex = "boy";     public function getName(){        return $this->$name;    }     public function __construct($name,$sex){        $this->$name = $name;        $this->$sex = $sex;    }} class Teacher extends Person{    public $salary = "3000";     public function teachStudent(){        echo "传授学生知识";    }} $teacher = new Teacher("james","boy");# 调用父类的方法$teacher->getName();# 调用自己的方法$teacher->teachStudent();
```

子类也可以用自己的构造函数，同时调用父类的构造函数。

```php
class Person {    private $name = "jimson";    public $sex = "boy";     public function getName(){        return $name;    }     public function __construct($name,$sex){        $this->$name = $name;        $this->$sex = $sex;    }} class Teacher extends Person{    public $salary = "3000";     public function getSalary(){        return $this->$salary;    }     public function __construct($name,$sex,$salary){        # 调用父类的构造函数        parent::__construct($name,$sex);        $this->$salary = $salary;    }} $teacher = new Teacher("james","boy","10000");echo $teacher->getName();  //jamesecho $teacher->getSalary();  //10000
```

# 数据库操作

SQL是用于访问和操作数据库的一门计算机语言。这里我们简单入门一下SQL语法，后面使用它进行数据库的增删改查操作。

**基本的操作语句**

规范上建议使用大写字母来写数据库操作语句。

**1）创建数据库**

```sql
CREATE DATABASE person;
```

**2）删除数据库**

```sql
DROP DATABASE person;
```

**3）创建一个数据表（操作数据都是在操作数据表）**

```sql
CREATE TABLE teacher(    id INT NOT NULL AUTO_INCREMENT,    firstName VARCHAR(255),    lastName VARCHAR(255),    email VARCHAR(255),    city VARCHAR(255),    PRIMARY KEY(id));
```

**4）往数据表插入一条数据**

```sql
INSERT INTO teacher (firstName,lastName,email,city) VALUES('jimson','zhu','18198936160@163.com','guangdongguangzhou');
```

**5）更新一条数据表数据**

```sql
UPDATE teacher SET email = '870255589@qq.com',firstName = 'Tim' WHERE id = 1;
```

**6）删除数据表数据**

```sql
DELETE FROM teacher;  //删除表里所有数据 DELETE FROM teacher WHERE id = 1; DELETE FROM teacher WHERE id = 1 AND firstName = 'jimson';
```

**7）查询数据**

```sql
SELECT * FROM teacher;  //整表查询 SELECT * FROM teacher WHERE id = 1; SELECT firstName,email FROM teacher WHERE id = 1; SELECT firstName,email FROM teacher ORDER BY id;  //根据id排一下序 SELECT firstName,email FROM teacher ORDER BY id DESC;  //降序排序 SELECT firstName,email FROM teacher ORDER BY id ASC;  //升序排序
```

**说明：**上面这些操作可以在可视化界面进行，当你的xampp开启之后，并在地址栏输入“localhost/phpmyadmin”就可以打开可视化数据库操作界面。这里说一下后面有一些操作要使用到排序规则，一般使用utf8\_general\_ci。 

![](https://img-blog.csdnimg.cn/20190901225256648.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L2ppbXNvbl96aHU=,size_16,color_FFFFFF,t_70)

**php代码进行数据库操作**

**1）连接数据库**

```php
$mysqli = mysqli("localhost","root","password",person);
```

**说明：**参数一指主机名（地址），参数二指用户名，参数三指密码，参数四指数据库名（注意不是数据表）。这些数据都可以在可视化界面里看到，前三个参数信息可以在数据库mysql里的user数据表里查看。

**2）判断连接是否成功**

```php
// 判断错误码，只要不为0即为连接失败if($mysqli->connect_errno){    die($mysqli->connect_error);  //断开连接并打印错误信息);
```

**3）开始操作数据库**

```php
$result = $mysqli->query("INSERT INTO teacher (firstName,lastName,email,city) VALUES('jimson','zhu','18198936160@163.com','guangdongguangzhou')");
```

**4）判断操作是否成功**

```php
if($result){    echo "插入成功";}else{    echo "插入失败";}
```

**5）关闭数据库连接**

```php
$mysqli->close();
```

**说明：**基本的php操作数据库流程就如上面所示。当然，上面第三步操作数据库时如果插入的数据是中文则会有错误，因为没有指定编码格式，所以插入数据库中的数据会是乱码形式。所以要在操作前指定编码格式：

```php
$mysqli->query("set names utf8"); $result = $mysqli->query("INSERT INTO teacher (firstName,lastName,email,city) VALUES('中文测试','zhu','18198936160@163.com','guangdongguangzhou')");
```

**6）完整的代码封装**

**数据插入：**

```php
function insertData($sql) {    $mysqli = mysqli("localhost","root","password",person);     if($mysqli->connect_errno){        die($mysqli->connect_error);    );     $mysqli->query("set names utf8");     $result = $mysqli->query($sql);     if($result){        echo "插入成功";    }else{        echo "插入失败";    }     $mysqli->close();} $sql = "INSERT INTO teacher (firstName,lastName,email,city) VALUES('中文测试','zhu','18198936160@163.com','guangdongguangzhou')"; insertData($sql);
```

**数据更新：**

```php
function updateData($sql) {    $mysqli = mysqli("localhost","root","password",person);     if($mysqli->connect_errno){        die($mysqli->connect_error);    );     $mysqli->query("set names utf8");     $result = $mysqli->query($sql);     if($result){        echo "更新成功";    }else{        echo "更新失败";    }     $mysqli->close();} $sql = "UPDATE teacher SET `email` = '870255589@qq.com' WHERE id = 1"; updateData($sql);
```

**数据删除：**

```php
function deleteData($sql) {    $mysqli = mysqli("localhost","root","password",person);     if($mysqli->connect_errno){        die($mysqli->connect_error);    );     $mysqli->query("set names utf8");     $result = $mysqli->query($sql);     if($result){        echo "删除成功";    }else{        echo "删除失败";    }     $mysqli->close();} $sql = "DELETE FROM teacher WHERE id = 1"; deleteData($sql);
```

**说明：**上面所示代码冗余过多，因为只是sql语句不同而已，依然可以抽离成一个方法。

**7）数据查询**

数据查询操作比较频繁，代码的形式和上面增删改有所不同，我们还要对数据库操作返回的数据进行处理：

```php
function fetchData($sql) {    $mysqli = mysqli("localhost","root","password",person);     if($mysqli->connect_errno){        die($mysqli->connect_error);    );     $mysqli->query("set names utf8");     $result = $mysqli->query($sql);     // 判断查询结果是否为空    if($result->num_rows){        // 处理查询结果        // 有以下几种处理方式        // 方式一：fetch_row()  返回的是一个数组        while($row = $result->fetch_row()){            print_r($row);        }         // 方式二：fetch_array()        while($row = $result->fetch_array(MYSQLI_ASSOC)){  //以下标数组形式查询            print_r($row);        }         // 方式三：fetch_all()        $row = $result->fetch_all(MYSQLI_ASSOC);        echo json_encode($row);  // 返回json格式数据，更有利于前端处理    }else{        echo "查询失败";    }     $mysqli->close();} $sql = "SELECT * FROM teacher"; fetchData($sql);
```

以上就是我入门php的基本学习内容了，如有谬误欢迎指正。

本文转自 <https://blog.csdn.net/jimson_zhu/article/details/99244908>，如有侵权，请联系删除。