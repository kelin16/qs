<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="icon" type="" href="/Public/home/images/video/logo2.png">
    <link rel="stylesheet" href="/Public/home/css/navigation.css">
    <link rel="stylesheet" href="/Public/home/css/index/index.css">
    <script src="/Public/home/js/jquery-1.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#name").blur(function () {
                if($("#name").val() == ""){
                    $("#span1").css({"display":"inline-block"});
                    }
                })
            $("#name").focus(function () {
                $("#span1").css({"display":"none"});
                }
            )
            $("#password").blur(function () {
                if($("#password").val() == ""){
                    $("#span2").css({"display":"inline-block"});
                    }
                })
            $("#password").focus(function () {
                $("#span2").css({"display":"none"});
                }
            )
            $("#verify").blur(function () {
                if($("#verify").val() == ""){
                    $("#span3").css({"display":"inline-block"});
                    }
                })
            $("#verify").focus(function () {
                $("#span3").css({"display":"none"});
                }
            )

        });

        function check() { //验证用户名字段是否为空
            if($("#name").val() == ""){
                //alert("请输入用户名");
                $("#name").focus();
                return false;
            }
            //验证密码字段是否为空
            if ($("#password").val() == "") {
                //alert("请输入登陆密码");
                $("#password").focus();
                return false;
            }
            if ($("#verify").val() == "") {
                //alert("请输入验证码");
                $("#verify").focus();
                return false;
            }
        }

    </script>
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
            <form name="login" action="/index.php/Home/User/login" id="loginForm" method="post">
                <h2>用户登录</h2>
                <img class="login_img" src="/Public/home/images/index/u14.png" alt=""><input class="stl" name="user_name" id="name" type="text" placeholder="请输入用户名"  autofocus><apan id="span1" style="color: #FF0000;display: none">*</apan><br><br>
                <img class="login_img" src="/Public/home/images/index/u20.png" alt=""><input class="stl"  name="password" id="password" type="password" placeholder="请输入密码"><apan id="span2" style="color: #FF0000;display: none">*</apan><br><br>
                <div>
                    <input name="verify" id="verify" maxlength="4" style="width: 110px;height: 30px;border: 0px;border-bottom: thin solid #666666;display: inline-block" type="text" placeholder="请输入验证码"><apan id="span3" style="color: #FF0000;display: none">*</apan>
                    <img src="/index.php/Home/User/verifyImg" style="display:inline-block" id="safecode" onclick="this.src=this.src+'/'+Math.random()" />
                </div>
                <br><br><br>
                <input type="submit" onClick="return check()" value="登录" style="width: 175px; height: 30px; background-color: #199ED8;border-radius: 10px; color: #ffffff ">
                <a href="/index.php/Home/User/register" class="reg_btn">注册 >></a>
            </form>
        </div>
    </div>
</div>
</body>
</html>