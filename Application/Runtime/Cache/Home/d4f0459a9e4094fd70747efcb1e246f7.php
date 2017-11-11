<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>设置界面</title>
    <link rel="icon" type="" href="/Public/home/images/video/logo2.png">
    <link rel="stylesheet" href="/Public/home/css/navigation.css">
    <link rel="stylesheet" href="/Public/home/css/setting/systemSetting.css">
    <script src="/Public/home/js/jquery-1.7.1.min.js"></script>
    <script src="/Public/home/js/setting/setting.js"></script>
    <style>
        .content{
            /*background-color: lightcyan;*/
        }
        .selec{
            /*background-color: rebeccapurple;*/
            background-image: url('/Public/home/images/setting/MenuGray.png');
            background-repeat: no-repeat;
            background-position-y: bottom;
        }
        .unselec{
            background-image: url('/Public/home/images/setting/MenuWhite.png');
            background-repeat: no-repeat;
            background-position-y: bottom;
        }
    </style>
</head>
<body>
<div class="webpage">
   <div class="main border">
       <!--导航条开始-->
       <div class="navBar shadow">
        <div class="navLeft">
            <div>
                <img src="/Public/home/images/run/u142.png" alt="logo" style="width:30px;height:30px;padding-top: 10px;float: left">
                <div class="title">智慧管廊综合管理平台</div>
            </div>
        </div>
        <div class="nav">
            <ul>
                <li><a href="/index.php/home/Run/run">运行管理</a></li>
                <li><a href="#">报警管理</a></li>
                <li><a href="#">巡检管理</a></li>
                <li><a href="#">设备管理</a></li>
                <li>
                    <a href="#" >设备分布</a>
                    <ul class="navBar_two">
                        <li style="clear: both;"><a href="#">安防系统</a></li>
                        <li style="clear: both;"><a href="#">消防系统</a></li>
                        <li style="clear: both;"><a href="#">自控系统</a></li>
                        <li style="clear: both;"><a href="#">配电与照明</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="navRight">
            <img src="/Public/home/images/run/u144.png" alt="">
            你好！Admin
        </div>
        <div class="setting">
            <a href="/index.php/home/Setting/setting">
                <img src="/Public/home/images/run/u148.png" alt="">
            </a>
        </div>
    </div>

       <!--主区-->
       <div class="content">
           <!--视图切换按钮-->
           <div class="switchViewBtn">
               <div id="video" class="selec"><span style="margin-left:16px;">人员权限</span></div>
               <div id="envirPara" class="unselec"><span style="margin-left:16px;">环境参数</span></div>
               <div id="personManage" class="unselec"><span style="margin-left:16px;">人员管理</span></div>
           </div>
           <!--视图区域-->
           <!--第一个-->

           <div class="con contentView">
               <div class="bor">
                   <img src="/Public/home/images/setting/guanlang.png" alt=""> <strong>管廊</strong>
                   <div class="drop">
                       <select>
                           <option >园博园大街</option>
                           <option >太行大街</option>
                           <option >新城大街</option>
                           <option >迎旭路</option>
                           <option >隆兴路</option>
                       </select>

                       <div class="picture">
                               <span>
                           <div class="picture_word">Yby-002
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">Yby-003
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">Yby-004
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">Yby-005
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">Yby-006
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">Yby-007
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                               </span>
                       </div>
                   </div>
               </div>
               <div class="bor">
                   <img src="/Public/home/images/setting/juese.png" alt=""><strong>角色</strong>
                   <div class="drop">
                       <select>
                           <option >系统管理员</option>
                           <option >巡检员</option>
                           <option >巡检组长</option>
                           <option >消防人员</option>
                           <option >消防组长</option>
                           <option >设备管理员</option>
                           <option >设备管理组长</option>
                       </select>

                       <div class="picture">
                           <div class="picture_word" >巡检管理
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">巡检设置
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">系统运行
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">维修管理
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>

                       </div>
                   </div>
               </div>
               <div class="bor">
                   <img src="/Public/home/images/setting/renwu.png" alt=""><strong>人员</strong>
                   <div class="drop">
                       <select>
                           <option >刘斌</option>
                           <option >李力</option>
                           <option >张军</option>
                           <option >王建强</option>

                       </select>
                       <div class="picture">
                           <div class="picture_word" >巡检管理
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">巡检设置
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">系统运行
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">维修管理
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                       </div>
                   </div>
               </div>
               <div class="bor" style="border:none;">
                   <img src="/Public/home/images/setting/tianjia.png" alt=""><strong>最近更改</strong>
                   <div class="drop">
                       <select>
                           <option >2017/7/14&nbsp;刘斌</option>
                           <option >2017/7/18&nbsp;李力</option>
                           <option >2017/7/24&nbsp;张军</option>
                           <option >2017/7/30&nbsp;王建强</option>

                       </select>
                       <div class="picture">
                           <div class="picture_word" >巡检管理
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">巡检设置
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">系统运行
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                           <div class="picture_word">维修管理
                               <img src="/Public/home/images/setting/shanchu.png" alt=""></div>
                       </div>
                   </div>
               </div>
               <div class="under">
                   <div class="under_li">
                       <img src="/Public/home/images/setting/quanxian.png" alt=""/><strong>权限</strong><br>
                       <div class="under_li1">
                       <div class="under_option">系统设置&nbsp;&nbsp;<input type="checkbox"></div>
                       <div class="under_option">巡检管理&nbsp;&nbsp;<input type="checkbox"></div>
                       <div class="under_option">报警管理&nbsp;&nbsp;<input type="checkbox"></div>
                       <div class="under_option">设备管理&nbsp;&nbsp;<input type="checkbox"></div>
                       <div class="under_option">系统运行&nbsp;&nbsp;<input type="checkbox"></div></br>
                       <div class="under_option">人员设置&nbsp;&nbsp;<input type="checkbox"></div>
                       <div class="under_option">巡检设置&nbsp;&nbsp;<input type="checkbox"></div>
                       <div class="under_option">报警设置&nbsp;&nbsp;<input type="checkbox"></div>
                       <div class="under_option">设备台账&nbsp;&nbsp;<input type="checkbox"></div>
                       <div class="under_option">运行控制&nbsp;&nbsp;<input type="checkbox"></div></br>
                       <div class="under_option">维修更换&nbsp;&nbsp;<input type="checkbox"></div>
                       <div class="under_option">检查维护&nbsp;&nbsp;<input type="checkbox"></div>
                       </div>
                   </div>
               </div>
               <!--<object classid="clsid:146FF3A3-49EA-4AAC-B4BD-3E181394265F" id="obj" height= "50px" width="100%" >-->
               <!--</object>-->

               <!--<div class="contentViewBar">-->
                   <!--<div class="codDev">编码设备</div>-->
               <!--</div>-->

               <!--<div class="contentViewSet">-->
                   <!--<div id="add"><img src="/Public/home/images/setting/add.png" alt=""><span>添加</span></div>-->
                   <!--<div id="del"><img src="/Public/home/images/setting/del.png" alt=""><span>删除</span></div>-->
                   <!--<div id="find">设备发现</div>-->
               <!--</div>-->

               <!--<div class="contentViewTable">-->
                   <!--<table  id="devTable" class="table" style="border: 0px">-->
                       <!--<tr>-->
                           <!--<th>序号</th>-->
                           <!--<th>设备名称</th>-->
                           <!--<th>类型</th>-->
                           <!--<th>IP</th>-->
                           <!--<th>端口号</th>-->
                       <!--</tr>-->
                   <!--</table>-->
               <!--</div>-->


               <!--<div id="gui" style="width:100px;height:100px;margin-left:250px;background-color:red"></div>-->

               <!--<iframe src="http://m.weather.com.cn/m/pn11/weather.htm" width="480" height="70" frameborder="1"></iframe>-->
           </div>
           <!--第二个-->

           <div class="con none">

               <div class="xuanze">
                   <select style="margin-left:-570px;">
                       <option >园博园大街</option>
                       <option >太行大街</option>
                       <option >新城大街</option>
                       <option >迎旭路</option>
                       <option >隆兴路</option>
                   </select>
                   <select>
                       <option >DNF-0001</option>
                       <option >DNF-0002</option>
                       <option >DNF-0003</option>
                       <option >DNF-0004</option>
                       <option >DNF-0005</option>
                   </select>
                   <select id="zhishu" onchange="zhishu()">
                       <option value="1">正常指数</option>
                       <option value="2">普通警报指数</option>
                       <option value="3">严报警报指数</option>
                       <option value="4">危险警报指数</option>
                   </select>
               </div>

               <div class="right">
                   <div class="right_1" style="-webkit-border-top-right-radius:3px;-webkit-border-bottom-right-radius:3px;margin-right:60px;">修改</div>
                   <div class="right_1">添加</div>
                   <div class="right_1">删除</div>
                   <div class="right_1">下移</div>
                   <div class="right_1" style="-webkit-border-top-left-radius:3px;-webkit-border-bottom-right-radius:3px;">上移</div>
               </div>
               <!--正常指数-->
               <div class="table">
                   <div class="form">
                   <table class="form_1">
                       <tr>
                           <th><input type="checkbox"></th>
                           <th>序号</th>
                           <th>设备名称</th>
                           <th>高限设定</th>
                           <th>底限设定</th>
                           <th>量程上限</th>
                           <th>量程下限</th>
                           <th>舱室</th>
                           <th>采样精准</th>
                           <th>警报装置</th>
                       </tr>
                       <tr>
                           <th><input type="checkbox"></th>
                           <th>001</th>
                           <th>CO传感器</th>
                           <th>22.4%</th>
                           <th>19.6%</th>
                           <th>50VOL</th>
                           <th>0VOL</th>
                           <th>水仓电仓燃气仓</th>
                           <th>±1%</th>
                           <th>正常</th>
                       </tr>
                       <tr>
                           <th><input type="checkbox"></th>
                           <th>002</th>
                           <th>甲烷传感器</th>
                           <th>1%</th>
                           <th>0%</th>
                           <th>30VOL</th>
                           <th>0VOL</th>
                           <th>污水仓</th>
                           <th>±0.1%</th>
                           <th>正常</th>
                       </tr>
                       <tr>
                           <th class="form_2"><input type="checkbox"></th>
                           <th class="form_2">003</th>
                           <th class="form_2">硫化氢传感器</th>
                           <th class="form_2">3mg/m³</th>
                           <th class="form_2">0mg/m³</th>
                           <th class="form_2">30VOL</th>
                           <th class="form_2">0VOL</th>
                           <th class="form_2">污水仓</th>
                           <th class="form_2">±0.2mg/m³</th>
                           <th class="form_2">正常</th>
                       </tr>
                       <tr>
                           <th class="form_2"><input type="checkbox"></th>
                           <th class="form_2">004</th>
                           <th class="form_2">二氧化碳传感器</th>
                           <th class="form_2">15%LEL</th>
                           <th class="form_2">0%LEL</th>
                           <th class="form_2">30VOL</th>
                           <th class="form_2">0VOL</th>
                           <th class="form_2">燃气仓</th>
                           <th class="form_2">±1%LEL</th>
                           <th class="form_2">正常</th>
                       </tr>
                       <tr>
                           <th class="form_2"><input type="checkbox"></th>
                           <th class="form_2">005</th>
                           <th class="form_2">温度传感器</th>
                           <th class="form_2">39℃</th>
                           <th class="form_2">-20℃</th>
                           <th class="form_2">100℃</th>
                           <th class="form_2">30℃</th>
                           <th class="form_2">水仓燃气仓</th>
                           <th class="form_2">±1℃</th>
                           <th class="form_2">正常</th>
                       </tr>
                       <tr>
                           <th class="form_2"><input type="checkbox"></th>
                           <th class="form_2">006</th>
                           <th class="form_2">湿度传感器</th>
                           <th class="form_2">65%</th>
                           <th class="form_2">38%</th>
                           <th class="form_2">100%</th>
                           <th class="form_2">0%</th>
                           <th class="form_2">水仓电仓燃气仓</th>
                           <th class="form_2">±1%</th>
                           <th class="form_2">正常</th>
                       </tr>
                       <tr>
                           <th class="form_2"><input type="checkbox"></th>
                           <th class="form_2">007</th>
                           <th class="form_2">温感传感器</th>
                           <th class="form_2">39℃</th>
                           <th class="form_2">-20℃</th>
                           <th class="form_2">100℃</th>
                           <th class="form_2">30℃</th>
                           <th class="form_2">电仓</th>
                           <th class="form_2">±1℃</th>
                           <th class="form_2">正常</th>
                       </tr>
                       <tr>
                           <th class="form_2"><input type="checkbox"></th>
                           <th class="form_2">008</th>
                           <th class="form_2">液位传感器</th>
                           <th class="form_2">70%</th>
                           <th class="form_2">0%</th>
                           <th class="form_2">100%</th>
                           <th class="form_2">0%</th>
                           <th class="form_2">水仓电仓污水仓</th>
                           <th class="form_2">±1℃</th>
                           <th class="form_2">正常</th>
                       </tr>
                       <tr>
                           <th class="form_2"><input type="checkbox"></th>
                           <th class="form_2">009</th>
                           <th class="form_2">温感电缆</th>
                           <th class="form_2">39℃</th>
                           <th class="form_2">-20℃</th>
                           <th class="form_2">100℃</th>
                           <th class="form_2">-20℃</th>
                           <th class="form_2">电仓</th>
                           <th class="form_2">±1℃</th>
                           <th class="form_2">正常</th>
                       </tr>
                   </table>
                   <!--普通警报指数-->

               </div>
                   <div class="form1" >
                       <table class="form1_1">
                           <tr>
                               <th><input type="checkbox"></th>
                               <th>序号</th>
                               <th>设备名称</th>
                               <th>高限设定</th>
                               <th>底限设定</th>
                               <th>量程上限</th>
                               <th>量程下限</th>
                               <th>舱室</th>
                               <th>采样精准</th>
                               <th>警报装置</th>
                           </tr>
                           <tr>
                               <th><input type="checkbox"></th>
                               <th>001</th>
                               <th>CO传感器</th>
                               <th>27%</th>
                               <th>15%</th>
                               <th>50VOL</th>
                               <th>0VOL</th>
                               <th>水仓电仓燃气仓</th>
                               <th>±1%</th>
                               <th>正常</th>
                           </tr>
                           <tr>
                               <th><input type="checkbox"></th>
                               <th>002</th>
                               <th>甲烷传感器</th>
                               <th>1.5%</th>
                               <th>1%</th>
                               <th>30VOL</th>
                               <th>0VOL</th>
                               <th>污水仓</th>
                               <th>±0.1%</th>
                               <th>正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">003</th>
                               <th class="form_2">硫化氢传感器</th>
                               <th class="form_2">6mg/m³</th>
                               <th class="form_2">4mg/m³</th>
                               <th class="form_2">30VOL</th>
                               <th class="form_2">0VOL</th>
                               <th class="form_2">污水仓</th>
                               <th class="form_2">±0.2mg/m³</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">004</th>
                               <th class="form_2">二氧化碳传感器</th>
                               <th class="form_2">25%LEL</th>
                               <th class="form_2">15%LEL</th>
                               <th class="form_2">30VOL</th>
                               <th class="form_2">0VOL</th>
                               <th class="form_2">燃气仓</th>
                               <th class="form_2">±1%LEL</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">005</th>
                               <th class="form_2">温度传感器</th>
                               <th class="form_2">41℃</th>
                               <th class="form_2">39℃</th>
                               <th class="form_2">100℃</th>
                               <th class="form_2">-30℃</th>
                               <th class="form_2">水仓燃气仓</th>
                               <th class="form_2">±1℃</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">006</th>
                               <th class="form_2">湿度传感器</th>
                               <th class="form_2">65%</th>
                               <th class="form_2">38%</th>
                               <th class="form_2">100%</th>
                               <th class="form_2">0%</th>
                               <th class="form_2">水仓电仓燃气仓</th>
                               <th class="form_2">±1%</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">007</th>
                               <th class="form_2">温感电缆</th>
                               <th class="form_2">39℃</th>
                               <th class="form_2">-20℃</th>
                               <th class="form_2">100℃</th>
                               <th class="form_2">30℃</th>
                               <th class="form_2">电仓</th>
                               <th class="form_2">±1℃</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">008</th>
                               <th class="form_2">液位传感器</th>
                               <th class="form_2">70%</th>
                               <th class="form_2">0%</th>
                               <th class="form_2">100%</th>
                               <th class="form_2">0%</th>
                               <th class="form_2">水仓电仓污水仓</th>
                               <th class="form_2">±1℃</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">009</th>
                               <th class="form_2">温感电缆</th>
                               <th class="form_2">39℃</th>
                               <th class="form_2">-20℃</th>
                               <th class="form_2">100℃</th>
                               <th class="form_2">-20℃</th>
                               <th class="form_2">电仓</th>
                               <th class="form_2">±1℃</th>
                               <th class="form_2">正常</th>
                           </tr>

                       </table>
                       <!--严重警报指数-->


                   </div>
                   <div class="form2" >
                       <table class="form1_1">
                           <tr>
                               <th><input type="checkbox"></th>
                               <th>序号</th>
                               <th>设备名称</th>
                               <th>高限设定</th>
                               <th>底限设定</th>
                               <th>量程上限</th>
                               <th>量程下限</th>
                               <th>舱室</th>
                               <th>采样精准</th>
                               <th>警报装置</th>
                           </tr>
                           <tr>
                               <th><input type="checkbox"></th>
                               <th>001</th>
                               <th>CO传感器</th>
                               <th>32%</th>
                               <th>10%</th>
                               <th>50VOL</th>
                               <th>0VOL</th>
                               <th>水仓电仓燃气仓</th>
                               <th>±1%</th>
                               <th>正常</th>
                           </tr>
                           <tr>
                               <th><input type="checkbox"></th>
                               <th>002</th>
                               <th>甲烷传感器</th>
                               <th>2%</th>
                               <th>1.5%</th>
                               <th>30VOL</th>
                               <th>0VOL</th>
                               <th>污水仓</th>
                               <th>±0.1%</th>
                               <th>正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">003</th>
                               <th class="form_2">硫化氢传感器</th>
                               <th class="form_2">8mg/m³</th>
                               <th class="form_2">6mg/m³</th>
                               <th class="form_2">30VOL</th>
                               <th class="form_2">0VOL</th>
                               <th class="form_2">污水仓</th>
                               <th class="form_2">±0.2mg/m³</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">004</th>
                               <th class="form_2">二氧化碳传感器</th>
                               <th class="form_2">50%LEL</th>
                               <th class="form_2">25%LEL</th>
                               <th class="form_2">30VOL</th>
                               <th class="form_2">0VOL</th>
                               <th class="form_2">燃气仓</th>
                               <th class="form_2">±1%LEL</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">005</th>
                               <th class="form_2">温度传感器</th>
                               <th class="form_2">45℃</th>
                               <th class="form_2">-20℃</th>
                               <th class="form_2">100℃</th>
                               <th class="form_2">30℃</th>
                               <th class="form_2">水仓燃气仓</th>
                               <th class="form_2">±1℃</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">006</th>
                               <th class="form_2">湿度传感器</th>
                               <th class="form_2">65%</th>
                               <th class="form_2">38%</th>
                               <th class="form_2">100%</th>
                               <th class="form_2">0%</th>
                               <th class="form_2">水仓电仓燃气仓</th>
                               <th class="form_2">±1%</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">007</th>
                               <th class="form_2">温感传感器</th>
                               <th class="form_2">45℃</th>
                               <th class="form_2">-20℃</th>
                               <th class="form_2">100℃</th>
                               <th class="form_2">30℃</th>
                               <th class="form_2">电仓</th>
                               <th class="form_2">±1℃</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">008</th>
                               <th class="form_2">液位传感器</th>
                               <th class="form_2">85%</th>
                               <th class="form_2">0%</th>
                               <th class="form_2">100%</th>
                               <th class="form_2">0%</th>
                               <th class="form_2">水仓电仓污水仓</th>
                               <th class="form_2">±1℃</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">009</th>
                               <th class="form_2">温感电缆</th>
                               <th class="form_2">45℃</th>
                               <th class="form_2">-20℃</th>
                               <th class="form_2">100℃</th>
                               <th class="form_2">-20℃</th>
                               <th class="form_2">电仓</th>
                               <th class="form_2">±1℃</th>
                               <th class="form_2">正常</th>
                           </tr>

                       </table>

                       <!--危险警报指数-->


                   </div>
                   <div class="form3">
                       <table class="form1_1">
                           <tr>
                               <th><input type="checkbox"></th>
                               <th>序号</th>
                               <th>设备名称</th>
                               <th>高限设定</th>
                               <th>底限设定</th>
                               <th>量程上限</th>
                               <th>量程下限</th>
                               <th>舱室</th>
                               <th>采样精准</th>
                               <th>警报装置</th>
                           </tr>
                           <tr>
                               <th><input type="checkbox"></th>
                               <th>001</th>
                               <th>CO传感器</th>
                               <th>32%</th>
                               <th>10%</th>
                               <th>50VOL</th>
                               <th>0VOL</th>
                               <th>水仓电仓燃气仓</th>
                               <th>±1%</th>
                               <th>正常</th>
                           </tr>
                           <tr>
                               <th><input type="checkbox"></th>
                               <th>002</th>
                               <th>甲烷传感器</th>
                               <th>2%</th>
                               <th>1.5%</th>
                               <th>30VOL</th>
                               <th>0VOL</th>
                               <th>污水仓</th>
                               <th>±0.1%</th>
                               <th>正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">003</th>
                               <th class="form_2">硫化氢传感器</th>
                               <th class="form_2">8mg/m³</th>
                               <th class="form_2">6mg/m³</th>
                               <th class="form_2">30VOL</th>
                               <th class="form_2">0VOL</th>
                               <th class="form_2">污水仓</th>
                               <th class="form_2">±0.2mg/m³</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">004</th>
                               <th class="form_2">二氧化碳传感器</th>
                               <th class="form_2">50%LEL</th>
                               <th class="form_2">25%LEL</th>
                               <th class="form_2">30VOL</th>
                               <th class="form_2">0VOL</th>
                               <th class="form_2">燃气仓</th>
                               <th class="form_2">±1%LEL</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">005</th>
                               <th class="form_2">温度传感器</th>
                               <th class="form_2">45℃</th>
                               <th class="form_2">-20℃</th>
                               <th class="form_2">100℃</th>
                               <th class="form_2">30℃</th>
                               <th class="form_2">水仓燃气仓</th>
                               <th class="form_2">±1℃</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">006</th>
                               <th class="form_2">湿度传感器</th>
                               <th class="form_2">65%</th>
                               <th class="form_2">38%</th>
                               <th class="form_2">100%</th>
                               <th class="form_2">0%</th>
                               <th class="form_2">水仓电仓燃气仓</th>
                               <th class="form_2">±1%</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">007</th>
                               <th class="form_2">温感传感器</th>
                               <th class="form_2">45℃</th>
                               <th class="form_2">-20℃</th>
                               <th class="form_2">100℃</th>
                               <th class="form_2">30℃</th>
                               <th class="form_2">电仓</th>
                               <th class="form_2">±1℃</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">008</th>
                               <th class="form_2">液位传感器</th>
                               <th class="form_2">85%</th>
                               <th class="form_2">0%</th>
                               <th class="form_2">100%</th>
                               <th class="form_2">0%</th>
                               <th class="form_2">水仓电仓污水仓</th>
                               <th class="form_2">±1℃</th>
                               <th class="form_2">正常</th>
                           </tr>
                           <tr>
                               <th class="form_2"><input type="checkbox"></th>
                               <th class="form_2">009</th>
                               <th class="form_2">温感电缆</th>
                               <th class="form_2">45℃</th>
                               <th class="form_2">-20℃</th>
                               <th class="form_2">100℃</th>
                               <th class="form_2">-20℃</th>
                               <th class="form_2">电仓</th>
                               <th class="form_2">±1℃</th>
                               <th class="form_2">正常</th>
                           </tr>
                       </table>

                   </div>
               </div>
           </div>
               <!--第三个-->
               <div class="con none">



               </div>

       </div>
   </div>
</div>
</body>
</html>