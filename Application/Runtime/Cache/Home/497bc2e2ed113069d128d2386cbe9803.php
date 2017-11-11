<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>搜索弹框</title>
    <style>

        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            overflow: hidden;
            background-color: #FFFFFF;
        }
        .container{
            width: 260px;
            height: 600px;
            font-family: 'Arial Negreta', 'Arial Normal', 'Arial';
            font-size: 14px;
            /*background-color: #f3f3f3;*/
            position: relative;
        }
        .header{
            background-color: #1cd6ff;
            height: 45px;
        }
        .header p{
            padding-left: 10px;
            font-weight: 700;
            font-size: 15px;
            font-style: normal;
            color: #FFFFFF;
            line-height: 45px;
        }
        .header img{
            position: absolute;
            top: 10px;
            right: 5px;
            cursor: pointer;
        }
        .content{
            margin-left:10px;
            margin-right: 10px;
            height: 555px;
            font-size: 14px;
            /*overflow-y: scroll;*/
            overflow-x: hidden;
            /*background-color: #EEEEEE;*/
        }
        .content div{
            width: 240px;
            height: 30px;
            line-height: 30px;
        }
        .content span{
            display: inline-block;
            height: 39px;
            width: 63px;
            line-height: 39px;
            font-family: 'Arial Negreta', 'Arial Normal', 'Arial';
            color: #4a4a4a;
            font-weight: 700;
            font-size: 15px;
            font-style: normal;
        }
        .content select{
            height: 22px;
            width: 171px;
        }
        .content input{
            height: 20px;
            width: 170px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <p>查找防火分区</p>
            <img src="/Public/home/images/run/取消.jpg" alt="" id="you0" onclick="closeCurrent()"/>
        </div>
        <div class="content">
            <span>选择道路 </span>
            <select>
                <option >园博园大街</option>
                <option >迎旭大道</option>
                <option >太行大街</option>
            </select><br>

            <span>选择分区</span>
            <select>
                <option >DNF-101</option>
                <option >DNF-102</option>
                <option >DNF-103</option>
            </select><br>

            <span>设备编号</span>
            <input type="text"/>

            <button type="button" style="background-color:#ffcd33;width:240px;height:40px;font-size: 14px;line-height: 40px; margin-top: 5px">搜索 </button>

            <div style="background-color: #f2f2f2;width:240px;margin-top:15px;height:365px;"></div>

        </div>
    </div>
    <script>
        function closeCurrent() {
            window.parent.closeRitSea()
        }
        function b() {
            window.parent.a()
        }
    </script>
</body>
</html>