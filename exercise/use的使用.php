<?php
namespace yzm;
include 'yzm.class.php';
use \jianjian\yzm;
//class  yzm{
//    function a(){
//        echo 'BBB<hr>';
//    }
//}
//$class=new yzm();
//$class->a();

//不加use使用外部的类
$class=new \jianjian\yzm();
$class->a();

//加了use使用外部的类
$class=new yzm();
$class->a();