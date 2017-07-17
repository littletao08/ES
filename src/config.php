<?php

$config = array(
    'rewrite' => array(
        //设置模块 碰到 http://{host}/admin/ 认为进入了后台模块 数组 0 标识默认 m
       'm'=>['web','admin','app','api'], 
       'c'=>'main', //controller 默认值
       'a'=>'index', //action 默认值,
       'isRewrite'=> TRUE //是否开启伪静态 .htaccess 文件配置
    ),
   'debug' => TRUE,
   'plugins'=>['include','plugin'] //扩展目录
);

$dbb = array(
    'mysql' => array(
        'MYSQL_HOST' => '127.0.0.1',
        'MYSQL_PORT' => '3306',
        'MYSQL_USER' => 'root',
        'MYSQL_DB' => 'db_demo',
        'MYSQL_PASS' => '123456',
        'MYSQL_CHARSET' => 'utf8',
    ),
    'prefix' => 'mo_',
);

return $dbb+ $config;