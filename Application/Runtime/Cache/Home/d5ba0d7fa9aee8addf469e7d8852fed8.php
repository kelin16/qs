<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/home/css/navigation.css">
</head>
<body>
<!--导航条-->
<div class="navBar shadow">
    <div class="navLeft">
        <div>
            <img src="/Public/home/images/run/u142.png" alt="logo" style="width:30px;height:25px;padding-top:9px; margin-left:5px;float:left">
            <div class="title">智慧管廊综合管理平台</div>
        </div>
    </div>
    <div class="nav">
        <ul>
            <li><a href="/index.php/home/run/index" target="iframeContent">系统运行</a></li>
            <li><a href="/index.php/home/eqpt/index"  target="iframeContent" id="eqpt">系统设备</a></li>
            <li><a href="#">档案管理</a></li>
            <li><a href="#">报警信息</a></li>
            <li><a href="#" >巡查巡检</a>
                <ul class="navBar_two">
                    <li style="clear: both;"><a href="#">安防系统</a></li>
                    <li style="clear: both;"><a href="#">消防系统</a></li>
                    <li style="clear: both;"><a href="#">自控系统</a></li>
                    <li style="clear: both;"><a href="#">配电与照明</a></li>
                </ul>
            </li>
            <li><a href="#">入廊企业</a> </li>
            <li><a href="#">人员管理</a> </li>
            <li><a href="#">应急指挥</a> </li>
            <li><a href="#">3D漫游</a> </li>
            <li><a href="#">教育培训</a> </li>
        </ul>
    </div>
    <div class="navRight ">
        <img src="/Public/home/images/run/u144.png" alt="" style="margin-left:5px;position: relative">&nbsp;你好！<?php echo (session('admin_name')); ?>
    </div>
    <div class="setting">
        <a href="/index.php/home/Setting/setting" >
            <img src="/Public/home/images/run/u148.png" alt="" >
        </a>
    </div>
    <div class="logout">
        <a href="/index.php/Home/User/logout"  target="_parent">
            退出
        </a>
    </div>
</div>
<!--导航条结束-->
</body>
</html>