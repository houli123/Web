<?php
//数据（模型）
    $data=array(
        array('id'=>'1','name'=>'Tom','age'=>19),
        array('id'=>'2','name'=>'jom','age'=>12),
        array('id'=>'3','name'=>'tom','age'=>39),
        array('id'=>'4','name'=>'aom','age'=>7)
    );
//视图
$table="<table><tr><td>id</td><td>name</td><td>age</td></tr>";
foreach ($data as $key=>$value){
//    $table=$table."<tr><td>".$value['id']."</td><td>".$value['name']."</td><td>".$value['age']."</td></tr>";
    $table=$table."<tr><td>{$value['id']}</td><td>{$value['name']}</td><td>{$value['age']}</td></tr>";
}
$table=$table."</table>";
echo $table;