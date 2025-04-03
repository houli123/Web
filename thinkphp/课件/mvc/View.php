<?php
class View{
    public static function display($data){
        $table="<table><tr><td>id</td><td>name</td><td>age</td></tr>";
        foreach ($data as $key=>$value){
//    $table=$table."<tr><td>".$value['id']."</td><td>".$value['name']."</td><td>".$value['age']."</td></tr>";
            $table=$table."<tr><td>{$value['id']}</td><td>{$value['name']}</td><td>{$value['age']}</td></tr>";
        }
        $table=$table."</table>";
        return $table;
    }
}