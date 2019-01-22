<?php
namespace yzm;
include 'yzm.class.php';
//第一个斜杠可省略use jianjian\junjun as junjunout;
use \jianjian\junjun as junjunout;
class  junjun{
    function a(){
        echo 'BBB<hr>';
    }
}
//使用本页的类
$class=new junjun();
$class->a();

//不加use使用外部的类
$class=new \jianjian\junjun();
$class->a();

//加了use使用外部的类
$class=new junjunout();
$class->a();



