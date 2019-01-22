<?php
namespace nykj;
    function var_dump(){
        echo '1';
    }
    //使用命名空间下的方法和类
    var_dump();

    $name = 100;
    //使用系统的方法和类
    \var_dump($name);