<?php
namespace yzm;
function var_dump(){
    echo 'AAA<hr>';
}
var_dump();

namespace  haohao;
function var_dump(){
    echo 'BBB<hr>';
}
var_dump();
//第一个斜杠不可省略
\yzm\var_dump();

echo __NAMESPACE__;