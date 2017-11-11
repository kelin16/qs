<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="x-ua-compatible" content="IE=10">
    <meta charset="UTF-8">
    <title>系统设备</title>
    <link rel="icon" type="" href="/Public/home/images/video/logo2.png">
    <link rel="stylesheet" href="/Public/home/css/navigation.css">
    <link rel="stylesheet" href="/Public/home/css/eqpt/fireprevention.css">
    <script src="/Public/home/js/jquery-1.7.1.min.js"></script>
    <script src="/Public/home/js/jquery-3.2.1.min.js"></script>

    <script src="/Public/home/js/run/lib/lib_Ajax/MicrosoftAjax.js"></script>
    <script src="/Public/home/js/run/lib/lib_Ajax/SuperMap-7.0.1-11323.js"></script>
    <script src="/Public/home/js/run/lib/lib_Realspace/SuperMap.Web.Realspace.js"></script>
    <!--<script>
        setInterval('refresh()',3000);
        function refresh(){
            $.ajax({
                url:'/index.php/home/eqpt/temp',
                type:'POST',
                async:true,    //或false,是否异步
                success:function(result){
                    console.log(result);
                    //eval() 函数可计算某个字符串，并执行其中的的 JavaScript 代码。
                    //在这里是将String转化为数组形式
                    //var  datas= eval(result);

                    //var temp = document.getElementById("temp"); //获取某一个div元素
                    $("#temp").html(result); //将该Div元素的原有内容清空
                    /*var accessCount = datas[0]; //获取数组第一个内容
                     for(i=0; i<accessCount.length; i++){ //遍历该数组
                     var div = document.createElement("div"); //创建一个div元素
                     div.className = "lishi0"; //为该div元素指定class
                     var img = document.createElement("img"); //创建一个img元素
                     img.className = "lishi3-1";
                     img.src = "img/lishi1.png"; //为该img元素指定src属性
                     var p = document.createElement("p"); //创建一个p元素
                     p.className = "lishi3-2";
                     var txt = document.createTextNode(accessCount[i]); //创建一个文本内容
                     p.appendChild(txt); //将该文本内容插入到p元素中
                     div.appendChild(img); //将img元素插入到div元素中
                     div.appendChild(p);
                     temp.appendChild(div); //将这些元素插入到获取的div元素中
                     }*/
                },
                error: function (XMLHttpRequest, txtStatus, errorThrown)
                {
                    //alert(XMLHttpRequest + "<br>" + txtStatus + "<br>" + errorThrown);
                }
            });
        }
    </script>-->
    <script>
        var scene = null;
        var sceneControl = null;
        var htmlUrl = null;
        var strServerUrl = null;
        var layer3D = null;
        var infoPage = "noInfo.htm";
        var bubble = null;
        var index = null;
        var indexf =null;
        var screenid = 6;
        var botDiv = 'N';
        var camera;
        var lon,lat,alt,heading,tilt
        function onPageLoad()
        {
            htmlUrl = "http://192.168.1.250:8090";
//            strServerUrl = htmlUrl + "/iserver/services/3D-Guan3-1-13/rest/realspace";
            strServerUrl = htmlUrl + "/iserver/services/3D-GuanLang/rest/realspace";

            backColor = new SuperMap.Web.Core.Color(255, 0, 0, 100);

            //初始化三维场景控件
            try{
                sceneControl = new SuperMap.Web.UI.Controls.SceneControl($get("sceneControlDiv"),initCallBack,failedCallBack);
            }
            catch(e){
                //若没有安装插件，则抛出该异常
                if (e.name == SuperMap.Web.Realspace.ExceptionName.PluginNotInstalled) {
                    var url = htmlUrl + "/iserver/iClient/for3D/plugin/Setup.exe";
                    document.write("<a href= ' "+url+" '>未检测到SuperMap iClient3D for  Plugin 插件，请单击此处下载安装。</a>");
                }
                //若使用非IE浏览器，则抛出该异常
                else if (e.name == SuperMap.Web.Realspace.ExceptionName.BrowserNotSupport) {
                    document.write("<p>SuperMap iClient3D for  Plugin 目前仅支持InternetExplorer浏览器，请更换浏览器后重新加载本页面.</p>");
                }
                //抛出其他异常
                else{
                    alert(e.message);
                }
            }
        }
        //控件初始化完成后的回调函数，初始化完成之后才能进行数据加载
        function initCallBack(){
            scene = sceneControl.get_scene();
            camera = scene.get_camera();
            screenLayer = scene.get_screenLayer3D();
            sceneControl.addEvent("objectSelected",objSelect);
            var isOpen =  scene.open(strServerUrl,"管廊");
            if (isOpen) {
                /* layer3D = scene.get_layer3Ds().get_item(0);

                 if (layer3D != null) {
                 var lyrBounds = layer3D.get_bounds();
                 var camera = new SuperMap.Web.Realspace.Camera(114.622125, 38.14137778, 11.07);
                 camera.set_tilt(90);
                 scene.get_flyingOperator().flyTo(camera);
                 }*/
            }else{s
                alert("打开场景失败");
            }
            camera.set_longitude(114.62162862034573);
            camera.set_latitude(38.140439086849014);
            camera.set_altitude(70.99972737144765);
            camera.set_heading(237.9336788741548);
            camera.set_tilt(86.56706938885024);
            scene.get_flyingOperator().flyTo(camera,1,SuperMap.Web.Realspace.FlyingMode.JUMP);

        }

        //控件初始化失败后的回调函数
        function failedCallBack()
        {
            alert("Realspace initialized failed!");
        }

//
        //
        //
        //
        // 对象选中事件
        function objSelect(selected3d) {
            var layer_name = selected3d[0].get_layer3D().get_name();
            var smid = selected3d[0].get_item(0);
            $("#ritMesIfr").attr("src", "/index.php/Home/eqpt/eqptRightMes?smid="+smid+"&layer_name="+layer_name);
            $('.ritMesDiv').show();

        }
        function botMesBtnCli() {
            alert('12');
            if (botDiv == 'N'){
                $('.botMesDiv').show();
                botDiv = 'Y';
            }
            else {
                $('.botMesDiv').hide();
                botDiv = 'N';
            }
        }
    //右搜索
        function ritSeaBtnCli(){
            $('#ritSeaDiv').toggle();
        }
    //下边数据
        function botMesBtnCli(){
            $('#botMesDiv').toggle()
        }

//        function botMesBtnCli(){
//            $('#botMesDiv').hide();
//            $('#botMesDiv').css("transform","rotate(180deg)")
//        }
            /*视角切换*/
        $(document).ready(function() {

            /*标签提示*/
            $("#jia").mouseover(function(){
                if(screenid != 4){
                    screen("夹层",0.909,true);
                }
            });
            $("#jia").mouseout(function(){
                screennone(index);
                screenid = 4
            });
            $("#dian").mouseover(function(){
                if(screenid != 2){
                    screen("电仓",0.834,true);
                }
            });
            $("#dian").mouseout(function(){
                screennone(index);
                screenid = 2
            });
            $("#shui").mouseover(function(){
                if(screenid != 3){
                    screen("水仓",0.872,true);
                }
            })
            $("#shui").mouseout(function(){
                screennone(index);
                screenid = 3
            })
            $("#guan").mouseover(function(){
                if(screenid != 1){
                    screen("管廊",0.795,true);
                }
            });
            $("#guan").mouseout(function(){
                screennone(index);
                screenid = 1;
            });
            $("#botMesBtnIfr").mouseover(function(){
//                alert(screenid)
                if(screenid != 5){
                    screenf("实时信息",1,true);
                }
            });
            $("#botMesBtnIfr").mouseout(function(){
                screennone(indexf);
                screenid = 6;
            });

/*下边数据*/
//            $("#botMesBtnDiv").click(function () {
//                $(".botMesDiv").show();
//            });
//            $("#shangbiao").click(function () {
//                $(".xiabian").hide();
//            });


//左弹框hover事件
            $('#eqpt').click(function () {
                $('#leftDiv').show();
            });

//右搜索弹框鼠标事件
//            $('#ritSeaBtn').click(function () {
//                $('#ritSeaDiv').slideToggle();
//            });

            $('#botMesBtnIfr').hover(function () {
//                $('#shishi').show();
//            },function(){
//                $('#shishi').hide();
            })

        });

//        右信息弹框事件
        function screen(text,anchor,isvisible) {
            //添加屏幕图层文本
            var anchorPoint = new SuperMap.Web.Core.Point3D(anchor,0.02,0);
            var txtPart3D = new SuperMap.Web.Core.TextPart3D(text, anchorPoint);
            //alert("屏幕文本");
            var textArray = [txtPart3D];
            var text3D = new SuperMap.Web.Core.GeoText3D(textArray);

            var feature3D = new SuperMap.Web.Core.Feature3D();
            feature3D.set_geometry(text3D);

            var textStyle = new SuperMap.Web.Core.TextStyle3D();
            textStyle.set_foreColor(new SuperMap.Web.Core.Color(255,255,255,0));
            textStyle.set_backColor(new SuperMap.Web.Core.Color(255,255,255,0));
            textStyle.set_outline(true);
            textStyle.set_fontName("Arial");
            textStyle.set_fontScale(0.8);
            feature3D.set_textStyle3D(textStyle);
            index = scene.get_screenLayer3D().add(feature3D,"Text");
            //alert("index:"+index);
        }

        //添加屏幕图层文本
        function screenf(text,anchor,isvisible) {

            var anchorPoint = new SuperMap.Web.Core.Point3D(anchor,0.97,0);
            var txtPart3D = new SuperMap.Web.Core.TextPart3D(text, anchorPoint);
            //alert("屏幕文本");
            var textArray = [txtPart3D];
            var text3D = new SuperMap.Web.Core.GeoText3D(textArray);

            var feature3D = new SuperMap.Web.Core.Feature3D();
            feature3D.set_geometry(text3D);

            var textStyle = new SuperMap.Web.Core.TextStyle3D();
            textStyle.set_foreColor(new SuperMap.Web.Core.Color(255,255,255,0));
            textStyle.set_backColor(new SuperMap.Web.Core.Color(255,255,255,0));
            textStyle.set_outline(true);
            textStyle.set_fontName("Arial");
            textStyle.set_fontScale(0.8);
            feature3D.set_textStyle3D(textStyle);
            indexf = scene.get_screenLayer3D().add(feature3D,"Text") ;
            //alert("indexf:"+indexf);
        }
        function screennone(index) {
            scene.get_screenLayer3D().removeAt(index);
        }

//        根据ID设置模型的显隐
        function isVisible(itemName,idArr,isVisible) {


//            var ids = [1,2,3,4];
//            var layer = scene.get_layer3Ds().get_item('管道@管廊3.1.1');
//            layer.setObjectsVisible(ids,false);

            var alpha;
            if (isVisible){
                alpha = 255;
            }
            else {
                alpha = 0;
            }
            var layer = scene.get_layer3Ds().get_item(itemName);
//            layer.set_isVisible(false);
            var color = new SuperMap.Web.Core.Color(255,255,255,alpha);
//            layer.setObjectsVisible(idArr,false);
            layer.setObjectsColor(idArr,color);
        }


//        各个弹框关闭方法
        function closeBot() {
            $('.botMesDiv').toggle();
        }
        function closeLef() {
            $('.leftDiv').hide()
        }
        function closeRitMes() {
            $('.ritMesDiv').hide();
        }
        function closeRitSea() {
            $('.ritSeaDiv').hide()
        }

//        标签的点击事件
        function visualChange(id) {
//            directionFun();
            switch (id){
                case 1:
                    lon = 114.62162862034573;
                    lat = 38.140439086849014;
                    alt = 70.99972737144765;
                    heading = 237.9336788741548;
                    tilt = 86.56706938885024;
                    break;
                case 2:
                    lon = 114.62060388613015;
                    lat = 38.140655874400124;
                    alt = 143.4753657177934;
                    heading = 267.6330455985261;
                    tilt = 88.85077751878894;
                    break;
                case 3:
                    lon = 114.6195915944613;
                    lat = 38.14057409228317;
                    alt = 232.81409738005362;
                    heading = 267.9324193226817;
                    tilt = 89.33222095064698;
                    break;
                case 4:
                    lon = 114.62190136296114;
                    lat = 38.140679359453316;
                    alt = 31.59146111432035;
                    heading = 270.213259267867;
                    tilt = 77.73374048420719;
                    break;
                default:
                    break;
            }
            camera.set_longitude(lon);
            camera.set_latitude(lat);
            camera.set_altitude(alt);
            camera.set_heading(heading);
            camera.set_tilt(tilt);
            scene.get_flyingOperator().flyTo(camera,1,SuperMap.Web.Realspace.FlyingMode.JUMP);
        }

        function directionFun() {
            console.log(camera.get_longitude()+','+camera.get_latitude()+','+camera.get_altitude()+','+camera.get_heading()+','+camera.get_tilt());
        }
    </script>

    <style>
        body{
            overflow-x: scroll;
        }

        #ritSeaBtn{
            background-image: url("/Public/home/images/run/搜索.png");
            background-size: 100%;
            width: 30px;
            height: 30px;
            position: absolute;
            bottom: 17px;
            right: 10px;
            background-repeat: no-repeat;
            background-color: #a4a4a4
        }
        #botMesBtnDiv{
            z-index: 101;
            background-image: url("/Public/home/images/run/下边.png");
            width:30px;
            height:30px;
            background-size: 100%;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body style="overflow-x: scroll" onLoad="onPageLoad()">
<div class="webpage">
    <div class="main border">


        <!--主区-->
        <div class="content">
            <!--三维-->
            <div class="modelDiv shadow">
                <div id="sceneControlDiv"></div>
                <div id="infoWindow" style="position: absolute;top: 50px; display:none" frameborder="0" scrolling="auto">
                </div>
            </div>
            <!--三维视角标签-->
            <div class="modLab">
                <a id="jia" href="javascript:visualChange(4)" class="biaoqian">
                    <img src="/Public/home/images/run/夹层1.png" alt=""/><p>夹层</p>
                    <iframe src="" frameborder="0"></iframe>
                </a>
                <a id="shui" href="javascript:visualChange(3)" class="biaoqian">
                    <img src="/Public/home/images/run/水仓1.png" alt=""/><p>水仓</p>
                    <iframe src="" frameborder="0"></iframe>
                </a>
                <a id="dian" href="javascript:visualChange(2)" class="biaoqian">
                    <img src="/Public/home/images/run/电仓1.png" alt=""/><p>电仓</p>
                    <iframe src="" frameborder="0"></iframe>
                </a>
                <a id="guan" href="javascript:visualChange(1)" class="biaoqian">
                    <img src="/Public/home/images/run/管廊1.png" alt="" /><p>管廊</p>
                    <iframe src="" frameborder="0"></iframe>

                </a>
            </div>
            <!--左弹框-->
            <div class="leftDiv" id="leftDiv">
                <iframe id="leftIfr" src="/index.php/home/Eqpt/eqptLeft" frameborder="0" width="260" height="600"></iframe>
            </div>
            <!--右搜索弹框-->
            <div class="ritSeaDiv" id="ritSeaDiv">
                <iframe id="ritSeaIfr" src="/index.php/home/eqpt/eqptRightSearch" frameborder="0" width="260" height="600"></iframe>
            </div>

            <!--右模型信息展示弹框-->
            <div class="ritMesDiv">
                <iframe id="ritMesIfr" src="/index.php/home/eqpt/eqptRightMes" width="260" height="600" frameborder="0"></iframe>
            </div>

            <!--搜索按钮-->
            <div class="ritSeaBtnDiv" id="ritSeaBtn">
                <a href="javascript:ritSeaBtnCli()">
                    <iframe src="" id="ritSeaBtnIfr" frameborder="0" style="width: 100%; height: 100%"></iframe>
                </a>
            </div>

            <!--底部信息弹框-->
            <div class="botMesDiv" id="botMesDiv" >
                <iframe src="/index.php/home/eqpt/eqptBottom" frameborder="0" width="100%" height="100%" scrolling="no"></iframe>
            </div>

            <!--底部信息按钮-->
            <div class="botMesBtnDiv" id="botMesBtnDiv">
                <a href="javascript:botMesBtnCli()">
                    <iframe id="botMesBtnIfr" src="" frameborder="0" width="100%" height="100%"></iframe>
                    <div id="shishi">实时</div>

                </a>
            </div>

        </div>
    </div>
</div>
</body>
</html>