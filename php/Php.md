[toc]

# 基本网络知识

## 服务器

能够提供服务的机器它取决于机器上所安装的软件(服务软件)，那个人电脑呢？

服务器应具备承担服务并且保障服务的能力。

Web 服务器:提供 web 服务(网站访问)，就需要安装web 服务软件，Apache，iis等

## 网络的基本概念

- 客户端:应用 **C/S（客户端/服务器） B/S（浏览器/服务器）**

  > 现在主流bs，因为不用安装客户端

- 服务器：为客户端提供服务、数据、资源的机器

- 请求：客户端向服务器索取数据

- 响应：服务器对客户端请求作出反应，一般是返回给客户端数据

## IP地址

> IP地址是IP协议提供的一种统一的地址格式，它为互联网上的每一个网络和每一台主机分配一个逻辑地址，以此来屏蔽物理地址（每个机器都有一个编码，如MAC上就有一个叫MAC地址的东西）的差异。**是32位二进制数据，通常以十进制表示，并以“.”分隔**。**IP地址是一种逻辑地地址，用来标识网络中一个个主机，在本地局域网上是惟一的**。

## IP

> 国际网络协议，是TCP/IP体系的网络层协议。每个连接到Internet上的主机都会分配一个IP地址，是用来唯一表示互联网上计算机的逻辑地址，机器之间的访问就是通过IP地址来访问的。**每个上网设备都有独一无二的ip地址，本主机的ip都是127.0.0.1，也就是localhost**

## 主机名

> www.facebook.com
> www.google.com
>
> **主机名由称为 DNS 服务器或域名服务器的服务器映射到 IP 地址。**

## 域名

> 域名(Domain Name)：是一串用点分隔的名字组成的Internet上某一台计算机或计算机的名称，用于在数据传输时对计算机的定位标识（有时指地理位置），域名的由来是因IP地址不方便记忆，并且不能显示地址组织的名称和性质等（这个下文会进行说明），人们就设计出了域名，并通过域名服务系统协议来将域名和IP地址相互映射，更加方便的访问互联网。
>
> **例如 www.baidu.com。特殊域名:localhost**

## DNS服务器

> 域名服务器(Domain Name Server)。在Internet上域名与IP地址之间是一一对应的，域名虽然便于人们记忆，但机器之间只能互相认识IP地址，它们之间的转换工作称为域名解析，域名解析需要由专门的域名解析服务器来完成，**DNS就是进行域名解析的服务器 ，即将域名转换成为IP去进行访问。**

## 端口号

> 这里可以理解为设备与外界交流的出口。端口分为虚拟端口和物理端口，其中虚拟端口指计算机内部或交换机路由器内的端口，不可见；计算机中的80端口，21端口，23端口、RJ45端口等，物理端口称为接口，这些端口都是操作输入可见的，所以为可见端口。
> 端口都是通过端口号来标记的，端口号只有整数，范围是从**0到65535**

## URL

>  Uniform Resource Locator，每个网页都具有唯一的名称标识，URL就是网页地址，俗称“网址”；每个有效的 URL 都指向一个唯一的资源。
> http://mail.163.com/index.html就是URL

- 格式为：

**protocol://host[:port]/document?name=value&name=value...** 

**协议://       主机[:端口]/ 文档路径?           参数=值&参数=值…**

- 例如: 

https://www.szpu.edu.cn/xxgk/xxjj.htm

http://localhost:8080/university/q4.phtml?DeptId=2 ftp://ftp.cse.unsw.edu.au/home/jas/public_ftp/papers/bncod98.ps.gz 

## apache

> Apache HTTP Server（简称Apache）是Apache软件基金会的一个开放源码的网页服务器，可以在大多数计算机操作系统中运行，由于其多平台和安全性被广泛使用，是最流行的Web服务器端软件之一。它快速、可靠并且可通过简单的API扩展，将Perl/Python等解释器编译到服务器中。
>
> Apache是世界使用排名第一的Web服务器软件。它可以运行在几乎所有广泛Apache Server配置界面使用的计算机平台上。由于其跨平台和安全性被广泛使用，是最流行的**Web服务器端软件**。
>
> 还有微软的iis（收费）

## 子网掩码

> 要想理解什么是子网掩码，就不能不了解IP地址的构成。互联网是由许多小型网络构成的，每个网络上都有许多主机，这样便构成了一个有层次的结构。IP地址在设计时就考虑到地址分配的层次特点，将每个IP地址都分割成网络号和主机号两部分，以便于IP地址的寻址操作。
> IP地址的网络号和主机号各是多少位呢？如果不指定，就不知道哪些位是网络号、哪些是主机号，这就需要通过子网掩码来实现。什么是子网掩码子网掩码不能单独存在，它必须结合IP地址一起使用。子网掩码只有一个作用，就是将某个IP地址划分成网络地址和主机地址两部分子网掩码的设定必须遵循一定的规则。与IP地址相同，子网掩码的长度也是32位，左边是网络位，用二进制数字“1”表示；右边是主机位，用二进制数字“0”表示。假设IP地址为“192.168.1.1”子网掩码为“255.255.255.0”。其中，“1”有24个，代表与此相对应的IP地址左边24位是网络号；“0”有8个，代表与此相对应的IP地址右边8位是主机号。这样，子网掩码就确定了一个IP地址的32位二进制数字中哪些是网络号、哪些是主机号。这对于采用TCP/IP协议的网络来说非常重要，只有通过子网掩码，才能表明一台主机所在的子网与其他子网的关系，使网络正常工作。
>
> 常用的子网掩码有数百种，这里只介绍最常用的两种子网掩码。

- 子网掩码是“255.255.255.0”的网络：
  最后面一个数字可以在0~255范围内任意变化，因此可以提供256个IP地址。但是实际可用的IP地址数量是256-2，即254个，因为主机号不能全是“0”或全是“1”。

  

- 子网掩码是“255.255.0.0”的网络：
  后面两个数字可以在0~255范围内任意变化，可以提供255²个IP地址。但是实际可用的IP地址数量是255²-2，即65023个。

IP地址的子网掩码设置不是任意的。如果将子网掩码设置过大，也就是说子网范围扩大，那么，根据子网寻径规则，很可能发往和本地主机不在同一子网内的目标主机的数据，会因为错误的判断而认为目标主机是在同一子网内，那么，数据包将在本子网内循环，直到超时并抛弃，使数据不能正确到达目标主机，导致网络传输错误；如果将子网掩码设置得过小，那么就会将本来属于同一子网内的机器之间的通信当做是跨子网传输，数据包都交给缺省网关处理，这样势必增加缺省网关(文章下方有解释)的负担，造成网络效率下降。因此，子网掩码应该根据网络的规模进行设置。如果一个网络的规模不超过254台电脑，采用“255.255.255.0”作为子网掩码就可以了，现在大多数局域网都不会超过这个数字，因此“255.255.255.0”是最常用的IP地址子网掩码；假如在一所大学具有1500多台电脑，这种规模的局域网可以使用“255.255.0.0”。

## 网关

> 网关实质上是一个网络通向其他网络的IP地址。比如有网络A和网络B，**网络A**的IP地址范围为“192.168.1.1~192.168.1.254”，子网掩码为255.255.255.0；**网络B**的IP地址范围为“192.168.2.1~192.168.2.254”，子网掩码为255.255.255.0。在没有路由器的情况下，两个网络之间是不能进行TCP/IP通信的，即使是两个网络连接在同一台交换机（或集线器）上，TCP/IP协议也会根据子网掩码（255.255.255.0）判定两个网络中的主机处在不同的网络里。而要实现这两个网络之间的通信，则必须通过网关。如果网络A中的主机发现数据包的目标主机不在本地网络中，就把数据包转发给它自己的网关，再由网关转发给网络B的网关，网络B的网关再转发给网络B的某个主机。网络B向网络A转发数据包的过程也是如此 所以说，只有设置好网关的IP地址，TCP/IP协议才能实现不同网络之间的相互通信。那么这个IP地址是哪台机器的IP地址呢？网关的IP地址是具有路由功能的设备的IP地址，具有路由功能的设备有路由器、启用了路由协议的服务器（实质上相当于一台路由器）、代理服务器（也相当于一台路由器）。

## 路由器（Windows下叫默认网关，网关就是路由，路由就是网关不要蒙）

> 如果搞清了什么是网关，默认网关也就好理解了。就好像一个房间可以有多扇门一样，一台主机可以有多个网关。默认网关的意思是一台主机如果找不到可用的网关，就把数据包发给默认指定的网关，由这个网关来处理数据包。现在主机使用的网关，一般指的是默认网关。
> 下方是百度百科给出的解释



> 如何设置默认网关　一台电脑的默认网关是不可以随随便便指定的，必须正确地指定，否则一台电脑就会将数据包发给不是网关的电脑，从而无法与其他网络的电脑通信。默认网关的设定有手动设置和自动设置两种方式。

- 手动设置：手动设置适用于电脑数量比较少、TCP/IP参数基本不变的情况，比如只有几台到十几台电脑。因为这种方法需要在联入网络的每台电脑上设置“默认网关”，非常费劲，一旦因为迁移等原因导致必须修改默认网关的IP地址，就会给网管带来很大的麻烦，所以不推荐使用。需要特别注意的是：默认网关必须是电脑自己所在的网段中的IP地址，而不能填写其他网段中的IP地址。
- 自动设置：自动设置就是利用DHCP服务器来自动给网络中的电脑分配IP地址、子网掩码和默认网关。这样做的好处是一旦网络的默认网关发生了变化时，只要更改了DHCP服务器中默认网关的设置，那么网络中所有的电脑均获得了新的默认网关的IP地址。这种方法适用于网络规模较大、TCP/IP参数有可能变动的网络。另外一种自动获得网关的办法是通过安装代理服务器软件（如MS Proxy）的客户端程序来自动获得，其原理和方法和DHCP有相似之处。由于篇幅所限，就不再详述了。

## DHCP服务器

> DHCP指的是由服务器控制一段IP地址范围，客户机登录服务器时就可以自动获得服务器分配的IP地址和子网掩码。提升地址的使用率。

## MAC地址

> MAC地址就如同我们身份证上的身份证号码，具有全球唯一性。(知道这个就行了，不用往下看了)
> MAC（Media Access Control，介质访问控制）地址

- 前24位叫做组织唯一标志符（Organizationally Unique Identifier，即OUI），是由IEEE的注册管理机构给不同厂家分配的代码，区分了不同的厂家。
- 后24位是由厂家自己分配的，称为扩展标识符。同一个厂家生产的网卡中MAC地址后24位是不同的。
  网卡的物理地址通常是由网卡生产厂家烧入网卡的EPROM（一种闪存芯片，通常可以通过程序擦写），它存储的是传输数据时真正赖以标识发出数据的电脑和接收数据的主机的地址。

也就是说，在网络底层的物理传输过程中，是通过物理地址来识别主机的，它一定是全球唯一的。比如，著名的以太网卡，其物理地址是48bit（比特位）的整数，如：44-45-53-54-00-00,以机器可读的方式存入主机接口中。以太网地址管理机构(除了管这个外还管别的)（IEEE）（IEEE：电气和电子工程师协会）将以太网地址，也就是48比特的不同组合，分为若干独立的连续地址组，生产以太网网卡的厂家就购买其中一组，具体生产时，逐个将唯一地址赋予以太网卡。
在一个稳定的网络中，IP地址和MAC地址是成对出现的。如果一台计算机要和网络中另一外计算机通信，那么要配置这两台计算机的IP地址，MAC地址是网卡出厂时设定的，这样配置的IP地址就和MAC地址形成了一种对应关系。在数据通信时，IP地址负责表示计算机的网络层地址，网络层设备（如路由器）根据IP地址来进行操作；MAC地址负责表示计算机的数据链路层地址，数据链路层设备（如交换机）根据MAC地址来进行操作。IP和MAC地址这种映射关系由ARP（Address Resolution Protocol，地址解析协议）协议完成。

## 缺省网关

> 缺省网关（Default Gateway）是计算机网络中一个如何将数据包转发到其他网络中的节点。在一个典型的TCP / IP网络，节点（如服务器、工作站和网络设备）都有一个定义的默认路由设置（指向默认网关）。可以在没有特定路由的情况下，明确出发送数据包的下一跳IP地址。
> 下方是百度百科给出的解释：



> 可以看出缺省网关就是默认网关，那么有人会说既然有一样为什么又凭空多出来一个缺省网关，我的理解是这样的，应该说默认网关是缺省网关的一个子集。缺省网关有一个定义的默认路由设置（指向默认网关），缺省网关就相当于一个代理服务器暂时管理发送的数据包，当发送到目标主机时先由目标主机的缺省网关接收再找到对应的默认网关，就相当于缺省网关是父类，默认网关是子类~~

# php环境

用的是appserv

- mysql目录下：

  data目录下是数据库

- apache目录下：

  conf/httpd（用文本打开）

  listen是端口号

  **DocumentRoot是服务器位置**

- www目录下：

  就是服务器位置，index.php放这里

  > phpinfo();
  >
  > 显示php的信息

## 使用

> PHP 文件可包含文本、HTML、JavaScript代码和 PHP 代码
>
> **可以放在html的任意位置**
>
> **以<?php ?>包含**
>
> **每句话带分号;**
>
> **php里使用h5的标签一般是用echo**

## 注释

> 和c和js一样，//

## 中文乱码问题

```php+HTML
//在网页html的头部添加：
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

//在PHP代码中添加
header('content-type:text/html;charset=utf-8');
//告诉浏览器以utf-8的编码格式来解析文档
```



# 基础

## echo与print

`echo`、`print`：输出信息（**echo 输出的速度比 print 快， echo 没有返回值，print有返回值1**。）

- echo - 可以输出一个或多个字符串，**用逗号分隔或者字符串.连接**
- print - **只允许输出一个字符串**，返回值总为 1

```php
<?php
echo "hello " , "world";
echo "<br>";
print "hi world";
?>
```

`$`：创建变量（变量名对大小写敏感、**变量名必须以字母或下划线开头、变量名只能包含字母数字以及下划线**）

```php
<?php
$a = 1;
$B = 2;
$c = $a + $B;
echo $c;
?>
```



## 作用域

**变量作用域**：所有在函数外部定义的变量，拥有全局作用域。在函数内部想要访问外部的变量需要使用**`global`关键字**。

> **向global、if、else这些定义好的关键字都是可以大写或小写的，并不区分**

```php
<?php
$x = 5;
function func(){
  global $x;
  echo $x;
}
func();
?>
```

**static作用域**：当一个函数完成时，它的所有变量通常都会被删除。如果需要保留，则需要使用`static`关键字

```php
<?php
  function myTest()
{
    static $x = 1;  //只执行一次
    echo $x;
    $x++;
}

myTest();
myTest();
?>
```



## EOF

PHP EOF(heredoc)是一种在命令行shell（如sh、csh、ksh、bash、PowerShell和zsh）和程序语言（像Perl、PHP、Python和Ruby）里**定义一个字串的方法，内容按照原形式输出，类似于h5的pre标签**。

- **必须是<<<开头**
- 必须后接分号，否则编译通不过。
- **EOF** 可以用任意其它字符（随便取名字）代替，只需保证结束标识与开始标识一致。
- **结束标识必须顶格独自占一行(即必须从行首开始，前后不能衔接任何空白和字符)。**
- 开始标识可以不带引号或带单双引号，不带引号与带双引号效果一致，解释内嵌的变量和转义符号，带单引号则不解释内嵌的变量和转义符号。

```php
<?php
$name="qty";
$a= <<<EOF
    "abc"$name
    "123"
EOF;

$c= <<<name
    "abc"
name;
?>
```



## var_dump()

`var_dump()` 函数打印**变量**的数据类型和值。

```php
<?php
$b = 3.1;
$c = true;
var_dump($b, $c);
?>
```



## 数据类型

> **强制转换类型：(类型)$变量名**

### 字符串（String）

**位于单引号或双引号里面的文本**

> **一个中文字符串占3个字符，英文占1个**
>
> **单引号不解析变量，双引号会解析变量，因此单引号效率高一些**。
>
> **单引号使用\转义字符只能转义\’和\\\ **

- **字符串的连接操作：.**

  echo "aa"."bb;

### 整型（Integer）

整数是一个没有小数的数字。

整数规则:

- 整数必须至少有一个数字 (0-9)
- 整数不能包含逗号或空格
- 整数是没有小数点的
- 整数可以是正数或负数
- 整型可以用三种格式来指定：十进制， 十六进制（ 以 0x 为前缀）或八进制（前缀为 0）。

```php
<?php 
$x = 5985;
var_dump($x);
echo "<br>"; 
$x = -345; // 负数 
var_dump($x);
echo "<br>"; 
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
?>
```

### 浮点型（Float）

浮点数是带小数部分的数字，或是指数形式。

```php
<?php 
$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);
?>
```

> 注意：浮点型有误差，不要进行大小比较

### 布尔型（Boolean）

布尔值只有两个值：`ture` 、`false`

### 数组（Array）

数组可以在一个变量中存储多个值。

```php
<?php
  $arr = array("one","two","three");
?>
```

- **打印数组的方式**
  1. **echo var_dump()**
  2. **print_r()**
- 遍历数组的方式
  1. foreach($array_name as key=>value){}
  2. foreach($array_name as value){}
  3. 

### 对象（Object）

**先使用`class`关键字声明类对象再通过`new`语句实例化**

```php
<?php
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo;
$bar->do_foo();
?>
```



### 空值（NULL）

`NULL` 值表示变量没有值。`NULL` 是数据类型为 `NULL` 的值，`NULL` 值指明一个变量是否为空值。 同样可用于数据空值和`NULL`值的区别，**可以通过设置变量值为 `NULL` 来清空变量数据**。



### 常量

常量是一个简单值的标识符。该值在脚本中不能改变，一个常量由英文字母、下划线、和数字组成,但数字不能作为首字母出现。 (**常量名不需要加 $ 修饰符**)， **常量在整个脚本中都可以使用**。

- 定义常量：
  - define(name,value)
  - const name=value

```php
<?php
// define定义常量
define("FOO","something");
echo FOO
// 下面的定义是合法的，但应该避免这样做：(自定义常量不要以__开头)
// 也许将来有一天PHP会定义一个__FOO__的魔术常量
// 这样就会与你的代码相冲突
define("__FOO__", "something");

//const定义常量
const Cons = 3.14;
echo Cons;
?>
```

## 运算符

### 算术运算符

| 运算符 | 名称             | 描述            | 实例                | 结果  |
| ------ | ---------------- | --------------- | ------------------- | ----- |
| x + y  | 加               | x 和 y 的和     | 2 + 2               | 4     |
| x - y  | 减               | x 和 y 的差     | 5 - 2               | 3     |
| x * y  | 乘               | x 和 y 的积     | 5 * 2               | 10    |
| x / y  | 除               | x 和 y 的商     | 15 / 5              | 3     |
| x % y  | 模（除法的余数） | x 除以 y 的余数 | 5 % 2 10 % 8 10 % 2 | 1 2 0 |
| - x    | 取反             | x 取反          | -2                  | -2    |
| a . b  | **并置**         | 连接两个字符串  | "Hi" . "Ha"         | HiHa  |



### 赋值运算符

| 运算符     | 等同于        | 描述                           |
| ---------- | ------------- | ------------------------------ |
| x = y      | x = y         | 左操作数被设置为右侧表达式的值 |
| x += y     | x = x + y     | 加                             |
| x -= y     | x = x - y     | 减                             |
| x *= y     | x = x * y     | 乘                             |
| x /= y     | x = x / y     | 除                             |
| x %= y     | x = x % y     | 模（除法的余数）               |
| **a .= b** | **a = a . b** | **连接两个字符串**             |



### 递增递减运算符

| 运算符 | 名称   | 描述                |
| ------ | ------ | ------------------- |
| ++ x   | 预递增 | x 加 1，然后返回 x  |
| x ++   | 后递增 | 返回 x，然后 x 加 1 |
| -- x   | 预递减 | x 减 1，然后返回 x  |
| x --   | 后递减 | 返回 x，然后 x 减 1 |



### 比较运算符

| 运算符      | 名称           | 描述                                                         | 实例                   |
| ----------- | -------------- | ------------------------------------------------------------ | ---------------------- |
| **x == y**  | **值等于**     | **如果 x 等于 y，则返回 true；如果类型不相同，则会把一个转成另一个的类型再判断值是否相同** | **5=="5" 返回 true**   |
| **x === y** | **绝对等于**   | **如果 x 等于 y，且它们类型相同，则返回 true**               | **5==="5" 返回 false** |
| x != y      | 不等于         | 如果 x 不等于 y的值，则返回 true                             | 5!=8 返回 true         |
| x <> y      | 不等于         | 如果 x 不等于 y的值，则返回 true                             | 5<>8 返回 true         |
| **x !== y** | **绝对不等于** | **如果 x 不等于 y，或它们类型不相同，则返回 true**           | **5!=="5" 返回 true**  |
| x > y       | 大于           | 如果 x 大于 y，则返回 true                                   | 5>8 返回 false         |
| x < y       | 小于           | 如果 x 小于 y，则返回 true                                   | 5<8 返回 true          |
| x >= y      | 大于等于       | 如果 x 大于或者等于 y，则返回 true                           | 5>=8 返回 false        |
| x <= y      | 小于等于       | 如果 x 小于或者等于 y，则返回 true                           | 5<=8 返回 true         |



### 逻辑运算符

| 运算符      | 名称     | 描述                                             | 实例                                  |
| ----------- | -------- | ------------------------------------------------ | ------------------------------------- |
| x and y     | 与       | 如果 x 和 y 都为 true，则返回 true               | x=6 y=3  (x < 10 and y > 1) 返回 true |
| x or y      | 或       | 如果 x 和 y 至少有一个为 true，则返回 true       | x=6 y=3  (x==6 or y==5) 返回 true     |
| x **xor** y | **异或** | **如果 x 和 y 有且仅有一个为 true，则返回 true** | x=6 y=3  (x==6 xor y==3) 返回 false   |
| x && y      | 与       | 如果 x 和 y 都为 true，则返回 true               | x=6 y=3 (x < 10 && y > 1) 返回 true   |
| x \|\| y    | 或       | 如果 x 和 y 至少有一个为 true，则返回 true       | x=6 y=3 (x==5 \|\| y==5) 返回 false   |
| ! x         | 非       | 如果 x 不为 true，则返回 true                    | x=6 y=3 !(x==y) 返回 true             |



### 数组运算符

| 运算符      | 名称       | 描述                                                         |
| ----------- | ---------- | ------------------------------------------------------------ |
| x + y       | 集合       | x 和 y 的集合                                                |
| **x == y**  | **相等**   | **如果 x 和 y 具有相同的键/值对，则返回 true**               |
| **x === y** | **恒等**   | **如果 x 和 y 具有相同的键/值对，且顺序相同类型相同，则返回 true** |
| **x != y**  | **不相等** | **如果 x 不等于 y，则返回 true**                             |
| **x <> y**  | **不相等** | **如果 x 不等于 y，则返回 true**                             |
| **x !== y** | **不恒等** | **如果 x 不等于 y，则返回 true**                             |



### 组合比较符（PHP7+）

PHP7+ 支持组合比较符（combined comparison operator）也称之为太空船操作符，符号为 `<=>`。组合比较运算符可以轻松实现两个变量的比较，当然不仅限于数值类数据的比较。

语法格式如下：

```php
$c = $a <=> $b;
```

解析如下：

- 如果 **$a > $b**, 则 **$c** 的值为 **1**。

- 如果 **$a == $b**, 则 **$c** 的值为 **0**。

- 如果 **$a < $b**, 则 **$c** 的值为 **-1**。

  > **类似于c的strcmp()**

## 引用赋值

**在变量前面加上地址符号&**

即&$name

```php
<?php
    $s1=1;
	$s2=&$s1;
	$s2=2;
	echo $s1,$s2;
?>    
```

> 值传递：将变量保存的值赋值一份,然后将新的值给另外一个变量保存(两个变量没有关系，地址不同，虽然值相同，但是指向的地址不同)。
>
> 引用传递：将变量保存的值所在的内存地址，传递给另外一个变量:两个变量指向同一块内存空间(两个变量是同一个值，地址指向同一个值上，所以一个变另一个也变)

# 进阶

## 数组

数组能够在单个变量中存储多个值。

在 PHP 中，有三种类型的数组：

- **数值（索引）数组** - 带有数字 ID 键（**索引）的数组**
- **关联数组** - 带有指定的**键的数组，每个键关联一个值**
- **多维数组** - 包含一个或多个数组的数组

> 分别对应的是**索引数组、字典、多维数组**

### 数值（索引）数组

使用**`array()`创建数值数据**：

```php
<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
```

> 注：**数值数组可以存在存在下标**0，1，2，7，11分布**不按顺序的形式，此时不能使用for循环来遍历数组**，因为下标没规律，**只能使用foreach**

### 关联数组

创建关联数组

```php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
```

> **注意这里不是像py一样用的：，而是=>**

获取关联数组里的值

```php
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
// 遍历获取
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
```



### 多维数组

一个数组的值是另一个数组，以此类推可以创建二维、三维...的数组。

```php
// 二维数组:
$cars = array
(
    array("Volvo",100,96),
    array("BMW",60,59),
    array("Toyota",110,100)
);
// 三维数组
$sites = array 
( 
    "runoob"=>array 
    ( 
        "菜鸟教程", 
        "http://www.runoob.com" 
    ), 
    "google"=>array 
    ( 
        "Google 搜索", 
        "http://www.google.com" 
    ), 
    "taobao"=>array 
    ( 
        "淘宝", 
        "http://www.taobao.com" 
    ) 
); 
```

### 数组输出

1. 用**var_dump和print_r**来打印数组；  

2. a) 获得数组的长度 - count() 函数  

   b)	**for循环输出**索引数组的所有值

   例如for($i=0;$i<count($cars);$i++)    echo $cars[$i]."\<br/>";

3. **foreach循环输出**关联数组的所有值,例如   	foreach($cars as $key=>$value)      	echo $key."--->".$value."\<br/>";

4. 二维数组的遍历：

   foreach($cars as $i)     {

   ​	foreach ($i as $j => $value) {      

   ​	  echo $j . "--->" . $value . "\<br/>";   

    }

### 数组追加

1. 直接追加：$car[3]=“TOYOTA”;

2. **array_push()：将数据追加到数组末尾**

   array_push($car,"data")

3. **array_unshift()：将数据追加到数组开头**

   arrary_unshift($car,"data");

### 数组删除

1. **array_shift()：删除第一个元素**

2. **array_pop（）：删除最后一个元素**

3. **unset()：删除指定的元素**

   unset($car[3]);

## 超级全局变量

PHP 超级全局变量列表:

- $GLOBALS
- $_SERVER
- $_REQUEST
- **$_POST**
- **$_GET**
- **$_FILES**
- $_ENV
- $_COOKIE
- $_SESSION



### $GLOBALS

`$GLOBALS` 是PHP的一个超级全局变量组，在一个PHP脚本的全部作用域中都可以访问。

**`$GLOBALS` 是一个包含了全部变量的全局组合数组。变量的名字就是数组的键。**

```php
<?php 
$x = 75; 
$y = 25;
 
function addition() 
{ 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
 
addition(); 
echo $z; 
?>
```



### $_SERVER

`$_SERVER` 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。

| 元素/代码                       | 描述                                                         |
| ------------------------------- | ------------------------------------------------------------ |
| $_SERVER['PHP_SELF']            | 当前执行脚本的文件名，与 document root 有关。例如，在地址为 http://example.com/test.php/foo.bar 的脚本中使用 $_SERVER['PHP_SELF'] 将得到 /test.php/foo.bar。__FILE__ 常量包含当前(例如包含)文件的完整路径和文件名。 从 PHP 4.3.0 版本开始，如果 PHP 以命令行模式运行，这个变量将包含脚本名。之前的版本该变量不可用。 |
| $_SERVER['GATEWAY_INTERFACE']   | 服务器使用的 CGI 规范的版本；例如，"CGI/1.1"。               |
| $_SERVER['SERVER_ADDR']         | 当前运行脚本所在的服务器的 IP 地址。                         |
| $_SERVER['SERVER_NAME']         | 当前运行脚本所在的服务器的主机名。如果脚本运行于虚拟主机中，该名称是由那个虚拟主机所设置的值决定。(如: www.runoob.com) |
| $_SERVER['SERVER_SOFTWARE']     | 服务器标识字符串，在响应请求时的头信息中给出。 (如：Apache/2.2.24) |
| $_SERVER['SERVER_PROTOCOL']     | 请求页面时通信协议的名称和版本。例如，"HTTP/1.0"。           |
| $_SERVER['REQUEST_METHOD']      | 访问页面使用的请求方法；例如，"GET", "HEAD"，"POST"，"PUT"。 |
| $_SERVER['REQUEST_TIME']        | 请求开始时的时间戳。从 PHP 5.1.0 起可用。 (如：1377687496)   |
| $_SERVER['QUERY_STRING']        | query string（查询字符串），如果有的话，通过它进行页面访问。 |
| $_SERVER['HTTP_ACCEPT']         | 当前请求头中 Accept: 项的内容，如果存在的话。                |
| $_SERVER['HTTP_ACCEPT_CHARSET'] | 当前请求头中 Accept-Charset: 项的内容，如果存在的话。例如："iso-8859-1,*,utf-8"。 |
| $_SERVER['HTTP_HOST']           | 当前请求头中 Host: 项的内容，如果存在的话。                  |
| $_SERVER['HTTP_REFERER']        | 引导用户代理到当前页的前一页的地址（如果存在）。由 user agent 设置决定。并不是所有的用户代理都会设置该项，有的还提供了修改 HTTP_REFERER 的功能。简言之，该值并不可信。) |
| $_SERVER['HTTPS']               | 如果脚本是通过 HTTPS 协议被访问，则被设为一个非空的值。      |
| $_SERVER['REMOTE_ADDR']         | 浏览当前页面的用户的 IP 地址。                               |
| $_SERVER['REMOTE_HOST']         | 浏览当前页面的用户的主机名。DNS 反向解析不依赖于用户的 REMOTE_ADDR。 |
| $_SERVER['REMOTE_PORT']         | 用户机器上连接到 Web 服务器所使用的端口号。                  |
| $_SERVER['SCRIPT_FILENAME']     | 当前执行脚本的绝对路径。                                     |
| $_SERVER['SERVER_ADMIN']        | 该值指明了 Apache 服务器配置文件中的 SERVER_ADMIN 参数。如果脚本运行在一个虚拟主机上，则该值是那个虚拟主机的值。(如：someone@runoob.com) |
| $_SERVER['SERVER_PORT']         | Web 服务器使用的端口。默认值为 "80"。如果使用 SSL 安全连接，则这个值为用户设置的 HTTP 端口。 |
| $_SERVER['SERVER_SIGNATURE']    | 包含了服务器版本和虚拟主机名的字符串。                       |
| $_SERVER['PATH_TRANSLATED']     | 当前脚本所在文件系统（非文档根目录）的基本路径。这是在服务器进行虚拟到真实路径的映像后的结果。 |
| $_SERVER['SCRIPT_NAME']         | 包含当前脚本的路径。这在页面需要指向自己时非常有用。__FILE__ 常量包含当前脚本(例如包含文件)的完整路径和文件名。 |
| $_SERVER['SCRIPT_URI']          | URI 用来指定要访问的页面。例如 "/index.html"。               |



### $_REQUEST

**`$_REQUEST` 用于收集HTML表单提交的数据。**

```php+HTML
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php 
$name = $_REQUEST['fname']; 
echo $name; 
?>

</body>
</html>
```



### $\_POST 与 \$\_GET

**`$_POST`用于收集通过post方式提交的表单数据，`$_GET`用于收集url中的数据。**

如果要传去php，则需要**每个表单input都要加上name及value的值，form的action属性是对应的接受的php文件**

- **name**：**通过\$_POST\['name'\]或\$_GET['name']进行访问value的值**
- **value：这里设的是默认值，如果没有更改的或默认就是这个值，是字符串，即使放数组也是以字符串的方式显示的。如果需要value放多个值，可以用，分割的字符串，而后用explode函数进行字符串分割成数组，再取多个值**

```php+HTML
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>
<a href="test_get.php?subject=PHP&web=runoob.com">Test $GET</a>

<?php 
// 通过post方式收集
$name = $_POST['fname']; 
echo $name; 
// 通过get方式收集
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>

</body>
</html>
```

- 仅能用$_GET的例子

  ```php+HTML
  <form method="GET" action="http://www.baidu.com/s">
      <input type="text" name="wd" />
      <input type="submit" value="提交"/>
      </form>
  <?php
  header('content-type:text/html;charset=utf-8');	
  ```

  

## 循环

### foreach循环

在php中，**foreach循环用于遍历数组。**

```php
<?php
$x=array("one","two","three");
foreach ($x as $key=>$value)
{
    echo $value . "<br>";
}
?>
```

### while 循环

```php
while (条件)
{
    要执行的代码;
}
```

### do...while 语句

首先执行一次代码块，然后在**指定的条件成立时重复这个循环**

```php
do
{
    要执行的代码;
}
while (条件);
```

### for 循环

```php
for (初始值; 条件; 增量)
{
    要执行的代码;
}


//以for循环创建表格
<table style="border:red 1px solid;">
    <tr style="background-color: cornflowerblue;"><td>距离</td><td>运费</td></tr>
    <?php
        $i=1;
        for($k=50;$k<=250;$k+=50){
            $j=$k/10;
            if($i%2==1)
                echo "<tr><td>$k</td><td>$j</td></tr>";
            else
                echo "<tr style='background-color: #00CC66'><td>$k</td><td>$j</td></tr>";
            $i++;
        }
    ?>
</table>
```

## 条件判断

### If...Else 语句

```php
<?php
if (条件)
{
	if条件成立时执行的代码;
}
else if (条件)
{
	elseif条件成立时执行的代码;
}
else
{
	条件不成立时执行的代码;
} 
?>
```

### Switch 语句

```php
<?php
switch (n)
{
case label1:
    如果 n=label1，此处代码将执行;
    break;
case label2:
    如果 n=label2，此处代码将执行;
    break;
default:
    如果 n 既不等于 label1 也不等于 label2，此处代码将执行;
}
?>
```

## 魔术变量

**`__LINE__`：返回文件中当前行号；**

**`__FILE__`：返回文件的完整路径和文件名；**

**`__DIR__`：返回文件所在目录；**

`__FUNCTION__`、`__METHOD__`：返回该函数被定义时的名称；

`__CLASS__`：返回该类被定义时的名字；

`__NAMESPACE__`：返回当前命名空间的名称。

## 函数

### 自定义函数

**function　函数名（形参1,形参2,……）｛**    

**函数体**  

**｝**

### 系统函数

**isset（）函数：检测变量是否已声明并且其值不为 `null`**

#### 数字函数

rand、floor、ceil、round

#### 日期和时间函数

```php
$x = date("Y-m-d  H:i:s");  
     //返回当前的系统日期
$t = time() + 10 * 24 * 3600;  //当前时间10天后
```

#### 字符串常用函数

> 注：php里的一般使用函数，而js里一般是以面向对象的方式调用的

| 函数名                                                       | 说明                                                         | 例子                                                         |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| strlen()                                                     |                                                              |                                                              |
| var_dump(count_chars($str,mode))                             | 返回字符串所有字符的信息  <br /><img src="assets/image-20240414195721169.png" alt="image-20240414195721169" style="zoom:25%;" /> | var_dump( count_chars( $str ,1))                             |
| str_word_count                                               | 统计单词个数，是单词不是字符                                 |                                                              |
| ltrim($str,trimstr)                                          |                                                              |                                                              |
| rtrim()                                                      |                                                              |                                                              |
| **trim()**                                                   |                                                              |                                                              |
| strtoupper()                                                 | 大写                                                         |                                                              |
| strtolower()                                                 | 小写                                                         |                                                              |
| ucfirst                                                      | 句子首字母大写                                               |                                                              |
| ucwords                                                      | 单词首字母大写                                               |                                                              |
| strtok($str,split_str)                                       | 字符串分割，但是一次只能取一个值                             | echo strtok($str , “,”)  <br />echo strtok(“,”)  <br />echo strtok(“,”)<br />或者用while循环 |
| **explode(split_str,$str)**                                  | **将字符串以第一个参数分割，返回数组**                       | explode(",",$str)                                            |
| **implode(split_str,$str)**                                  | 将数组以第一个参数连接成字符串                               | implode(",",$str)                                            |
| strstr($str,\$sub_str)                                       | 返回第一个参数中从第二个参数第一次出现到最后的部分           |                                                              |
| strpos($str,\$sub_str)                                       | 返回第一个参数中第二个参数第一次出现的位置，从0开始计数      |                                                              |
| substr($str,start,length)                                    | 返回第一个参数中从第二个参数开始，长度为第三个参数的字符串，从0开始计数 |                                                              |
| **str_pad($str,num,pad_str[,STR_PAD_LEFT])**                 | 三个参数是右填充，四个是左                                   |                                                              |
| str_repeat()                                                 | 字符串重复第二个参数次                                       |                                                              |
| strcmp                                                       | 字符串比较                                                   |                                                              |
| **nl2br($str)**                                              | 在字符串中的新行（\n）之前插入换行符，意思就是可以解析\n，否则平常都不会解析，直接输出\n的 |                                                              |
| **int preg_match(string \$pattern, string \$subject[,array $matches])** | **在字符串subject中匹配正则表达式pattern。函数返回匹配的次数。如果有参数matches，则每次匹配结果都存储到数组matches中。** |                                                              |
| int **preg_match_all**(string $pattern,                                          string \$subject[,array \$matches]) | preg_match匹配成功后就停止查找，而preg_match_**all会一直匹配到最后。** |                                                              |
| mixed **preg_replace**(mixed \$pattern, mixed \$replacement,   mixed $subject [,int $limit]) | 在字符串subject中匹配正则表达式pattern，并**将匹配项替换成字符串replacement**。如果有参数limit，则替换limit次。 |                                                              |
| array **preg_split**(string \$pattern, string $subject [,int $limit]) | **用正则表达式pattern来分割字符串subject**。如果有参数limit，则数组最多有limit个元素。 |                                                              |
|                                                              |                                                              |                                                              |

## 字符串使用正则

正则表达式由原子、有特殊功能的字符、模式修正符三部分组成

**通常需要将正则表达式放在定界符之间，如/a/。**

### 原子

- 普通字符：所有大小写字母、数字

- 特殊字符：所有标点符号，需要用转义符，如“\+”

- 格式控制符：\n、\t、\r等

- 自定义原子集合：[]中列出一组原子，表示仅选择其一匹配，例如：    [ajp]sp   匹配asp、jsp、psp    

  [^ajp]sp  匹配除了asp、jsp、psp之外的以sp结尾的字符串（此处的^出现在[]中）    

  [0-9]     匹配按ASCII顺序排列的原子，即0~9的任意一个

- 通用字符类型：    

    **\d=\=[0-9]**、\D=\=\[^0-9]     

   **\w\==[0-9a-zA-Z]**、\W==[A-Za-z0-9]     

   **\s 空白符，包括\n\r\t等、 \S 非空白符**

### 元字符

| **字符**      | **描述**                                                     |
| ------------- | ------------------------------------------------------------ |
| *****         | 匹配前面的子表达式**零次或多次**。例如，zo* 能匹配 "z" 以及 "zoo"。* 等价于{0,}。 |
| **+**         | 匹配前面的子表达式**一次或多次**。例如，'zo+' 能匹配 "zo" 以及 "zoo"，但不能匹配 "z"。+ 等价于 {1,}。 |
| **?**         | 匹配前面的子表达式**零次或一次**。例如，"do(es)?" 可以匹配 "do" 或 "does" 中的"do" 。? 等价于 {0,1}。 |
| **{n}**       | n 是一个非负整数。**匹配确定的 n 次**。例如，'o{2}' 不能匹配 "Bob" 中的 'o'，但是能匹配 "food" 中的两个 o。 |
| **{n,}**      | n 是一个非负整数。**至少匹配n 次**。例如，'o{2,}' 不能匹配 "Bob" 中的 'o'，但能匹配 "foooood" 中的所有 o。'o{1,}' 等价于 'o+'。'o{0,}' 则等价于 'o*'。 |
| {n,m}         | m 和 n 均为非负整数，**其中n <= m。最少匹配 n 次且最多匹配 m 次**。例如，"o{1,3}" 将匹配 "fooooood" 中的前三个 o。'o{0,1}' 等价于 'o?'。请注意在逗号和两个数之间不能有空格。 |
| **^**         | 匹配输入字符串的**开始**位置，除非在方括号表达式中使用，此时它表示不接受该字符集合。 |
| **$**         | 匹配输入字符串的**结尾**位置。                               |
| **( )**       | **标记一个子表达式的开始和结束位置**。子表达式可以获取供以后使用。 |
| **.**         | **匹配除换行符 \n之外的任何单字符。**                        |
| **[ ]**       | 匹配[ ]中的一个字符                                          |
| **[ ^** **]** | 不匹配[ ]中的任何一个字符                                    |
| **\**         | 转义字符，将下一个字符标记为普通字符                         |
| **\|**        | 指明两项之间的一个选择，即“或”                               |
| \b            | 匹配一个单词边界，即单词与空格间的位置。                     |
| \B            | 非单词边界匹配。                                             |

### 模式修正符

对整个正则表达式有效，所以要写在正则定界符的外部，如：  

  /\d+/i  --------------**i代表不区分大小写**

  $pattern ="/g.+?d/";----------------**在数量限定符（+ * {n,}后，加？，为非贪婪模式**

## 文件

### 文件导入

1. include
2. **include_once（推荐）**
3. require
4. require_once

> 导入文件后可以执行别的文件的函数，否则不能执行
>
> 如果多次导入同一个文件，则once不报错，没有once报错
>
> - **include和require区别：**
>
>   **include**出现错误，会产生一个警告后**继续执行后续的代码**；而**require会产生一个Fatal Error，终止程序**

### 文件操作

> **必须在form表单的属性里添加enctype="multipart/form-data";然后input的type用file**

| 函数名                                    | 说明                                                         |      |
| ----------------------------------------- | ------------------------------------------------------------ | ---- |
| file_exists                               | 必须先判断文件是否存在在进行打开                             |      |
| fopen()                                   |                                                              |      |
| **feof()**                                | 判断文件是否已到文件尾                                       |      |
| fclose                                    |                                                              |      |
| filesize()                                | 文件大小                                                     |      |
| string **fread(int handle, int length)**  | 读取要打开的文件。    第一个参数为待读取文件的句柄，第二个参数为待读取的最大字节数 |      |
| int **fwrite(int handle, string string)** | 第一个参数为要写入的文件句柄，第二个参数是被写的字符串。返回值为写入的字节数 |      |
| unlink(string filename)                   | 函数删除文件，成功则返回true，失败返回false。                |      |
| int **fseek(int handle, int offset)**     | 第一个参数为文件句柄，第二个参数为偏移量。0表示开头          |      |
| filetype()                                | 获取文件的类型，并将类型作为字符串返回                       |      |

```php
按行读取文本文件：
if(file_exists(”文件名”)) //file_exists函数判断文件是否存在
{ 
      $fp=fopen(”文件名”, ” r ”);
     //fopen的返回值包含一个文件句柄的整数，用来向执行文件操作的函数标识该文件。“r ”代表只读打开。还可以是r+、w、w+等
     While(! feof($fp))    //feof函数判断是否已经到了文件 尾
    {
          $x=fgets($fp);    //从文件中读取一行
           .......
     }
    fclose($fp);//关闭文件
```

### $_FILES数组

| **数组元素**                 | **含义**                                                     |
| ---------------------------- | ------------------------------------------------------------ |
| $_FILES[‘file’]**\[‘name’]** | **被上传的文件的名称，包含扩展名**                           |
| $_FILES[‘file’]**\[‘type’]** | 被上传的文件的**类型**，如果上传的是jpg文件，则其值为image/jpeg，还可以是image/gif、image/pjpeg |
| $_FILES[‘file’]**\[‘szie’]** | 被上传的文件的**大小**，以字节为单位                         |
| $_FILES[‘file’]\[‘tmp_name’] | **文件上传到服务器后被赋予的临时文件名**                     |
| $_FILES[‘file’]\[‘error’]    | 文件上传导致的错误代码                                       |

文件被上传结束后，默认地被存储在了临时目录中，这时必须将它从临时目录中删除或移动到其它地方，如果没有，则会被删除。也就是不管是否上传成功，脚本执行完后临时目录里的文件肯定会被删除。

> **移动上传文件的位置，需要先创建好目录**
>
> move_uploaded_file()函数    
>
> 该函数用于将上传的文件移动到新的位置，
>
> 例如： **move_uploaded_file ($_FILES [“file”]\[“tmp_name”],“uploadfile/”.\$_FILES[“file”]\[“name”]);**

## 命名空间

命名空间可以解决以下两类问题：

1. 用户编写的代码与PHP内部的类/函数/常量或第三方类/函数/常量之间的名字冲突。
2. 为很长的标识符名称(通常是为了缓解第一类问题而定义的)创建一个别名（或简短）的名称，提高源代码的可读性。



### 定义命名空间

通过`namespace`关键字声明

```php
<?php
declare(encoding='UTF-8'); // 声明命名空间之前唯一合法的代码
// 定义代码在 'MyProject' 命名空间中  
namespace MyProject;  
// ... 代码 ...  

// 推荐使用大括号括起来
namespace MyProject {
    const CONNECT_OK = 1;
    class Connection { /* ... */ }
    function connect() { /* ... */  }
}

// 如果声明的时候没有带有名字，则声明的为全局代码
namespace { // 全局代码
session_start();
$a = MyProject\connect();
echo MyProject\Connection::start();
}
?>
```

**注意：在声明命名空间之前唯一合法的代码是用于定义源文件编码方式的 declare 语句。所有非 PHP 代码包括空白符都不能出现在命名空间的声明之前。**



### 子命名空间

命名空间通过分层级的方式定义：

```php
<?php
namespace MyProject\Sub\Level;  //声明分层次的单个命名空间

const CONNECT_OK = 1;
class Connection { /* ... */ }
function Connect() { /* ... */  }

?>
```



### 命名空间使用

命名空间的三种访问方式：

1. 非限定名称访问方式；
2. 限定名称访问方式；
3. 完全限定名称访问方式。

```php
<?php
namespace Foo\Bar;
include 'file1.php';

const FOO = 2;
function foo() {}
class foo
{
    static function staticmethod() {}
}

/* 非限定名称 */
foo(); // 解析为 Foo\Bar\foo resolves to function Foo\Bar\foo
foo::staticmethod(); // 解析为类 Foo\Bar\foo的静态方法staticmethod。resolves to class Foo\Bar\foo, method staticmethod
echo FOO; // resolves to constant Foo\Bar\FOO

/* 限定名称 */
subnamespace\foo(); // 解析为函数 Foo\Bar\subnamespace\foo
subnamespace\foo::staticmethod(); // 解析为类 Foo\Bar\subnamespace\foo,
                                  // 以及类的方法 staticmethod
echo subnamespace\FOO; // 解析为常量 Foo\Bar\subnamespace\FOO
                                  
/* 完全限定名称 */
\Foo\Bar\foo(); // 解析为函数 Foo\Bar\foo
\Foo\Bar\foo::staticmethod(); // 解析为类 Foo\Bar\foo, 以及类的方法 staticmethod
echo \Foo\Bar\FOO; // 解析为常量 Foo\Bar\FOO
?>
```



### 命名空间的导入与别名

使用`use`关键字导入

```php
<?php
namespace foo;
use My\Full\Classname as Another;

// 下面的例子与 use My\Full\NSname as NSname 相同
use My\Full\NSname;

// 导入一个全局类
use ArrayObject;

// importing a function (PHP 5.6+)
use function My\Full\functionName;

// aliasing a function (PHP 5.6+)
use function My\Full\functionName as func;

// importing a constant (PHP 5.6+)
use const My\Full\CONSTANT;

$obj = new namespace\Another; // 实例化 foo\Another 对象
$obj = new Another; // 实例化 My\Full\Classname　对象
NSname\subns\func(); // 调用函数 My\Full\NSname\subns\func
$a = new ArrayObject(array(1)); // 实例化 ArrayObject 对象
// 如果不使用 "use \ArrayObject" ，则实例化一个 foo\ArrayObject 对象
func(); // calls function My\Full\functionName
echo CONSTANT; // echoes the value of My\Full\CONSTANT
?>
```

[命名空间解析规则](https://secure.php.net/manual/zh/language.namespaces.rules.php)



函数

php所有內建函数参考链接：[php手册](https://secure.php.net/manual/zh/funcref.php)、[菜鸟教程](http://www.runoob.com/php/php-ref-array.html)



## 面向对象编程

### 类定义

```php
<?php
class phpClass {
  var $var1;
  var $var2 = "constant string";
  
  function myfunc ($arg1, $arg2) {
     [..]
  }
  [..]
}
?>
```

实例：

```php
<?php
class Site {
  /* 成员变量 */
  var $url;
  var $title;
  
  /* 成员函数 */
  function setUrl($par){
     $this->url = $par;
  }
  
  function getUrl(){
     echo $this->url . PHP_EOL;
  }
  
  function setTitle($par){
     $this->title = $par;
  }
  
  function getTitle(){
     echo $this->title . PHP_EOL;
  }
}
?>
```

### 创建对象

```php
$runoob = new Site;
$taobao = new Site;
$google = new Site;
```

### 调用成员方法


```php
$runoob->setTitle( "菜鸟教程" );
```

析构函数

当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。

```
<?php
class MyDestructableClass {
   function __construct() {
       print "构造函数\n";
       $this->name = "MyDestructableClass";
   }

   function __destruct() {
       print "销毁 " . $this->name . "\n";
   }
}

$obj = new MyDestructableClass();
?>
```

<a name="inherit"><h4>继承 [<sup>目录</sup>](#content)</h4></a>

参考 [python中的继承](https://github.com/Ming-Lian/Memo/blob/master/Beginning-python.md#object-inherit)

使用关键字 extends 来继承一个类，PHP 不支持多继承

```
class Child extends Parent {
   // 代码部分
}
```

<a name="redefine-func"><h4>方法重写 [<sup>目录</sup>](#content)</h4></a>

如果从父类继承的方法不能满足子类的需求，可以对其进行改写，这个过程叫方法的覆盖（override），也称为方法的重写。

<a name="access-limit"><h4>访问控制 [<sup>目录</sup>](#content)</h4></a>

> - public（公有）：公有的类成员可以在任何地方被访问。
> - protected（受保护）：受保护的类成员则可以被其自身以及其子类和父类访问。
> - private（私有）：私有的类成员则只能被其定义所在的类访问。

构造函数

类似于python [将对象创建为有初始状态](https://github.com/Ming-Lian/Memo/blob/master/Beginning-python.md#object-operate) 的方法

构造函数是一种特殊的方法。主要用来在创建对象时初始化对象， 即为对象成员变量赋初始值

在一个类中定义一个方法作为构造函数

```php
function __construct ([ mixed $args [, $... ]] ){
  // ...
}
void __construct ([ mixed $args [, $... ]] ){
    
}
```



### 析构函数

析构函数(destructor) 与构造函数相反，当对象结束其生命周期时（例如对象所在的函数已调用完毕），系统自动执行析构函数。

```php
function __destruct ( void ){
  // ...
}
```



### 继承

使用`extends`关键字来继承一个类

```php
class Child extends Parent {
   // 代码部分
}
```



### 访问权限

PHP 对属性或方法的访问控制，是通过在前面添加关键字 public（公有），protected（受保护）或 private（私有）来实现的。默认是**公有属性**。

- `public`（公有）：公有的类成员可以在任何地方被访问。
- `protected`（受保护）：受保护的类成员则可以被其自身以及其子类和父类访问。
- `private`（私有）：私有的类成员则只能被其定义所在的类访问（派生类**无法重写**私有属性）。



### 接口

使用`interface`关键字定义接口，指定某个类必须要实现某些方法，但是不需要定义这些方法的具体内容。

要实现接口，使用`implements`操作符，类可以实现多个接口，使用逗号分隔开多个接口的名称。

```php
<?php

// 声明一个'iTemplate'接口
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}


// 实现接口
class Template implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
 
        return $template;
    }
}
```



### 抽象类

使用`abstract`关键字定义抽象类与抽象方法。

一个类里只要用一个方法被声明为抽象，那么这个类就必须声明为抽象类。被定义为抽象的方法只需要声明其调用方式（类似接口），继承抽象类的时候，子类必须定义父类中的所有抽象方法。另外，这些方法的访问权限必须和父类定义的访问权限相同或**更宽松**（从严谨到宽松的排序：`private`、`protected`、`public`）。

```php
<?php
abstract class AbstractClass
{
 // 强制要求子类定义这些方法
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // 普通方法（非抽象方法）
    public function printOut() {
        print $this->getValue() . PHP_EOL;
    }
}

class ConcreteClass1 extends AbstractClass
{
  // 子类必须定义父类中的所有抽象方法
    protected function getValue() {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
  // 子类必须定义父类中的所有抽象方法
    public function getValue() {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') . PHP_EOL;

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') . PHP_EOL;
?>
```



### 静态属性

使用`static`关键字声明一个类的属性或者方法为静态，静态方法不需要实例化类即可直接访问。

```php
<?php
class Foo {
  public static $my_static = 'foo';
  
  public function staticValue() {
     return self::$my_static;
  }
}

print Foo::$my_static . PHP_EOL;
$foo = new Foo();

print $foo->staticValue() . PHP_EOL;
?>    
```



### `final`关键字

如果父类中的方法被声明为 `final`，则子类无法覆盖该方法。如果一个类被声明为 `final`，则不能被继承。

```php
<?php
class BaseClass {
   public function test() {
       echo "BaseClass::test() called" . PHP_EOL;
   }
   // 该方法无法被重写和继承
   final public function moreTesting() {
       echo "BaseClass::moreTesting() called"  . PHP_EOL;
   }
}

class ChildClass extends BaseClass {
   public function moreTesting() {
       echo "ChildClass::moreTesting() called"  . PHP_EOL;
   }
}
// 报错信息 Fatal error: Cannot override final method BaseClass::moreTesting()
?>
```



### 子类调用父类构造方法

PHP 不会在子类的构造方法中自动的调用父类的构造方法。要执行父类的构造方法，需要在子类的构造方法中调用 `parent::__construct()` 。

```php
<?php
class BaseClass {
   function __construct() {
       print "BaseClass 类中构造方法" . PHP_EOL;
   }
}
class SubClass extends BaseClass {
   function __construct() {
       parent::__construct();  // 子类构造方法不能自动调用父类的构造方法
       print "SubClass 类中构造方法" . PHP_EOL;
   }
}
class OtherSubClass extends BaseClass {
    // 继承 BaseClass 的构造方法
}

// 调用 BaseClass 构造方法
$obj = new BaseClass();    // 输出“BaseClass 类中构造方法”

// 调用 BaseClass、SubClass 构造方法
$obj = new SubClass();    // 输出：“BaseClass 类中构造方法  SubClass 类中构造方法”

// 调用 BaseClass 构造方法
$obj = new OtherSubClass();    // 输出：“BaseClass 类中构造方法”
?>
```



# 高级

## 数据库操作

### 面向过程的操作

**操作数据库的基本步骤：**

1. **建立连接；**

   **mysqli_connect(server,username,password,dbname,port,socket)**

   该函数用于打开一个到MySQL服务器的连接，**成功返回一个连接标识，失败返回False。**

   ```php
   //例如：
        $conn = mysqli_connect(“localhost”, “root”,”root”,"lib","8080");
        if (!$conn) {      // 检测连接 
             die(“连接失败: " . mysqli_connect_error($conn)); } 
        echo "连接成功“;
   
   ```

2. **选择数据库；**

   mysqli_connect函数中选择数据库，也可以使用mysqli_select_db函数在连接建立后选择数据库

   **boolean mysqli_select_db(mysqli link,string dbname)**

   **mysqli_connect();**

   ```php
   //例如：
           mysqli_select_db($conn, “testDB”);
   //或者：
           $conn = mysqli_connect(“localhost”, “root”, ”root”，testDB);
   ```

3. **设置操作编码；**

   **mysqli_query($conn,“SET NAMES UTF8”);**

   > **以上三步通常定义在一个文件中，其他文件引用它（include）**

4. **发送sql语句；**

   **mysqli_query(mysqli link, string query[, int resultmode])**

   如果SQL语句是**Select，成功则返回查询结果集，否则返回False；如果是insert、update、delete，成功则返回True，否则返回False。**

   ```php
    //例如：
           $sql=“select * from class”;
           $result= mysqli_query($conn, $sql);
   ```

5. **接收返回的结果，并处理；**

   **mysqli_fetch_array( resource result [, int result_type])**   

   **从结果集中取得一行作为关联数组，或数字数组**，或二者兼有。    **第一个参数为mysqli_query的返回值**；第二个参数用于设置结果集数组的表述方式。

   ```php
   //例如：
           $sql=“select * from class”;
           $result= mysqli_query($conn, $sql);
           while ($row=mysqli_fetch_array($result){
                echo $row[0].$row[‘className’];//严格区分大小写
           }
   ```

   > **其他处理操作**
   >
   > 1. 获取查询**结果集中的记录数**
   >
   >    **mysqli_num_rows( resource result)**    
   >
   >    该函数**只对Select查询的结果集有效**。    
   >
   >    ```php
   >    //例如：
   >    $sql=“select * from class”;
   >    $result= mysqli_query($conn, $sql);       $nums= mysqli_num_rows($result);
   >    ```
   >
   >    
   >
   > 2. 

6. **释放资源，关闭连接。**

   **释放结果集资源：mysqli_free_result($result);**

   **关闭连接：mysqli_close($conn);**

   > 尽量晚创建，早释放
   >
   > PHP中与数据库的**连接是非持久连接**，**系统会自动回收，一般不需要手工关闭**。除非一次性返回的结果集比较大。

例子：

```php
<?php
//    mysqli_num_rows(resource )
include "mysql.php";
$sql="select * from student";
$result=mysqli_query($conn,$sql);
//方法1：num_rows
$num=mysqli_num_rows($result);
echo '<br/>'.'total:'.$num.'<br/>';

//方法2：while
$count=0;
while($row=mysqli_fetch_row($result)){
    echo $row[0].':'.$row[1].':'.$row[2].':'.$row[3].'<br/>';
    $count++;
}
echo 'total:'.$count.'<br/>';
//方法3：修改查询语句
$sql="select count(*) from student";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$num=$row[0];
echo 'total:'.$num.'<br/>';

#年龄超过20岁的学生信息和人数
$sql="select * from student where age>20";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result)){
    echo $row[0].":".$row[1].":".$row[2].":".$row[3]."<br/>";
}
echo "年龄大于20岁的总人数=".$num;

```



### 面向对象的操作

### 数据库操作

[菜鸟MYSQL教程](http://www.runoob.com/mysql/mysql-tutorial.html)

```php
<?php
$servername = "localhost";
$username = "username";
$password = "password";
 
/* 创建连接 */
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";
// 设置编码，防止中文乱码
mysqli_set_charset($con, "utf8");

/* 创建数据库 */
$createSql = "CREATE DATABASE myDB";
if ($conn->query($createSql) === TRUE) {
    echo "数据库创建成功";
} else {
    die("Error creating database: " . $conn->error);
}

/* 使用 sql 创建数据表 */
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
 
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    die("创建数据表错误: " . $conn->error);
}

/* 插入多条数据 */
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    die("Error: " . $sql . "<br>" . $conn->error);
}

/* 读取数据 */
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 结果";
}


// 关闭连接
$conn->close();
?>
```



更新数据

我们创建了一个名为 "Persons" 的表，如下所示：

| FirstName | LastName | Age  |
| --------- | -------- | ---- |
| Peter     | Griffin  | 35   |
| Glenn     | Quagmire | 33   |

下面的例子更新 "Persons" 表的一些数据：

```php
<?php
$con=mysqli_connect("localhost","username","password","database");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con,"UPDATE Persons SET Age=36
WHERE FirstName='Peter' AND LastName='Griffin'");

mysqli_close($con);
?>
```

在这次更新后，"Persons" 表如下所示：

| FirstName | LastName | Age  |
| --------- | -------- | ---- |
| Peter     | Griffin  | 36   |
| Glenn     | Quagmire | 33   |



### 使用事务进行数据库操作（提高写入速度）

```php
<?php
$mysqli = new mysqli("127.0.0.1","root","111111","test");
if ($mysqli->connect_errno){
	echo "Failed to connect to MySQL: " . $mysqli->connect_error;
}
//默认auto-commit 是打开的，可直接提交sql语句
$b1 = $mysqli->query("INSERT INTO test (id,name) values (0,'000')");
//若要执行事务，先关闭auto-commit
//关闭 auto-commit
$mysqli->autocommit(false);
$res1 = $mysqli->query("INSERT INTO test (id,n1ame) values (1,'111')");
$b2 = $mysqli->query("INSERT INTO test (id,name) values (2,'222')");
//有一条失败则回滚，全部成功则提交
if(!$res1 || !$b2){
    echo '回滚！';
    $mysqli->rollback();
} else {
    echo '提交！';
    $mysqli->commit();
}
//若想再次自动提交非事务语句，要打开auto-commit
$mysqli->autocommit(true);
$b3 = $mysqli->query("INSERT INTO test (id,name) values (3,'333')");
//关闭连接
$mysqli->close();
```

1. `SQL语句是有长度限制`，在进行数据合并在同一SQL中务必不能超过SQL长度限制，通过max_allowed_packet配置可以修改，默认是1M，测试时修改为8M。
2. `事务需要控制大小`，事务太大可能会影响执行的效率。MySQL有innodb_log_buffer_size配置项，超过这个值会把innodb的数据刷到磁盘中，这时，效率会有所下降。所以比较好的做法是，在数据达到这个这个值前进行事务提交。



### 设置utf-8字符串

在数据库连接完成后，添加以下代码

```php
/**
 * sql连接初始化
 */
function sql_init()
{
    $mysqli = new mysqli(HOST, SQL_USERNAME, SQL_PASSWORD, SQL_DBNAME, SQL_PORT);
    // 我使用下面这个方式设置字符集，但是返回的中文数据仍然是乱码
    $mysqli->set_charset("utf-8");
    $mysqli->query("set names 'utf8' ");
    // $mysqli->query("set character_set_client=utf8");
    $mysqli->query("set character_set_results=utf8");
    return $mysqli;
}
```



### 数据更新

想对数据库里的某一条数据的某一项或多项进行更新，需要用到`ON DUPLICATE KEY UPDATE`

| id   | num         | date          | remarks |
| ---- | ----------- | ------------- | ------- |
| 1    | 13488889999 | 1550131999000 | test    |

> 需求是：当原来数据库里没有这一个`num`的数据时，新增这一条数据，否则更新`data`和`remarks`。

`id`是设置了主键的，保证了它的唯一性，然后需要给`num`设置**唯一**索引，当需要增加或者更新数据时，执行下面的语句:

```sql
INSERT INTO db (num,date,remarks) VALUES (13488889999,1549873770000,"msg") ON DUPLICATE KEY UPDATE date=1549873770000, remarks= "msg";
```

新增时，受影响的行数为1，更新时受影响的行数为2。

## 会话管理

### cookie

Cookie 可以用来保存用户名、密码、个性化设置等一些简单的信息。

Cookie 是一个很小的文本文件，保存在浏览器的缓存目录下。

- **设置cookie中命名变量的值**

  ```php
  setcookie(“myname”,$username,time()+7*24*60*60);
        //保存时间为7天
        //如果不指定失效时间，则Cookie将在关闭浏览器后失效
  	//cookie中只能保存字符串
  ```

- **删除Cookie**

  ```php
  setcookie(“myname”,””,time()-1);
      或者：
      setcookie(“myname”,“”);
  ```

- **要删除所有的Cookie：**

  ```php
  foreach ($_COOKIE as $key=>$value)
   		  setcookie($key,“”,time()-1);
  ```

- **重定向**网页

  ```php
  echo "<a href='xx.php'>跳转，需要点击</a>";
  header('Location:xxx.php');
  echo "<script>location.href='xx.php';</script>"  //如果执行不了就需要三个分开写
  ```

- **访问cookie：**

  ```php
  isset($_COOKIE['name'])
  ```

  

### session

**cookie是保存在客户端，session是保存在服务端，因此session更加安全。**

**Session适合于单次访问，如登录网上银行，当用户异常断线或超时没有操作时，Session会自动中断连接；而Cookie适合于更加长时间的数据存储，如论坛登录**。

#### 存储与获取

在进行session操作的时候，必须先通过`session_start()`启动会话。

```php
<?php
session_start();  //该函数将检查是否有一个sessionID存在。若不存在则创建一个，若存在就将这个已注册的会话变量载入以便使用。

// 存储 session 数据
$_SESSION['views']=1;

// 获取数据
echo $_SESSION['views'];

//删除数据
unset($_SESSION[‘变量名’]);//注销某个会话变量
$_SESSION=array(); //清空保存session的数组，将一次性销毁所有的会话变量
session_destroy(); //删除session

?>
```

Session文件的保存路径是在php.ini文件中设置的，默认为：session.save_path="C:\phpStudy\PHPTutorial\tmp\tmp“    即服务器的该路径下。可以修改该配置项，重启apache后生效

用浏览器访问该文件，同时观察对应session保存路径下，会看到生成了一个新文件，可以用记事本打开，其内容如下：      name|s:3:"xhy";其中，s代表字符串，3为字符串长度

```php+HTML
<?php
	session_start();  //value里没法开启session
?>
<input type="text" name="user" value="<?php
                if(isset($_SESSION['user'])){
                    echo $_SESSION['user'];
                }
                ?>">
```



#### 销毁

如果您希望删除某些 session 数据，可以使用 `unset()` 或 `session_destroy()` 函数。

`unset()` 函数用于释放指定的 session 变量：

```php
<?php
session_start();
if(isset($_SESSION['views']))
{
    unset($_SESSION['views']);
}
?>
```

`unset($_SESSION)` 此函数千万不可使用，它会将全局变量$\_SESSION销毁，而且还没有可行的办法将其恢复。用户也不再可以注册$_session变量。

您也可以通过调用 `session_destroy()` 函数彻底销毁 session,结束当前的会话，并清空会话中的所有资源：

```php
<?php
session_destroy();
?>
```

**注释：**`session_destroy()` 将重置 session，您将失去所有已存储的 session 数据。



## 文件操作

前端使用ajax将文件上传后，后端先将文件从缓存文件夹移动到你要存放文件的文件夹

```js
/* js */
$.ajax({
    url:"/studyPHP/php/updata.php",
    type:"post",
    data:data,
    processData:false,
    contentType:false,
    dataType:"json",
    success:function(res) {
      console.log(res);
    }
})
```



```php
/* php */
if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    $root_dir = "/studyPHP/upData_files/";
    $filename = $_FILES['file']['name'];
    $filename = time() . $filename;
    $uploadfile = $root_dir . $filename;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
      $res = array('code' => 200, 'msg' => "文件已保存");
      echo json_encode($res,JSON_UNESCAPED_UNICODE);
    }
  }
```

**请注意**：在后端处理文件的时候，需要留意文件夹的权限问题，否则将会在执行`move_uploaded_file`时将会报错。

此时，若要读取文件，可以使用`fgets()`加`feof()`来分行读取文件

```php
/* php */
$myFile = fopen($uploadfile, "r");
$arr = array();
$j = 0;
while (!feof($myFile)) {
  $a = mb_convert_encoding(fgets($myFile), "UTF-8", "GBK,ASCII,ANSI,UTF-8");
  $arr[$j] = trim($a);
  // dosomething...
  $j++;
}
fclose($myFile);
```



## 跨域处理

需要在后端接口入口页面设置允许跨域

```php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers:content-type,token,id');
header("Access-Control-Request-Headers: Origin, X-Requested-With, content-Type, Accept, Authorization");
```

如果遇到set-cookies无法存储的问题时，需要做如下设置

```php
// 后端设置
header('Access-Control-Allow-Credentials:true');
// 设置了这个之后，Access-Control-Allow-Origin需要设置具体域名，不能使用*
```

```js
// 前端在请求头中设置
withCredentials:true
```

