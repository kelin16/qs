<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>底部信息弹框</title>
    <script src="/Public/home/js/jquery-1.7.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#xiabiao').click(function () {
//                $('.xiabian').toggle();
                window.parent.isVisible2();
            })
        })

    </script>
    <style>
        *{
            margin: 0;
            padding:0;
        }
        .xiabian{
            height:160px;
            width:1200px;
            bottom:0px;
            position: absolute;
            z-index: 9;
            background: linear-gradient(#a1a1a1, #676767,#a1a1a1);
            font-size:14px;
            /*display:none;*/
        }
        .xiabian .botImg{

        }
        .kuangjia{
            height:100%;
            width:200px;
            float:left;

        }
        .kuangjia_1{
            height:100%;
            width:100px;
            float:left;
        }
        .wenzi{
            font-size:14px;
            color:#ffffff;

            margin-left:20px;
        }
        .shi{
            margin-top:14px;}

        .ershi{
            margin-top:22px;}
        .shiba{
            margin-top:18px;
        }

        .wenzi span{
            color: #9ecd00;
        }
        .kuangjia_1 span{
            margin-top:20px;
            width:30px;
            height:28px;
        }
        .kai{

            width:30px;
            height:23px;
            background-color: white;
            color:#000000;
            float:left;
            text-align:center;
            line-height:23px;
        }
        .guan{
            width:30px;
            height:23px;
            background-color:#9b9b9b;
            color:#ffffff;
            float:left;
            text-align:center;
            line-height: 23px
        }
        .shezhi{
            margin-top:85px;
        }
        .shezhi1{
            margin-top:36px;
            margin-left:13px;}
    </style>
</head>
<body>
<!--下边框-->
<div class="xiabian">
    <div class="kuangjia">
        <a href="#"><div class="wenzi ershi" style="margin-top:30px;">氧气20<span>%VOL</span></div></a>
        <a href="#"><div class="wenzi ershi">硫化氢0.66<span>%VOL</span></div></a>
        <a href="#" ><div class="wenzi ershi">甲烷7.36<span>%VOL</span></div></a>
    </div>
    <div class="kuangjia">
        <a href="#"><div class="wenzi ershi">温度<span id="temp">30.05℃</span></div></a>
        <a href="#"><div class="wenzi shiba">湿度33.04<span>%</span></div></a>
        <a href="#" ><div class="wenzi shiba">电舱温度34.5<span>C</span></div></a>
        <a href="#" ><div class="wenzi shiba">电舱电缆温度36.03<span>C</span></div></a>
    </div>

    <div class="kuangjia_1">
        <div class="wenzi ershi">风机</div>
        <botton type="botton" class="kai ershi" >开</botton>
        <botton type="botton" class="guan ershi" >关</botton>
        <img src="/Public/home/images/run/设置.png" class="shezhi">
    </div>
    <div class="kuangjia">
        <a href="#"><div class="wenzi ershi">电舱</div></a>
        <a href="#"><div class="wenzi shi" style="padding-left: 20px;">集水坑液位38<span>%</span></div></a>
        <a href="#" ><div class="wenzi shi">水舱</div></a>
        <a href="#" ><div class="wenzi shi" style="padding-left: 20px">集水坑液位25<span>%</span></div></a>
    </div>
    <div class="kuangjia_1">
        <div class="wenzi ershi">风机</div>
        <botton type="botton" class="kai shiba" >开</botton>
        <botton type="botton" class="guan shiba" >关</botton></br></br></br>
        <botton type="botton" class="kai shiba" >开</botton>
        <botton type="botton" class="guan shiba" >关</botton>
        <img src="/Public/home/images/run/设置.png" class="shezhi1">
    </div>

    <div class="kuangjia">
        <a href="#">
            <div class="wenzi ershi" style="float:left;">照明</div></a>
        <botton type="botton" class="kai shiba" style="margin-left:39px" >开</botton>
        <botton type="botton" class="guan shiba" >关</botton></br></br></br>
        <a href="#">
            <div class="wenzi shi" style="float:left;">防火门</div></a>
        <botton type="botton" class="kai shi" style="margin-left:25px;">开</botton>
        <botton type="botton" class="guan shi" >关</botton>
        <a href="#" ><div class="wenzi shi" style="padding-top:35px; ">投料口
            <span style="margin-left:52px">正常</span></div></a>
        <a href="#" ><div class="wenzi shi">人员逃生口
            <span style="margin-left:25px;">正常</span></div></a>
    </div>

    <div class="kuangjia">
        <a href="#"><div class="wenzi ershi">应急通信</div></a>
        <img src="/Public/home/images/run/人头.png" alt="" style="float:right;margin-top:-14px;margin-right:55px"/>
        <a href="#"><div class="wenzi shiba">水舱</div></a>
        <img src="/Public/home/images/run/电话.png" alt="" style="float:right;margin-top:-14px;margin-right:55px"/>
        <a href="#" ><div class="wenzi shiba">电舱</div></a>
        <img src="/Public/home/images/run/电话.png" alt="" style="float:right;margin-top:-14px;margin-right:55px"/>
        <a href="#" ><div class="wenzi shiba">设备间</div></a>
        <img src="/Public/home/images/run/电话.png" alt="" style="float:right;margin-top:-14px;margin-right:55px"/>
    </div>
</div>

</body>
</html>