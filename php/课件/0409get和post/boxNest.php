<?php
header('content-type:text/html;charset=utf-8');
//echo '我的爱好是：'.$_POST['hobby'];只能传入最后一个选项
//echo '我的爱好是：'.implode(",",$_POST['hobby']);传入所有数组值
if(isset($_POST['hobby']))
{
    echo '我的爱好是：'.implode(",",$_POST['hobby']);
}
else
    {
        echo '未选择爱好';
    }