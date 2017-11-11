<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="icon" type="" href="/Public/home/images/video/logo2.png">
    <link rel="stylesheet" href="/Public/home/css/navigation.css">
    <link rel="stylesheet" href="/Public/home/css/index/index.css">
</head>
<style></style>
<body>
<div class="main border">

    <div class="title">

        <div class="title_word">
            <div class="title_logo"><img src="/Public/home/images/index/u18.png"></div>
            <div><h1 style="font-size: 50px">智慧管廊综合管理平台</h1></div>
        </div>
    </div>

    <div class="img">
        <div class="img_left">
            <img src="/Public/home/images/index/u12.jpg">
        </div>
        <div class="login_right border">
            <form action="/index.php/home/index/login" id="loginForm" method="post">
                <h2>用户登录</h2>
                <img class="login_img" src="/Public/home/images/index/u14.png" alt=""><input class="stl" name="user_name" id="name" type="text" placeholder="请输入用户名"  ><br><br>
                <img class="login_img" src="/Public/home/images/index/u20.png" alt=""><input class="stl"  name="password" id="password" type="password" placeholder="请输入密码"><br><br>
                <div>
                    <input class="stls" name="chknumber" id="chknumber" maxlength="4" style="width: 150px;height: 30px;border: 0px;border-bottom: thin solid #666666;" type="text" placeholder="请输入验证码">
                    <img src="/index.php/Home/Index/verifyImg" id="safecode" onclick="this.src=this.src+'/'+Math.random()" />
                </div>
                <br><br><br>
                <input type="submit" value="登录" style="width: 175px; height: 30px; background-color: #199ED8;border-radius: 10px; color: #ffffff ">
            </form>
        </div>
    </div>
</div>
</body>
</html>