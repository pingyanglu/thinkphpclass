<?php
return array(
	//'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'xiaojun',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'XIAOJIAN'=>'喜欢C',
    'LOAD_EXT_CONFIG' => 'cache,db',

    //URL模式
    'URL_MODEL' => 2,
    'URL_ROUTER_ON'   =>  true,//默认fllse,   // 是否开启URL路由

    'VAR_MODULE'            =>  'm',     // 默认模块获取变量
    'VAR_CONTROLLER'        =>  'c',    // 默认控制器获取变量
    'VAR_ACTION'            =>  'ab',    // 默认操作获取变量
);