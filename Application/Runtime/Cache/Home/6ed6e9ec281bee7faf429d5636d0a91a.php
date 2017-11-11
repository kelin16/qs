<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
            height: 555px;
            font-size: 14px;
            overflow-y: scroll;
            overflow-x: hidden;
            font-family: "Microsoft YaHei",'Arial';
            font-weight: normal;
            color: #4a4a4a;
            /*background-color: #EEEEEE;*/
        }
        .content div{
            width: 240px;
            height: 30px;
            line-height: 30px;
        }
        .container ul div{
            line-height: 30px;
            margin-left: 30px;
        }
        .container ul .two div{
            margin-left: 45px; ;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <p>系统设备</p>
            <img src="/Public/home/images/run/取消.jpg" alt="" id="zuox" onclick="closeCurrent()"/>
        </div>

        <div class="content">

            <!--消防系统-->
            <div><input type="checkbox" checked name="fireCtl" value="fireControl" onclick="allSelect(this)">&nbsp;消防系统</div>
            <ul>
                <div><input type="checkbox" name="fireCtlSon" disabled>&nbsp;报警主机</div>
                <div><input type="checkbox" name="fireCtlSon" disabled>&nbsp;温感光纤</div>
                <div><input type="checkbox" name="fireCtlSon" checked value="结构基础@结构基础_34" onchange="c(this)">&nbsp;温感电缆</div>
                <div><input type="checkbox" name="fireCtlSon" disabled>&nbsp;消防广播</div>
                <div><input type="checkbox" name="fireCtlSon" disabled>&nbsp;声光报警器</div>
                <div><input type="checkbox" name="fireCtlSon" checked value="火警设备@警报_38" onchange="c(this)">&nbsp;手动报警器</div>
                <div><input type="checkbox" name="fireCtlSon" checked value="风管附件@防火阀门_1" onchange="c(this)">&nbsp;防火阀</div>
                <div><input type="checkbox" name="fireCtlSon" checked value="门@防火门_1" onchange="c(this)">&nbsp;防火门</div>
                <div><input type="checkbox" name="fireCtlSon" checked value="专用设备@消防_8" onchange="c(this)">&nbsp;干粉灭火器</div>
                <div><input type="checkbox" name="fireCtlSon" checked value="火警设备@警报_23">&nbsp;点式烟感探测器</div>
            </ul>

            <!--安防系统-->
            <div><input type="checkbox" checked name="safeCtl" value="safeControl" onclick="allSelect1(this)">安防系统</div>
            <ul>
                <div><input type="checkbox" checked name="safeCtlVid" value="safeControlVideo" onclick="allSelect(this)">&nbsp;视频监控系统</div>
                <ul class="two">
                    <div><input type="checkbox" name="safeCtlVidSon" checked value="安全设备@安防_8" onchange="c(this)">&nbsp;高清球机</div>
                    <div><input type="checkbox" name="safeCtlVidSon" checked value="安全设备@安防_35" onchange="c(this)">&nbsp;定焦抢机</div>
                    <div><input type="checkbox" name="safeCtlVidSon" disabled>&nbsp;线缆</div>
                </ul>
                <div><input type="checkbox" checked name="safeCtlInv" value="safeControlInvade"onclick="allSelect(this)">&nbsp;防入侵系统</div>
                <ul class="two">
                    <div><input type="checkbox" name="safeCtlInvSon" disabled>&nbsp;红外探测器</div>
                    <div><input type="checkbox" name="safeCtlInvSon" disabled>&nbsp;报警主机</div>
                    <div><input type="checkbox" name="safeCtlInvSon" disabled>&nbsp;智能井盖</div>
                    <div><input type="checkbox" name="safeCtlInvSon" disabled>&nbsp;线缆</div>
                </ul>
                <div><input type="checkbox" name="safeCtlSon" disabled>&nbsp;无线巡更</div>
                <div><input type="checkbox" name="safeCtlSon" disabled>&nbsp;门禁</div>
            </ul>

            <!--自控系统-->
            <div><input type="checkbox" checked name="selfCtl" value="selfControl" onclick="allSelect(this)">自控系统</div>
            <ul>
                <div><input type="checkbox" name="selfCtlSon" disabled>&nbsp;通风系统</div>
                <div><input type="checkbox" name="selfCtlSon" disabled>&nbsp;排水系统</div>
                <div><input type="checkbox" name="selfCtlSon" disabled>&nbsp;环境系统</div>
                <div><input type="checkbox" name="selfCtlSon" disabled>&nbsp;控制设备</div>
                <div><input type="checkbox" name="selfCtlSon" disabled>&nbsp;线缆</div>
            </ul>

            <!--配电与照明-->
            <div><input type="checkbox" checked name="eleLig" value="eleLight" onclick="allSelect(this)">配电与照明</div>
            <ul>
                <div><input type="checkbox" name="eleLigSon" checked value="照明设备@灯_55" onchange="c(this)">&nbsp;紧急出口指示灯</div>
                <div><input type="checkbox" name="eleLigSon" checked value="安全设备@安防_1" onchange="c(this)">&nbsp;安全疏散指示灯</div>
                <div><input type="checkbox" name="eleLigSon" checked value="照明设备@灯_1" onchange="c(this)">&nbsp;安全节能照明灯具</div>
                <div><input type="checkbox" name="eleLigSon" checked value="照明设备@灯_37" onchange="c(this)">&nbsp;节能照明灯具（应急）</div>
                <div><input type="checkbox" name="eleLigSon" disabled>&nbsp;控制设备</div>
                <div><input type="checkbox" name="eleLigSon" disabled>&nbsp;线缆</div>
            </ul>

            <!--机器人-->
            <div><input type="checkbox" checked name="robot" value="robot" onclick="allSelect(this)">机器人</div>
            <ul>
                <div><input type="checkbox" name="robotSon" disabled onchange="c(this)">&nbsp;分布式充电桩</div>
                <div><input type="checkbox" name="robotSon" checked value="结构基础@结构基础" onchange="c(this)">&nbsp;巡检机器人</div>
            </ul>

            <!--标识系统-->
            <div><input type="checkbox" checked name="ideCtl" value="ideControl" onclick="allSelect(this)">标识系统</div>
            <ul>
                <div><input type="checkbox" name="ideCtlSon" disabled onchange="c(this)">&nbsp;危险标识</div>
                <div><input type="checkbox" name="ideCtlSon" disabled>&nbsp;管道标识</div>
                <div><input type="checkbox" name="ideCtlSon" checked value="安全设备@安防_2" onchange="c(this)">&nbsp;逃生指示灯</div>
                <div><input type="checkbox" name="ideCtlSon" disabled>&nbsp;其他</div>
            </ul>

            <!--光纤环网-->
            <div><input type="checkbox" checked name="fiber" value="fiber" onclick="allSelect(this)">光纤环网</div>
            <ul>
                <div><input type="checkbox" name="fiber" disabled>&nbsp;交换机</div>
                <div><input type="checkbox" name="fiberSon" checked value="专用设备@消防_14" onchange="c(this)">&nbsp;无线AP</div>
                <div><input type="checkbox" name="fiber" disabled>&nbsp;线缆通信</div>
                <div><input type="checkbox" name="fiber" disabled>&nbsp;无线覆盖范围</div>
            </ul>

            <!--指挥调度-->
            <div><input type="checkbox" checked name="comDis" value="comDis" onclick="allSelect(this)">指挥调度</div>
            <ul>
                <div><input type="checkbox" name="comDisSon" disabled>&nbsp;调度主机</div>
                <div><input type="checkbox" name="comDisSon" checked value="电气装置@通信_16" onchange="c(this)">&nbsp;IP电话</div>
                <div><input type="checkbox" name="comDisSon" disabled>&nbsp;人员位置</div>
                <div><input type="checkbox" name="comDisSon" disabled>&nbsp;线缆</div>
            </ul>

            <!--其他-->
            <div><input type="checkbox" checked name="else" value="else" onclick="allSelect(this)">其他</div>
            <ul>
                <div><input type="checkbox" name="elseSon" checked value="电缆桥架@桥架_1" onchange="c(this)">&nbsp;桥架</div>
                <div><input type="checkbox" name="elseSon" disabled>&nbsp;电缆</div>
                <div><input type="checkbox" name="elseSon" disabled>&nbsp;信号缆</div>
            </ul>
        </div>
    </div>

    <script>
        
        function allSelect1(s) {
            var items1 = document.getElementsByName('safeCtlVid');
            var items2 = document.getElementsByName('safeCtlVidSon');
            var items3 = document.getElementsByName('safeCtlInv');
            var items4 = document.getElementsByName('safeCtlInvSon');
            forFun(items1,s);
            forFun(items2,s);
            forFun(items3,s);
            forFun(items4,s);
            var ids = [8,9,10,35,36,37,38,39,40];
            var isHas = s.checked;
            window.parent.isVisible('安全设备@安防',ids,isHas);
        }
        function forFun(items,s) {
            var items = items;
            var box = s;
            for (i=0;i<items.length;i++){
                if (items[i].value != 'on'){
                    items[i].checked = box.checked;
                }
            }
        }

        function allSelect(s) {
            var box = s;
            var boxName = box.name;
            var boxSonName = boxName+'Son';
            var items = document.getElementsByName(boxSonName);
            //alert(items.length);
            for (i =0;i<items.length;i++){
                //console.log(items[i].value)
                if (items[i].value !='on'){
                    console.log(items[i]);
                    items[i].checked = box.checked;
                    c(items[i]);
                }
            }
        }
        function c(s) {
            var name = s.value.split('_')[0];
            var id = s.value.split('_')[1];
            var isHas = s.checked;
            var ids = new Array();

            switch(name) {
                case '电缆桥架@桥架':
                    if(id == 1){
                        ids = [1,2];
                    }
                    break;
                case '照明设备@灯':
                    if (id == 1){
//                        for(i = 1;i<37;i++){
//                            ids.push(i);
//                        }
                        ids = [1,2,3]
                    }
                    else if(id == 37){
                        for(i=37;i<55;i++){
                            ids.push(i);
                        }
                    }
                    else {
                        ids = [55,56]
                    }
                    break;
                case '安全设备@安防':
                    if(id == 8){
                        ids = [8,9,10]
                    }
                    else if(id == 35){
                        ids = [35,36,37,38,39,40]
                    }
                    else {
////                        ids = [1,2,3,4,5,6,7];
//                        for(i = 11;i<=34;i++){
//                            ids.push(i);
//                        }
                        ids = [11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34];
                    }
                    break;
                case '专用设备@消防':
                    if (id== 8){
                        ids= [8,9,10,11,12,13];
                    }
                    else {
                        ids = [14,15];
                    }
                    break;
                case '结构基础@结构基础':
                    if (id == 34){
                        ids = [34];
                    }
                    else {
                        ids = [35]
                    }
                    break;
                case '风管附件@防火阀门':
                    ids = [1,2,3,4]
                    break;
                case '门@防火门':
                    ids = [1];
                    break;
                case ' 电气装置@通信':
                    for(i=16;i<31;i++){
                        ids.push(i);
                    }
                    break;

                default:
                    break;
            }

            window.parent.isVisible(name,ids,isHas);


        }

        function closeCurrent() {
            window.parent.closeLef();
        }
    </script>
</body>
</html>