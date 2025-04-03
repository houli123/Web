<?php

namespace app\index\model;
use think\Model;

class User extends Model{
    protected $autoWriteTimestamp=true;//开启自动写入时间戳功能
    protected $updateTime=false;//关闭更新时间自动写入功能
}