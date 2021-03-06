<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>运行管理</title>
    <link rel="icon" type="" href="/Public/home/images/video/logo2.png">
    <link rel="stylesheet" href="/Public/home/css/run/run.css">
    <link rel="stylesheet" href="/Public/home/css/navigation.css">
    <script src="/Public/home/js/jquery-1.7.1.min.js"></script>
    <script src="/Public/home/js/run/libs/SuperMap.Include.js"></script>
    <script type="text/javascript">
        //声明变量 map、layer、url
        var map,layer,utfgrid,control,infowin,
            url = "http://192.168.1.191:8090/iserver/services/map-first/rest/maps/TrafficMap@BaiduMap";
        //创建地图控件
        function init() {
            map = new SuperMap.Map ("map",{controls:[
               /* new SuperMap.Control.ScaleLine(),
                new SuperMap.Control.PanZoomBar({showSlider:true}),
                new SuperMap.Control.LayerSwitcher(),*/
                new SuperMap.Control.Navigation({
                    dragPanOptions: {
                        enableKinetic: true
                    }
                })],
                projection: "EPSG:3857"
            });
            map.addControl(new SuperMap.Control.MousePosition());
            //map.addControl (new  SuperMap.Control.OverviewMap());
            //创建分块动态 REST 图层，该图层显示 iserver 8C 服务发布的地图,
            //其中"world"为图层名称，url 图层的服务地址，{transparent: true}设置到 url 的可选参数
            layer = new SuperMap.Layer.TiledDynamicRESTLayer("TrafficMap@BaiduMap", url, {transparent: true}, {useCanvas: true, maxResolution:"auto"});

            /*marks = new SuperMap.Layer.Vector("Vector Layer");
            //青色
            var point1_1 = new SuperMap.Geometry.Point(12757960.74672,4573586.48532);
            var point1_2 = new SuperMap.Geometry.Point(12759390.77516,4573640.32495);
            var point1_3 = new SuperMap.Geometry.Point(12759390.77516,4573640.32495);
            var point1_4 = new SuperMap.Geometry.Point(12762857.58103,4573383.99471);
            var geometry1 = new SuperMap.Geometry.LineString([point1_1,point1_2,point1_3,point1_4]);
            //构建矢量要素覆盖物
            var pointVector1 = new SuperMap.Feature.Vector(geometry1,{id:"1",name:"东门路管廊"},{ strokeColor: "#97FFFF",//"#red",212121
                strokeWidth: 5,
                pointerEvents: "visiblePainted",
                fillColor: "#212121",
                fillOpacity: 0.5 });

            //灰色
            var point2_1 = new SuperMap.Geometry.Point(12758878.89657,4575379.39318);
            var point2_2 = new SuperMap.Geometry.Point(12758858.29040,4572421.59822);
            var point2_3 = new SuperMap.Geometry.Point(12757354.90209,4570747.78183);
            var geometry2 = new SuperMap.Geometry.LineString([point2_1,point2_2,point2_3]);
            //构建矢量要素覆盖物
            var pointVector2 = new SuperMap.Feature.Vector(geometry2,{id:"2",name:"西上泽大街管廊"},{ strokeColor: "#CCCCCC",//"#red",212121
                strokeWidth: 5,
                pointerEvents: "visiblePainted",
                fillColor: "#212121",
                fillOpacity: 0.5 });

            //黄色
            var point3_1 = new SuperMap.Geometry.Point(12757468.85911,4572434.57264);
            var point3_2 = new SuperMap.Geometry.Point(12762866.93502,4572434.57264);
            var geometry3 = new SuperMap.Geometry.LineString([point3_1,point3_2]);
            //构建矢量要素覆盖物
            var pointVector3 = new SuperMap.Feature.Vector(geometry3,{id:"3",name:"临济路管廊"},{ strokeColor: "#FFFF00",//"#red",212121
                strokeWidth: 5,
                pointerEvents: "visiblePainted",
                fillColor: "#212121",
                fillOpacity: 0.5 });

            //蓝色
            var point4_1 = new SuperMap.Geometry.Point(12760420.66313,4575469.35723);
            var point4_2 = new SuperMap.Geometry.Point(12760420.66313,4572351.74958);
            var point4_3 = new SuperMap.Geometry.Point(12759660.97415,4571027.88852);
            var point4_4 = new SuperMap.Geometry.Point(12759574.70059,4570683.77232);
            var geometry4 = new SuperMap.Geometry.LineString([point4_1,point4_2,point4_3,point4_4]);
            //构建矢量要素覆盖物
            var pointVector4 = new SuperMap.Feature.Vector(geometry4,{id:"4",name:"新城大道管廊"},{ strokeColor: "#0000FF",//"#red",212121
                strokeWidth: 5,
                pointerEvents: "visiblePainted",
                fillColor: "#212121",
                fillOpacity: 0.5 });

            //绿色
            var point5_1 = new SuperMap.Geometry.Point(12762777.67489,4575236.81519);
            var point5_2 = new SuperMap.Geometry.Point(12762777.67489,4572131.19583);
            var point5_3 = new SuperMap.Geometry.Point(12762230.45716,4570594.64397);
            var point5_4 = new SuperMap.Geometry.Point(12762144.54115,4570221.00920);
            var geometry5 = new SuperMap.Geometry.LineString([point5_1,point5_2,point5_3,point5_4]);
            //构建矢量要素覆盖物
            var pointVector5 = new SuperMap.Feature.Vector(geometry5,{id:"5",name:"太行大街管廊"},{ strokeColor: "#00FF00",//"#red",212121
                strokeWidth: 5,
                pointerEvents: "visiblePainted",
                fillColor: "#212121",
                fillOpacity: 0.5 });
            marks.addFeatures([pointVector1,pointVector2,pointVector3,pointVector4,pointVector5]);*/
            utfgrid = new SuperMap.Layer.UTFGrid("UTFGridLayer",url,
                {
                    layerName: "New_Line@first#1",
                    utfTileSize: 256,
                    pixcell: 8,
                    isUseCache: false
                },
                {
                    utfgridResolution: 8
                });
            control = new SuperMap.Control.UTFGrid({
                layers: [utfgrid],
                callback: callback,
                handlerMode: "move"
            });
            map.addControl(control);
            layer.events.on({"layerInitialized": addLayer});
        }
        var callback = function (infoLookup, loc, pixel) {
            closeInfoWin();
            if (infoLookup) {
                var info;
                for (var idx in infoLookup) {

                    info = infoLookup[idx];
                    if (info && info.data) {
                        var name;
                        var id = info.data.SmID;
                        switch (id){
                            case "1":
                                name ="西上泽大街管廊";
                                break;
                            case "2":
                                name = "新城大道管廊";
                                break;
                            case "3":
                                name = "太行大街管廊";
                                break;
                            case "4":
                                name = "东门路管廊";
                                break;
                            case "5":
                                name = "临济路管廊";
                                break;
                        }
                        //alert(name);
                        var dom = "<div style='font-size: 15px; color: #FF0000;'>" + name + "</div>";
                        //设置x与y的像素偏移量，不影响地图浏览；
                        var xOff = (1 / map.getScale()) * 0.001;
                        var yOff = +(1 / map.getScale()) * 0.02;
                        var pos = new SuperMap.LonLat(loc.lon+xOff, loc.lat+yOff);
                        infowin = new SuperMap.Popup(
                            "chicken",
                            pos,
                            new SuperMap.Size(100, 20),
                            dom,
                            false,
                            null);
                        infowin.closeOnMove = true;
                        infowin.autoSize=true;
                        map.addPopup(infowin);
                    }
                }
            }
        };

        function closeInfoWin() {
            if (infowin) {
                try {
                    map.removePopup(infowin)
                }
                catch (e) {
                }
            }
        }

        function addLayer() {
            var center = new SuperMap.LonLat(12760242.999997,4573024.999999);
            //将 Layer 图层加载到 Map 对象上
            map.addLayers([layer,utfgrid]);
            //出图，map.setCenter 函数显示地图  设置中心点及缩放级别
            map.setCenter(center, 11);
            //加载要素选择器控件 绑定事件 hover 是否悬浮
            /*selectFeature = new SuperMap.Control.SelectFeature(marks,
                {
                    onSelect: OnFeatureSelect,
                    onUnselect: OnFeatureUnselect,
                    hover:true
                });
            //添加 激活
            map.addControl(selectFeature);
            selectFeature.activate();*/
            utfgrid.maxExtent=layer.maxExtent;
        }
       /* function OnFeatureSelect(feature) {
            var lat= feature.geometry.getBounds().getCenterLonLat().lat;
            var lon= feature.geometry.getBounds().getCenterLonLat().lon;
            var id = feature.attributes.id;
            //console.log(lat);
            var name = feature.attributes.name;
            switch (id)
            {
                case "2":
                    lon += 780;
                    //alert(lon);
                    break;
                case "4":
                    lon += 420;
                    //alert(lon);
                    break;
                case "5":
                    lon += 350;
                    //alert(lon);
                    break;
            }
            //alert(id);
            var popup = new SuperMap.Popup.FramedCloud(
                "popwin",
                new SuperMap.LonLat(lon,lat),
                null,
                name,
                null,
                false,
                null);
            vectorInfoWin = popup;
            map.addPopup(popup);
        }
        function OnFeatureUnselect() {
            if (vectorInfoWin) {
                vectorInfoWin.hide();
                vectorInfoWin.destroy();
            }
        }*/
    </script>
    <style></style>
</head>
<body onload="init()">
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
                <li><a href="#">入廊企业</a>
                <ul class="navBar_two">
                    <li style="clear: both;"><a href="#">安防系统</a></li>
                    <li style="clear: both;"><a href="#">消防系统</a></li>
                    <li style="clear: both;"><a href="#">自控系统</a></li>
                    <li style="clear: both;"><a href="#">配电与照明</a></li>
                </ul></li>
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
            <a href="/index.php/home/run/View/Eqpt/index.html"><img src="/Public/home/images/run/fire.png" alt="防火" style="width: 20px; padding-bottom: 3px;"><br>防火分区</a>
            <a href="/index.php/home/run/map"><img src="/Public/home/images/run/gis.png" alt="GIS"><br>GIS</a>
            <a href="/index.php/home/run/run"><img src="/Public/home/images/run/view.png" alt="视图"><br>三视图</a>

        </div>

        <div class="contentView">

            <div class="viewLeft border shadow">
                <!--视频区开始-->
                <div class="viewLeftVideo">
                    <object classid="clsid:146FF3A3-49EA-4AAC-B4BD-3E181394265F" id="obj" height= '578px' width="770px" >
                    </object>
                    <div id="objLink" class="objLink">请点击下载插件,安装时请关闭浏览器</div>
                </div>

                <!--监控点切换-->
                <div class="viewLeftCtl">
                    <form action="">
                        <select name="street" class="street" style="width:206px;height:22px">
                            <option value="ying">迎旭路</option>
                            <option value="yuan">园博园大街</option>
                            <option value="tai">太行大街</option>
                            <option value="xin">新城大街</option>
                            <option value="long">隆兴路</option>
                        </select>
                        <br>
                        <select  id="point" name="point" style="width:206px;height:22px" onchange="show_sub(this.options[this.options.selectedIndex].value)">
                            <option value="大华">大华</option>
                            <option value="海康">海康</option>
                        </select>
                        <!--<input type="button" id="record" value="录像">-->
                    </form>
                </div>
                <div class="viewRightCtl">
                    <img src="/Public/home/images/run/u69.png">
                    <button id="recordBtn">录像</button>
                    <button id="findDevBtn">发现设备</button>
                </div>
                <!--视频区结束-->
            </div>

            <div class="viewRight">
                <!--GIS区域开始-->
                <!--<div class="viewRitGis border shadow">
                    <iframe src="/index.php/home/run/gisSmall" frameborder="0" width='100%' height="100%" scrolling="no"></iframe>
                </div>-->
                <div id="map" class="viewRitGis border shadow">
                </div>
                <!--GIS区域结束-->

                <!--防火分区开始-->
                <div class="viewRitFirePro border shadow">
                    <img src="/Public/home/images/run/u74.png">
                </div>
                <!--防火分区结束-->
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script>
    var bool = 0;
//    var fso = new ActiveXObject('Scripting.FileSystemObject');
//    var startTime,stopTime;
    var obj = document.getElementById('obj');
    var objLink = document.getElementById('objLink');
    if(obj.object == null){
        objLink.onclick = function () {
//            alert('111')
            location.href="/Public/求实1.2.exe";
        }
    }
    else{
        console.log('控件已存在');
        objLink.style.display = 'none';
    }
    function show_sub(v){
        // alert(v);
        switch (v) {
            case '大华':
                console.log(v);
                obj.get_url('rtsp://admin:admin@192.168.1.108:554/cam/realmonitor?channel=1&subtype=0&unicast=true&proto=Onvif');
                break;
            case '海康':
                obj.get_url('rtsp://admin:admin123@192.168.1.64:554/Streaming/Channels/101?transportmode=unicast&profile=Profile_1');
            default:
                break;
        }
    }

//    document.getElementById('findDevBtn').onclick = function () {
//        alert('触发了发现设备的按钮...');
//        console.log(obj.video_dev());
//    }
//    document.getElementById('recordBtn').onclick = function () {
////        alert('luciang ');
//
//
//        var date = new Date;
//        var year = date.getFullYear();
//        var month = date.getMonth()+1;
//        var day = date.getDate()
//        var dirName = year+'.'+month+'.'+day;
//        var dirPath = 'F:\\'+dirName;
//
//        //如果不存在就创建文件夹
//        if(!fso.FolderExists(dirPath)){
//            fso.CreateFolder(dirPath)
//        }
//
//        if(bool == 1){
//
//            //点击了第二次
//            alert('点击了第二次');
//            bool = 0;
//            stopTime = getTime();
//            alert('文件已存在F盘');
//            var recordName = startTime+'_'+stopTime;
//            console.log(recordName);
//            obj.video_record(dirPath+'\\'+recordName);
//            // obj.video_record('F:\\Img\\1');
//            // obj.video_record('F:\\1');
//        }else{
//
//            //点击的第一次
//            alert('点击了第一次');
//            bool = 1;
//            startTime = getTime();
//        }
////        obj.video_record('E:\\record\\mp.mp4');
//    }
    function getTime() {
        var date = new Date();
        var month = date.getMonth()+1;
        var currentTime = date.getHours()+'.'+date.getMinutes()+'.'+date.getSeconds();
        // console.log(currentTime);
        return currentTime;
    }
</script>
</html>