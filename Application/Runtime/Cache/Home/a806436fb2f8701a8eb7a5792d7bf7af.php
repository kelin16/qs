<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>地图</title>
    <link rel="icon" type="" href="/Public/home/images/video/logo2.png">
    <link rel="stylesheet" href="/Public/home/css/navigation.css">
    <link rel="stylesheet" href="/Public/home/css/run/map.css">
    <script src="/Public/home/js/run/libs/SuperMap.Include.js"></script>
    <script type="text/javascript">
        var map,infowin,layer,utfgrid,control,
            //host = document.location.toString().match(/file:\/\//)?"http://localhost:8090":'http://' + document.location.host,
            url="http://192.168.1.250:8090/iserver/services/map-first/rest/maps/TrafficMap@BaiduMap";
        function init(){
            map = new SuperMap.Map("map", {controls: [
                new SuperMap.Control.ScaleLine(),
                new SuperMap.Control.Zoom(),
                new SuperMap.Control.LayerSwitcher(),
                new SuperMap.Control.Navigation({
                    dragPanOptions: {
                        enableKinetic: true
                    }
                })],
                projection: "EPSG:3857"
            });
            map.addControl(new SuperMap.Control.MousePosition());
            layer = new SuperMap.Layer.TiledDynamicRESTLayer("TrafficMap@BaiduMap", url, {transparent: true}, {useCanvas: true, maxResolution: "auto"});
            //注意：pixcell与utfgridResolution两个属性有对应关系，在使用的时候也要注意场景；
            //1.其中pixcell为发送给服务端请求utfgrid瓦片的精度，数值越小，精度越高，相应的瓦片大小也就越大；
            //2.utfgridResolution为客户端解析瓦片使用的精度，应该与pixcell的值相等，否则会产生位置与属性对应不上的问题；
            //3.通常如果UTFGrid图层为面图层，对应的数据量会比较大，为了不影响页面的正常浏览，可以将这两个属性设的大一些；
            //4.isUseCache设置是否使用缓存，使用缓存能够提高性能；
            utfgrid = new SuperMap.Layer.UTFGrid("UTFGridLayer", url,
                {
                    layerName: "New_Line@first#1",
                    utfTileSize: 256,
                    pixcell: 8,
                    isUseCache: false
                },
                {
                    utfgridResolution: 8
                });

            layer.events.on({"layerInitialized": addLayer});
            control = new SuperMap.Control.UTFGrid({
                layers: [utfgrid],
                callback: callback,
                handlerMode: "click"
            });
            map.addControl(control);
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
                            case "1" :
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
            map.addLayers([layer, utfgrid]);
            map.setCenter(center, 12);
            utfgrid.maxExtent=layer.maxExtent;
        }
    </script>
</head>
<body onload="init()">
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
                <li><a href="#">运行管理</a></li>
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
            <a href="/index.php/home/run/playback"><img src="/Public/home/images/run/playback2.png" alt="视频"><br>回放</a>
            <a href="/index.php/home/run/video"><img src="/Public/home/images/run/video.png" alt="视频"><br>预览</a>
            <a href="/index.php/home/run/fireprevention"><img src="/Public/home/images/run/fire.png" alt="防火" style="width: 20px; padding-bottom: 3px;"><br>防火分区</a>
            <a href="/index.php/home/run/map"><img src="/Public/home/images/run/gis.png" alt="GIS"><br>GIS</a>
            <a href="/index.php/home/run/run"><img src="/Public/home/images/run/view.png" alt="视图"><br>三视图</a>
        </div>

        <div class="contentView border">

            <!--地图区域-->
            <!--<div class="viewGis border">
                <iframe src="/index.php/home/run/gisBig" frameborder="0" width='100%' height="100%" scrolling="no"></iframe>
            </div>-->
            <div id="map" class="viewGis border">
            </div>

            <!--选择区域-->
            <div class="viewSelect">
                <input type="text" placeholder="搜索" style="width: 193px;height: 20px"><img src="/Public/home/images/map/search.png" alt="search">
                <select name="select" id="select">
                    <option value="ying">迎旭路</option>
                    <option value="yuan">园博园大街</option>
                    <option value="tai">太行大街</option>
                    <option value="xin">新城大街</option>
                    <option value="long">隆兴路</option>
                </select>
                <div class="viewSelectDetail">
                    <div>防火分区1</div>
                    <div>防火分区2</div>
                    <div>防火分区3</div>
                    <div>防火分区4</div>
                    <div>防火分区5</div>
                </div>
            </div>


        </div>
    </div>

</body>
</html>