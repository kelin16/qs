<?php
return array(
    //'配置项'=>'配置值'

    /*//“前台”静态文件访问路径
    'CSS_URL' => '/Public/Home/style/',
    'JS_URL' => '/Public/Home/js/',
    'IMG_URL' => '/Public/Home/images/',
    //“后台”静态文件访问路径
    'AD_CSS_URL' => '/Public/Admin/css/',
    'AD_JS_URL' => '/Public/Admin/js/',
    'AD_IMG_URL' => '/Public/Admin/images/',

    //给网站域名设置一个配置变量(方便图片等信息访问)
    'SITE_URL' => 'http://web.shop45.com/',

    //为Plugin插件包 设置配置变量访问路径
    'PLUGIN_URL' => '/Common/Plugin/',*/

    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '192.168.1.250', // 服务器地址
    'DB_NAME'               =>  'mydb',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    //'DB_PREFIX'             =>  '',    // 数据库表前缀

    //设置页面跟踪信息
    'SHOW_PAGE_TRACE'       => false,
);