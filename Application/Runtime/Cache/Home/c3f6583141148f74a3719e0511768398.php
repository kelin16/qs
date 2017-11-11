<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=11">
    <title>视频</title>
    <link rel="icon" type="" href="/Public/home/images/video/logo2.png">
    <link rel="stylesheet" href="/Public/home/css/navigation.css">
    <link rel="stylesheet" href="/Public/home/css/run/video.css">
    <script src="http://cdn.static.runoob.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="/Public/home/js/jquery-1.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
            //左下图标
            $("#img0").hover(function(){
                $(".shipin p:eq(0)").show();
            },function(){
                $(".shipin p:eq(0)").hide();
            })
            $("#img1").hover(function(){
                $(".shipin p:eq(1)").show();
            },function(){
                $(".shipin p:eq(1)").hide();
            })
            $("#img2").hover(function(){
                $(".shipin p:eq(2)").show();
            },function(){
                $(".shipin p:eq(2)").hide();
            })
            $("#img3").hover(function(){
                $(".shipin p:eq(4)").show();
            },function(){
                $(".shipin p:eq(4)").hide();
            })
            $("#img4").hover(function(){
                $(".shipin p:eq(3)").show();
            },function(){
                $(".shipin p:eq(3)").hide();
            })

            $(".button4 img:eq(0)").hover(function(){
                $(".tishi1:eq(0)").show();
            },function(){
                $(".tishi1:eq(0)").hide();
            })
            $(".button4 img:eq(1)").hover(function(){
                $(".tishi1:eq(1)").show();
            },function(){
                $(".tishi1:eq(1)").hide();
            })
            $(".button4 img:eq(2)").hover(function(){
                $(".tishi1:eq(2)").show();
            },function(){
                $(".tishi1:eq(2)").hide();
            })
            $(".button4 img:eq(3)").hover(function(){
                $(".tishi1:eq(3)").show();
            },function(){
                $(".tishi1:eq(3)").hide();
            })
            $(".button4 img:eq(4)").hover(function(){
                $(".tishi1:eq(4)").show();
            },function(){
                $(".tishi1:eq(4)").hide();
            })


            $("#img0").click(function(){
                $(".button0 span").show();
                $(".button1 span").hide();
                $(".button2 img").hide();
                $(".button3").hide();
            })
            $("#img1").click(function(){
                $(".button0 span").hide();
                $(".button1 span").show();
                $(".button2 img").hide();
                $(".button3").hide();
            })
            $("#img2").click(function(){
                $(".button0 span").hide();
                $(".button1 span").hide();
                $(".button2 img").show();
                $(".button3").hide();
            })
            $("#img3").click(function(){
                $(".button0 span").hide();
                $(".button1 span").hide();
                $(".button2 img").hide();
                $(".button3").show();
            })
            //下拉框
            $(".xiala").click(function(){
                $(".shipin").css("width","704px");
                $(".shipin_1").css("width","337px");
                $(".shipin1").show();
                $(".shipin").show();
                $(".shipin3").hide();
            })

            $(".shipin_1").click(function(){
                $(".shipin").css("width","960px");
                $(".shipin_1").css("width","465px");
                $(".shipin1").hide();

            })
            //地图
            $(".ditu").click(function(){
                $(".shipin").hide();
                $(".shipin1").hide();
                $(".shipin3").show();
            })

            //主辅码流
            $(".tuceng3_1").click(function(){
                $(".tuceng3_1").css("background-color"," #009dda");
                $(".tuceng3_2").css("background-color","#1cd6ff");
            })
            $(".tuceng3_2").click(function(){
                $(".tuceng3_1").css("background-color"," #1cd6ff");
                $(".tuceng3_2").css("background-color","#009dda");
            })
            //摄像头控制

            $(".sanjiao0_1").hover(function(){
                $(".sanjiao0").css("border-bottom","16px solid #ff0000");
            },function(){
                $(".sanjiao0").css("border-bottom","16px solid #ffffff");
            })
            $(".sanjiao1_1").hover(function(){
                $(".sanjiao1").css("border-top","16px solid #ff0000");
            },function(){
                $(".sanjiao1").css("border-top","16px solid #ffffff");
            })

            $(".sanjiao2_1").hover(function(){
                $(".sanjiao2").css("border-right","16px solid #ff0000;");
            },function(){
                $(".sanjiao2").css("border-right","16px solid #ffffff");
            })

            $(".sanjiao3_1").hover(function(){
                $(".sanjiao3").css("border-left","16px solid #ff0000");
            },function(){
                $(".sanjiao3").css("border-left","16px solid #ffffff");
            })
            $(".sanjiao4_1").hover(function(){
                $(".sanjiao4").css("border-left","16px solid #ff0000");
            },function(){
                $(".sanjiao4").css("border-left","16px solid #ffffff");
            })
            $(".sanjiao5_1").hover(function(){
                $(".sanjiao5").css("border-bottom","16px solid #ff0000");
            },function(){
                $(".sanjiao5").css("border-bottom","16px solid #ffffff");
            })
            $(".sanjiao6_1").hover(function(){
                $(".sanjiao6").css("border-top","16px solid #ff0000");
            },function(){
                $(".sanjiao6").css("border-top","16px solid #ffffff");
            })
            $(".sanjiao7_1").hover(function(){
                $(".sanjiao7").css("border-right","16px solid #ff0000");
            },function(){
                $(".sanjiao7").css("border-right","16px solid #ffffff");
            })

            $(".shipin3_1:eq(0)").click(function(){
                var UR=$(this).find(".shipin3_2:eq(0)");
                if(UR.css("display")=="block"){
                    UR.css("display","none");
                }else{
                    UR.css("display","block");
                }
            })

            $("#shi1").click(function(){
                var UZ=$(this).find("#pin1");
                if(UZ.css("display")=="block"){
                    UZ.css("display","none");
                }else{
                    UZ.css("display","block");
                }
            })

            $("#shi2").click(function(){
                var UR=$(this).find("#pin2");
                if(UR.css("display")=="block"){
                    UR.css("display","none");
                }else{
                    UR.css("display","block");
                }
            })

            $("#shi3").click(function(){
                var UR=$(this).find("#pin3");
                if(UR.css("display")=="block"){
                    UR.css("display","none");
                }else{
                    UR.css("display","block");
                }
            })

        })
    </script>
    <style>
        /*删除部分*/
        .del{
            background-image: url('/Public/home/images/video/delete.png');
            background-size: 100%;
            /*background-repeat: no-repeat;*/
            width:15px;
            height: 15px;
            position: absolute;
            z-index:3;
            top: 1px;
            right: 1px;
            background-color: #FFFFFF;
            display: none;
        }
        /*云台控制部分*/
        .ptz{
            background-image: url('/Public/home/images/video/ptz.png');
            background-size: 100%;
            width:15px;
            height: 15.7px;
            position: absolute;
            z-index:3;
            bottom: 1px;
            left: 53%;
            background-color: #FFFFFF;
            display: none;
        }
        /*抓拍设置*/
        .screens{
            background-image: url('/Public/home/images/video/snapshot.png');
            background-size: 100%;
            width:15px;
            height: 15px;
            position: absolute;
            z-index:3;
            bottom: 1px;
            left: 46%;
            background-color:#FFFFFF;
            display: none;
        }
        /*录像设置*/
        .record{
            background-image: url('/Public/home/images/video/video.png');
            background-size: 100%;
            width: 15px;
            height: 15px;
            position: absolute;
            z-index: 3;
            bottom: 1px;
            left: 60%;
            background-color: #FFFFFF;
            display: none;
        }
    </style>
</head>
<body>
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
                <li><a href="/index.php/home/run/index">系统运行</a></li>
                <li><a href="/index.php/home/Eqpt/index.html">系统设备</a></li>
                <li><a href="#">档案管理</a></li>
                <li><a href="#">报警信息</a></li>
                <li>
                    <a href="#" >巡查巡检</a>
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
            <img src="/Public/home/images/run/u144.png" alt="" style="margin-left:5px;position: relative">
            &nbsp;你好！Admin</div>

        <div class="setting"><a href="/index.php/home/Setting/setting" >
            <img src="/Public/home/images/run/u148.png" alt="" >
        </a></div>

    </div>
    <!--导航条结束-->

    <!--主区-->
    <div class="content">
        <!--视图切换按钮-->
        <div class="switchViewBtn">
            <a href="/index.php/home/run/playback"><img src="/Public/home/images/run/playback2.png" alt="视频"><br>回放</a>
            <a href="/index.php/home/run/video"><img src="/Public/home/images/run/video.png" alt="视频"><br>预览</a>
            <a href="/index.php/home/Eqpt/index.html"><img src="/Public/home/images/run/fire.png" alt="防火" style="width: 20px; padding-bottom: 3px;"><br>防火分区</a>
            <a href="/index.php/home/run/map"><img src="/Public/home/images/run/gis.png" alt="GIS"><br>GIS</a>
            <a href="/index.php/home/run/run"><img src="/Public/home/images/run/view.png" alt="视图"><br>三视图</a>
        </div>

        <div class="xiala"><p>下</br>拉</br>框</p></div>
        <div class="ditu"><p>地</br></br>图</p></div>

        <!--视频区1-->
        <div class="shipin">
            <div class="shipin_1"></div>
            <div class="shipin_1"></div>
            <div class="shipin_1"></div>
            <div class="shipin_1"></div>

            <img src="/Public/home/images/run/高.png" alt="" style="width:25px;height:25px;"id="img0">
            <div class="button0">
                <span>4:3</span>
                <span>16:9</span>
                <span>x1</span>
            </div>
            <p style="left:8px;">宽高比</p>
            <img src="/Public/home/images/run/清晰.png" alt="" style="width:25px;height:25px;"id="img1">
            <div class="button1">
                <span>普通</span>
                <span>流畅</span>
                <span>高清</span>
            </div>
            <p style="left:48px;">清晰度</p>
            <img src="/Public/home/images/run/视频.png" alt="" style="width:25px;height:25px;"id="img2">
            <div class="button2">
                <img src="/Public/home/images/run/kuang.png" alt="" >
                <img src="/Public/home/images/run/kuang1.png" alt="">
                <img src="/Public/home/images/run/kuang2.png" alt="">
            </div>
            <p style="left:88px;">分界面</p>
            <img src="/Public/home/images/run/流畅.png" alt="" style="width:25px;height:25px;" id="img4">
            <p style="left:135px;">全屏</p>
            <img src="/Public/home/images/run/清晰度.png" alt="" style="width:25px;height:25px;"id="img3">

            <div class="button3">
                <img src="/Public/home/images/run/01.png" alt=""
                     style="margin-top:3px;margin-left:10px;">
                <div class="zhu"><div class="zhu_1"></div></div>
                <img src="/Public/home/images/run/02.png" alt=""
                     style="margin-top:28px;margin-left:10px;">
                <div class="zhu" style="left:130px;"><div class="zhu_1"></div></div>
                <img src="/Public/home/images/run/03.png" alt=""
                     style="margin-left:102px;margin-top:3px;">
                <div class="zhu" style="top:36px;"><div class="zhu_1"></div></div>
                <img src="/Public/home/images/run/04.png" alt=""
                     style="margin-left:102px;margin-top:28px;">
                <div class="zhu" style="top:36px;left:130px;"><div class="zhu_1"></div></div>
            </div>
            <p style="left:175px;">色彩</p>
            <div class="button4">
                <img src="/Public/home/images/run/you1.png" alt="" style="width:25px;height:25px;margin-right: 18px;">

                <img src="/Public/home/images/run/you2.png" alt="" style="width:25px;height:25px;">

                <img src="/Public/home/images/run/you3.png" alt="" style="width:25px;height:25px;">

                <img src="/Public/home/images/run/you4.png" alt="" style="width:25px;height:25px;">

                <img src="/Public/home/images/run/you5.png" alt="" style="width:25px;height:25px;">

            </div>
            <div style="right:19px;" class="tishi1">警报</div>
            <div style="right:65px;" class="tishi1">抓拍</div>
            <div style="right:108px;" class="tishi1">录像</div>
            <div style="right:153px;" class="tishi1">语音</div>
            <div style="right:198px;" class="tishi1">收音</div>
        </div>
        <!--视频区2-->
        <div class="shipin1">
            <!--左边搜索-->
            <input type="text" placeholder="搜索">
            <img src="/Public/home/images/run/搜索.png" alt="" style="width:25px;height:25px;">
            <select>
                <option >园博园大街</option>
                <option >太行大街</option>
                <option >新城大街</option>
                <option >迎旭路</option>
                <option >隆兴路</option>
            </select>
            <select>
                <option >第一段</option>
                <option >第二段</option>
                <option >第三段</option>
                <option >第四段</option>
                <option >第五段</option>
            </select>
            <select>
                <option >普通</option>
                <option >动检</option>
                <option >报警</option>
            </select>
            <div class="shipin1_1">
                <P>AEFDE-WEFHH-001</P>
                <P>AEFDE-WEFHH-002</P>
                <P>AEFDE-WEFHH-003</P>
                <P>AEFDE-WEFHH-004</P>
                <P>AEFDE-WEFHH-005</P>
                <P>AEFDE-WEFHH-006</P>
            </div>
        </div>
        <!--视频区3-->
        <div class="shipin3">

            <div class="shipin3_1" style="top:50px;left:100px">
                <div class="shipin3_2">
                    <div class="shipin3_3"></div>
                </div>
            </div>
            <div class="shipin3_1" style="top:50px;left:600px;" id="shi1">
                <div class="shipin3_2" id="pin1">
                    <div class="shipin3_3"></div>
                </div>
            </div>
            <div class="shipin3_1" style="top:450px;left:100px" id="shi2">
                <div class="shipin3_2" id="pin2">
                    <div class="shipin3_3"></div>
                </div>
            </div>
            <div class="shipin3_1" style="top:450px;left:600px;" id="shi3">
                <div class="shipin3_2" id="pin3">
                    <div class="shipin3_3"></div>
                </div>
            </div>
        </div>
        <!--控制区-->
        <div class="kongzhi">
                <div class="tuceng">
                <img src="/Public/home/images/run/异性9.png" alt="" class="tuxing">

                <div class="sanjiao0">
                    <img src="/Public/home/images/run/异性2.png" alt="" class="sanjiao0_1" >
                </div>
                <div class="sanjiao1">
                    <img src="/Public/home/images/run/异性6.png" alt="" class="sanjiao1_1" >
                </div>

                <div class="sanjiao2">
                    <img src="/Public/home/images/run/异性7.png" alt="" class="sanjiao2_1" >
                </div>

                <div class="sanjiao3">
                    <img src="/Public/home/images/run/异性4.png" alt="" class="sanjiao3_1" >
                </div>
                <div class="sanjiao4">
                    <img src="/Public/home/images/run/异性5.png" alt="" class="sanjiao4_1" >
                </div>
                <div class="sanjiao5">
                    <img src="/Public/home/images/run/异性3.png" alt="" class="sanjiao5_1" >
                </div>
                <div class="sanjiao6">
                    <img src="/Public/home/images/run/异性1.png" alt="" class="sanjiao6_1" >
                </div>
                <div class="sanjiao7">
                    <img src="/Public/home/images/run/异性8.png" alt="" class="sanjiao7_1" >
                </div>
                <div class="jiajian">
                    <div class="jian" sy><h1>-</h1></div>
                    <div class="di"><div class="mian"></div></div>

                    <div class="jia"><h1>+</h1></div>
                </div>
            </div>
            <div class="tuceng1">
                <div class="tuceng1_1"><img src="/Public/home/images/run/jian.png" alt="" style="width:17px;height:17px;">
                &nbsp;&nbsp;&nbsp;焦距&nbsp;&nbsp;&nbsp;
                <img src="/Public/home/images/run/+.png" alt="" style="width:17px;height:17px;margin-top:3px;"></div>
                <div class="tuceng1_1"><img src="/Public/home/images/run/jian.png" alt="" style="width:17px;height:17px;">
                    &nbsp;&nbsp;&nbsp;光圈&nbsp;&nbsp;&nbsp;
                    <img src="/Public/home/images/run/+.png" alt="" style="width:17px;height:17px;margin-top:3px;">
                </div>
                <div class="tuceng1_1"><img src="/Public/home/images/run/jian.png" alt="" style="width:17px;height:17px;">
                    &nbsp;&nbsp;&nbsp;聚焦&nbsp;&nbsp;&nbsp;
                    <img src="/Public/home/images/run/+.png" alt="" style="width:17px;height:17px;margin-top:3px;">
                </div>
            </div>
            <div class="tuceng2">
                <div class="tuceng2_1">云台功能</div>
                <div class="tuceng2_2">
                    <select>
                    <option >线性扫描</option>
                    <option >预置点</option>
                    <option >巡航组</option>
                    <option >寻迹</option>
                    <option >辅助功能</option>
                    <option >精准定位</option>
                    <option >水平旋转</option>
                    </select>
                    <button>开&nbsp;始</button>
                    <button>结&nbsp;束</button>
                </div>
            </div>

            <div class="tuceng3_1">主码流</div>
            <div class="tuceng3_2">辅码流</div>

        </div>

    </div>
            <!--搜索视频云台
            <div class="contentView">
-->
                <!--选择搜索
                <div class="select">
                    <input type="text" placeholder="搜索" style="height:20px;line-height:22px;width:193px; margin: 5px 0 0;" >
                    <img src="/Public/home/images/video/search.png" alt="搜索" style="height:22px; position: absolute; top: 5px; left: 168px;"><br>
                    <select name="street" class="street" style="width:195px;height:22px; margin-top: 10px">
                        <option value="ying">迎旭路</option>
                        <option value="yuan">园博园大街</option>
                        <option value="tai">太行大街</option>
                        <option value="xin">新城大街</option>
                        <option value="long">隆兴路</option>
                    </select>
                    <br>
                    <div class="rtspSelect">
                        <button onclick="changeRtsp('dahua')">大华</button>
                        <button onclick="changeRtsp('haikang')">海康</button>
                    </div>

                </div>
-->
                <!--视频区域
                <div class="videoDiv border">
                    <div id="objDiv1" class="objDivFour blockV ">
-->
                        <!--vlc插件
                        <object classid="clsid:146FF3A3-49EA-4AAC-B4BD-3E181394265F" width="100%" height="100%" id="obj1" style="position:absolute ; top:0px; left:0px; z-index: -1">
                        </object>
-->
                        <!--覆盖层
                        <div id="vidLayer1" class="vidLayer">
                            <a href="javascript:gain_id(1)">
                                <iframe frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true"
                                        style="visibility:inherit; top:0px;left:0px;width:100%; height:100%; filter:alp(opacity=0); background-color:black; z-index:8">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--删除按钮
                        <div id="del1" class="del">
                            <a href="javascript:closeVideo(1)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0"   allowtransparency="true" id="iframe"  style="width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--云台控制
                        <div id="ptz1" class="ptz">
                            <a href="javascript:gain_id(1)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="ifrPtz1"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>

-->
                        <!--抓拍设置
                        <div id="screens1" class="screens">
                            <a href="javascript:screenshot(1)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="screens1" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--录像设置
                        <div id="record1" class="record">
                            <a href="javascript:getRecord(1)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="record1" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>

                    </div>

                    <div id="objDiv2" class="objDivFour blockV">-->
                        <!--覆盖层
                        <div id="vidLayer2" class="vidLayer">
                            <a href="javascript:gain_id(2)">
                                <iframe frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true"
                                        style="visibility:inherit; top:0px;left:0px;width:100%; height:100%; filter:alp(opacity=0); background-color:black; z-index:8">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--删除按钮
                        <div id="del2" class="del">
                            <a href="javascript:closeVideo(2)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0"   allowtransparency="true" id="iframe"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--云台控制
                        <div id="ptz2" class="ptz">
                            <a href="javascript:gain_id(2)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="ifrPtz1"  style=" float: right; top:0px;left:10px;width:100%; height:100%">

                                </iframe>
                            </a>
                        </div>

-->
                        <!--抓拍设置
                        <div id="screens2" class="screens">
                            <a href="javascript:screenshot(2)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="screens1" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--录像设置
                        <div id="record2" class="record">
                            <a href="javascript:getRecord(2)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="record2" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--vlc插件
                        <object classid="clsid:146FF3A3-49EA-4AAC-B4BD-3E181394265F" width="100%" height="100%" id="obj2" style="position:absolute ; top:0px; left:0px">
                        </object>
                    </div>

                    <div id="objDiv3" class=" objDivFour blockV">-->
                        <!--覆盖层
                        <div id="vidLayer3" class="vidLayer">
                            <a href="javascript:gain_id(3)">
                                <iframe frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true"
                                        style="visibility:inherit; top:0px;left:0px;width:100%; height:100%; filter:alp(opacity=0); background-color:black; z-index:8">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--删除按钮
                        <div id="del3" class="del">
                            <a href="javascript:closeVideo(3)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0"   allowtransparency="true" id="iframe"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--云台控制
                        <div id="ptz3" class="ptz">
                            <a href="javascript:gain_id(3)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="ifrPtz1"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--抓拍设置
                        <div id="screens3" class="screens">
                            <a href="javascript:screenshot(3)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="screens1" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>-->
                        <!--录像设置
                        <div id="record3" class="record">
                            <a href="javascript:getRecord(3)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="record3" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--vlc插件
                        <object classid="clsid:146FF3A3-49EA-4AAC-B4BD-3E181394265F" width="100%" height="100%" id="obj3" style="position:absolute ; top:0px; left:0px">
                        </object>
                    </div>

                    <div id="objDiv4" class="objDivFour blockV">-->
                        <!--覆盖层
                        <div id="vidLayer4" class="vidLayer">
                            <a href="javascript:gain_id(4)">
                                <iframe frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true"
                                        style="visibility:inherit; top:0px;left:0px;width:100%; height:100%; filter:alp(opacity=0); background-color:black; z-index:8">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--删除按钮
                        <div id="del4" class="del">
                            <a href="javascript:closeVideo(4)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0"   allowtransparency="true" id="iframe"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--云台控制
                        <div id="ptz4" class="ptz">
                            <a href="javascript:gain_id(4)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="ifrPtz1"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--抓拍设置
                        <div id="screens4" class="screens">
                            <a href="javascript:screenshot(4)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="screens4" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--录像设置
                        <div id="record4" class="record">
                            <a href="javascript:getRecord(4)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="record4" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>-->
                        <!--vlc插件
                        <object classid="clsid:146FF3A3-49EA-4AAC-B4BD-3E181394265F" width="100%" height="100%" id="obj4" style="position:absolute ; top:0px; left:0px">
                        </object>
                    </div>

                    <div id="objDiv5" class="noneV">-->
                        <!--覆盖层
                        <div id="vidLayer5" class="vidLayer">
                            <a href="javascript:gain_id(5)">
                                <iframe frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true"
                                        style="visibility:inherit; top:0px;left:0px;width:100%; height:100%; filter:alp(opacity=0); background-color:black; z-index:8">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--删除按钮
                        <div id="del5" class="del">
                            <a href="javascript:closeVideo(5)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0"   allowtransparency="true" id="iframe"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--云台控制
                        <div id="ptz5" class="ptz">
                            <a href="javascript:gain_id(5)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="ifrPtz1"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--抓拍设置
                        <div id="screens5" class="screens">
                            <a href="javascript:screenshot(5)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="screens1" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--录像设置
                        <div id="record5" class="record">
                            <a href="javascript:getRecord(5)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="record5" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>-->
                        <!--vlc插件
                        <object classid="clsid:146FF3A3-49EA-4AAC-B4BD-3E181394265F" width="100%" height="100%" id="obj5" style="position:absolute ; top:0px; left:0px">
                        </object>
                    </div>

                    <div id="objDiv6" class="noneV ">-->
                        <!--覆盖层
                        <div id="vidLayer6" class="vidLayer">
                            <a href="javascript:gain_id(6)">
                                <iframe frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true"
                                        style="visibility:inherit; top:0px;left:0px;width:100%; height:100%; filter:alp(opacity=0); background-color:black; z-index:8">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--删除按钮
                        <div id="del6" class="del">
                            <a href="javascript:closeVideo(6)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0"   allowtransparency="true" id="iframe"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--云台控制
                        <div id="ptz6" class="ptz">
                            <a href="javascript:gain_id(6)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="ifrPtz1"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--抓拍设置
                        <div id="screens6" class="screens">
                            <a href="javascript:screenshot(6)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="screens1" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--录像设置
                        <div id="record6" class="record">
                            <a href="javascript:getRecord(6)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="record6" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>-->
                        <!--vlc插件
                        <object classid="clsid:146FF3A3-49EA-4AAC-B4BD-3E181394265F" width="100%" height="100%" id="obj6" style="position:absolute ; top:0px; left:0px">
                        </object>
                    </div>

                    <div id="objDiv7" class="noneV ">-->
                        <!--覆盖层
                        <div id="vidLayer7" class="vidLayer">
                            <a href="javascript:gain_id(7)">
                                <iframe frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true"
                                        style="visibility:inherit; top:0px;left:0px;width:100%; height:100%; filter:alp(opacity=0); background-color:black; z-index:8">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--删除按钮
                        <div id="del7" class="del">
                            <a href="javascript:closeVideo(7)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0"   allowtransparency="true" id="iframe"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--云台控制
                        <div id="ptz7" class="ptz">
                            <a href="javascript:gain_id(7)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="ifrPtz1"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--抓拍设置
                        <div id="screens7" class="screens">
                            <a href="javascript:screenshot(7)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="screens1" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--录像设置
                        <div id="record7" class="record">
                            <a href="javascript:getRecord(7)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="record7" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>-->
                        <!--vlc插件
                        <object classid="clsid:146FF3A3-49EA-4AAC-B4BD-3E181394265F" width="100%" height="100%" id="obj7" style="position:absolute ; top:0px; left:0px">
                        </object>
                    </div>

                    <div id="objDiv8" class="noneV ">-->
                        <!--覆盖层
                        <div id="vidLayer8" class="vidLayer">
                            <a href="javascript:gain_id(8)">
                                <iframe frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true"
                                        style="visibility:inherit; top:0px;left:0px;width:100%; height:100%; filter:alp(opacity=0); background-color:black; z-index:8">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--删除按钮
                        <div id="del8" class="del">
                            <a href="javascript:closeVideo(8)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0"   allowtransparency="true" id="iframe"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--云台控制
                        <div id="ptz8" class="ptz">
                            <a href="javascript:gain_id(8)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="ifrPtz1"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--抓拍设置
                        <div id="screens8" class="screens">
                            <a href="javascript:screenshot(8)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="screens1" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--录像设置
                        <div id="record8" class="record">
                            <a href="javascript:getRecord(8)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="record8" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>-->
                        <!--vlc插件
                        <object classid="clsid:146FF3A3-49EA-4AAC-B4BD-3E181394265F" width="100%" height="100%" id="obj8" style="position:absolute ; top:0px; left:0px">
                        </object>
                    </div>

                    <div id="objDiv9" class=" noneV">-->
                        <!--覆盖层
                        <div id="vidLayer9" class="vidLayer">
                            <a href="javascript:gain_id(9)">
                                <iframe frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true"
                                        style="visibility:inherit; top:0px;left:0px;width:100%; height:100%; filter:alp(opacity=0); background-color:black; z-index:8">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--删除按钮
                        <div id="del9" class="del">
                            <a href="javascript:closeVideo(9)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0"   allowtransparency="true" id="iframe"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--云台控制
                        <div id="ptz9" class="ptz">
                            <a href="javascript:gain_id(9)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="ifrPtz9"  style=" float: right; top:0px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--抓拍设置
                        <div id="screens9" class="screens">
                            <a href="javascript:screenshot(9)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="screens9" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>
-->
                        <!--录像设置
                        <div id="record9" class="record">
                            <a href="javascript:getRecord(9)">
                                <iframe  frameBorder="0" marginHeight="0" marginWidth="0" allowtransparency="true" id="record9" style=" float: right; top:100px;left:10px;width:100%; height:100%">
                                </iframe>
                            </a>
                        </div>-->
                        <!--vlc插件
                        <object classid="clsid:146FF3A3-49EA-4AAC-B4BD-3E181394265F" width="100%" height="100%" id="obj9" style="position:absolute ; top:0px; left:0px">
                        </object>
                    </div>

                </div>
-->

                <!--云台控制
                <div class="ctl border">

                    <div style="text-align:center;background-color: #C0C0C0;margin: 20px 0;">云台控制</div>
                    <table width="100%">
                        <tr>
                            <td width="100%">
                                <table width="100%" style="padding: 0 10px;" >
                                    <tr height="40px">
                                        <td width="33%" align="center" class="ctlImg">
                                            <img id="ctlImg1" src="/Public/home/images/ptz/5.png" width="26px" height="26px" onMouseDown = "PTZControl('PTZLeftUp')" onMouseUp="ctlImg5.src = '/Public/home/images/ptz/01.png'; PTZControl('PTZStop')">
                                        </td>
                                        <td width="33%" align="center">

                                            <img id="ctlImg2" src="/Public/home/images/ptz/1.png" width="26px" height="26px" onMouseDown="PTZControl('PTZUp')" onMouseUp="ctlImg5.src = '/Public/home/images/ptz/01.png'; PTZControl('PTZStop')" >
                                        </td>
                                        <td width="33%" align="center">
                                            <img id="ctlImg3" src="/Public/home/images/ptz/6.png" width="26px" height="26px" onMouseDown="PTZControl('PTZRightUp')" onMouseUp="ctlImg5.src = '/Public/home/images/ptz/01.png'; PTZControl('PTZStop')">
                                        </td>
                                    </tr>
                                    <tr height="40px">
                                        <td align="center">
                                            <img id="ctlImg4" src="/Public/home/images/ptz/3.png" width="26px" height="26px" onMouseDown="PTZControl('PTZLeft')" onMouseUp="ctlImg5.src = '/Public/home/images/ptz/01.png'; PTZControl('PTZStop')">
                                        </td>
                                        <td align="center">
                                            <img id="ctlImg5" src="/Public/home/images/ptz/01.png" width="26px" height="26px" >

                                        </td>
                                        <td align="center">
                                            <img id="ctlImg6" src="/Public/home/images/ptz/4.png" width="26px" height="26px" onMouseDown="PTZControl('PTZRight')" onMouseUp="ctlImg5.src = '/Public/home/images/ptz/01.png'; PTZControl('PTZStop')">
                                        </td>
                                    </tr>
                                    <tr height="40px">
                                        <td align="center">
                                            <img id="ctlImg7" src="/Public/home/images/ptz/7.png" width="26px" height="26px" onMouseDown="PTZControl('PTZLeftDown')" onMouseUp="ctlImg5.src = '/Public/home/images/ptz/01.png'; PTZControl('PTZStop')">
                                        </td>
                                        <td align="center">
                                            <img id="ctlImg8" src="/Public/home/images/ptz/2.png" width="26px" height="26px" onMouseDown="PTZControl('PTZDown')" onMouseUp="ctlImg5.src = '/Public/home/images/ptz/01.png'; PTZControl('PTZStop')">
                                        </td>
                                        <td align="center">
                                            <img id="ctlImg9" src="/Public/home/images/ptz/8.png" width="26px" height="26px" onMouseDown="PTZControl('PTZRightDown')" onMouseUp="ctlImg5.src = '/Public/home/images/ptz/01.png';PTZControl('PTZStop')">
                                        </td>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                    </table>
-->
                  <!--调焦部分
                    <table width="100%"  style="color: #1E1E1E; font-size: 13px">
                        <tr>
                            <td width="40%">
                                <table width="100%" style="padding: 0 15px;" >
                                    <tr height="30px">
                                        <td width="33%" align="center">
                                            <input type="button" value="+" onMouseDown="PTZControl('PTZAddTimes')" onMouseUp="PTZControl('PTZStop')" style="width:25px;height:21px;"/>
                                        </td>
                                        <td width="33%" align="center">焦距</td>
                                        <td width="34%" align="center">
                                            <input type="button" value="-" onMouseDown="PTZControl('PTZMinusTimes')" onMouseUp="PTZControl('PTZStop')" style="width:25px;height:21px;"/>
                                        </td>
                                    </tr>
                                    <tr height="30px">
                                        <td align="center">
                                            <input type="button" value="+" onMouseDown="PTZControl('PTZFarFocus')" onMouseUp="PTZControl('PTZStop')" style="width:25px;height:21px;"/>
                                        </td>
                                        <td align="center">焦点</td>
                                        <td align="center">
                                            <input type="button" value="-" onMouseDown="PTZControl('PTZNearFocus')"  onMouseUp="PTZControl('PTZStop')" style="width:25px;height:21px;"/>
                                        </td>
                                    </tr>
                                    <tr height="30px">
                                        <td align="center">
                                            <input type="button" value="+" onMouseDown="PTZControl('PTZLargeAperture')" onMouseUp="PTZControl('PTZStop')" style="width:25px;height:21px;"/>
                                        </td>
                                        <td align="center">光圈</td>
                                        <td align="center">
                                            <input type="button" value="-" onMouseDown="PTZControl('PTZSmallAperture')" onMouseUp="PTZControl('PTZStop')" style="width:25px;height:21px;"/>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
-->
                    <!--表格结束-->

                    <!--云台功能开始
                    <div style="text-align:center;background-color: #C0C0C0;margin:50px 0 20px;">云台功能</div>
                    <div width="100%" height="300px" style="background-color: red;margin-top: 5px;">
                        <select name="" id="" class="ptzFunction">
                            <option value="">线性扫描</option>
                            <option value="">预置点</option>
                            <option value="">巡航组</option>
                            <option value="">巡迹</option>
                            <option value="">辅助功能</option>
                            <option value="">精确定位</option>
                            <option value="">水平旋转</option>
                        </select>
                    </div>
                    云台功能结束
                </div>
            </div>
-->
            <!--视频回放功能
            <div class="vidBot">
                <div class="vidBotCtl">
                    <!--<div class="vidBotCtl1">-->
                        <!--<img src="/Public/home/images/video/u274.png" alt="">-->
                        <!--<img src="/Public/home/images/video/u270.png" alt="">-->
                        <!--<img src="/Public/home/images/video/u272.png" alt="">-->
                        <!--<img src="/Public/home/images/video/u257.png" alt="">-->
                        <!--<img src="/Public/home/images/video/u258.png" alt="">-->
                        <!--<img src="/Public/home/images/video/u264.png" alt="">-->
                        <!--<img src="/Public/home/images/video/u266.png" alt="">-->
                        <!--<span id="time">time</span>-->
                        <!--<img src="/Public/home/images/video/download.png" alt="下载" style="position: relative; left: 100px;" >-->
                        <!--<img src="/Public/home/images/video/camera.png" alt="拍照" style="position: relative; left: 100px;" >-->
                    <!--</div>-->
<!--
                    <div class="vidBotCtl2">
                        <img src="/Public/home/images/video/fourV.png" alt="四视图" id="fourView">
                        <img src="/Public/home/images/video/fullscreen.png" alt="全屏">
                        <div class="vidBotCtl2ViewBtn">
                            <img src="/Public/home/images/video/oneV.png" alt="" id="oneV">
                            <img src="/Public/home/images/video/fourV.png" alt="" id="fourV">
                            <img src="/Public/home/images/video/sixV.png" alt="" id="sixV">
                            <img src="/Public/home/images/video/nineV.png" alt="" id="nineV">
                        </div>
                    </div>
                </div>
                <div class="vidBotBac">-->
                    <!--<img src="/Public/home/images/video/u276.png" alt="">


            </div>

        </div>
    </div>
</div>-->
<script src="/Public/home/js/run/video.js"></script>
</body>
<script>

var ctlImg5 = document.getElementById('ctlImg5');
var direct;
var num;
    $("#ctlImg5").toggle(
        function () {
            brand = arr[id-1];
            document.getElementById('ctlImg5').src = '/Public/home/images/ptz/011.png';
            StartTask_PTZ(23,brand);
        },
        function () {
            brand = arr[id-1];
            document.getElementById('ctlImg5').src = '/Public/home/images/ptz/01.png';
            StartTask_PTZ(1,brand);
        }
    );

    //    云台控制
    function PTZControl(funcName){
        brand = arr[id-1];
//        direct;

//        num;
        var res = null;
        switch(funcName){
            case "PTZLeftUp":
                document.getElementById('ctlImg1').src = '/Public/home/images/ptz/55.png';
                res = StartTask_PTZ(25,brand);	//云台：左上
                direct = 'ctlImg1';
                num = 5;
                break;
            case "PTZUp":
                document.getElementById('ctlImg2').src = '/Public/home/images/ptz/11.png';
                res = StartTask_PTZ(21,brand);	//云台：上
                direct = 'ctlImg2';
                num = 1;
                break;
            case "PTZRightUp":
                document.getElementById('ctlImg3').src = '/Public/home/images/ptz/66.png';
                res = StartTask_PTZ(26,brand);	//云台：右上
                direct = 'ctlImg3';
                num = 6;
                break;
            case "PTZLeft":
                document.getElementById('ctlImg4').src = '/Public/home/images/ptz/33.png';
                res = StartTask_PTZ(23,brand);	//云台：左
                direct = 'ctlImg4';
                num = 3;
                break;
            case "PTZAuto":
                //document.getElementById('ctlImg5').src = '/Public/home/images/ptz/011.png';
                res = StartTask_PTZ(29,brand);	//云台：自转
                direct = 'ctlImg5';
                num = '01';
//                console.log(direct);
//                console.log(num);
                break;
            case "PTZRight":
                document.getElementById('ctlImg6').src = '/Public/home/images/ptz/44.png';
                res = StartTask_PTZ(24,brand);	//云台：右
                direct = 'ctlImg6';
                num = 4;
                break;
            case "PTZLeftDown":
                document.getElementById('ctlImg7').src = '/Public/home/images/ptz/77.png';
                res = StartTask_PTZ(27,brand);	//云台：左下
                direct = 'ctlImg7';
                num = 7;
                break;
            case "PTZDown":
                document.getElementById('ctlImg8').src = '/Public/home/images/ptz/22.png';
                res = StartTask_PTZ(22,brand);	//云台：下
                direct = 'ctlImg8';
                num = 2;
                break;
            case "PTZRightDown":
                document.getElementById('ctlImg9').src = '/Public/home/images/ptz/88.png';
                res = StartTask_PTZ(28,brand);	//云台：右下
                direct = 'ctlImg9';
                num = 8;
                break;
            case "PTZStop":
//                console.log(direct);
//                console.log(num);
                document.getElementById(direct).src = '/Public/home/images/ptz/'+num+'.png';
                //alert(direct);
                res = StartTask_PTZ(1,brand);	//云台：停止
                break;
            case "PTZAddTimes":
                res = StartTask_PTZ(11,brand);	//云台：焦距+
                break;
            case "PTZMinusTimes":
                res = StartTask_PTZ(12,brand);	//云台：焦距-
                break;
            case "PTZFarFocus":
                res = StartTask_PTZ(13,brand);	//云台：焦点+
                break;
            case "PTZNearFocus":
                res = StartTask_PTZ(14,brand);	//云台：焦点-
                break;
            case "PTZLargeAperture":
                res = StartTask_PTZ(15,brand);	//云台：光圈+
                break;
            case "PTZSmallAperture":
                res = StartTask_PTZ(16,brand);	//云台：光圈-
                break;
        }
    }

    function StartTask_PTZ(ptz,brand) {
        $.ajax({
            async:true,
            url: "/index.php/home/run/ptz?method=GetDateTime&datetime=" + new Date().getTime()+"&ptz="+ptz+"&brand="+brand,
            success: function(data){
                //console.log(data);
            }
        });
        //alert(url+user+pwd+profiletoken);
    }
</script>
</html>