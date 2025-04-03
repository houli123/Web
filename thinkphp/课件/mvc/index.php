<?php
require "Model.php";
require "View.php";
require "Controller.php";

//Controller::show();
//Controller::abc();

$c=isset($_GET['c'])?$_GET['c']:"Controller";
$a=isset($_GET['a'])?$_GET['a']:"show";
$controller=new $c;
$controller->$a();