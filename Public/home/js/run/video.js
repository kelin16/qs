


var vlc,lay,ptz,del,screens,record;
var arr = new Array(4);
var id;
var recordBtn = 1;
var startTime,stopTime;
// 覆盖层方法
function gain_id(v){
    id = v;
    var delId = 'del'+v;
    var ptzId = 'ptz'+v;
    var screensId = 'screens'+v;
    var recordId = 'record'+v;
    var objId = 'obj'+v;
    var layId = 'vidLayer'+v;
    del = document.getElementById(delId);
    ptz = document.getElementById(ptzId);
    record = document.getElementById(recordId);
    vlc = document.getElementById(objId);
    lay = document.getElementById(layId);
    screens=document.getElementById(screensId);

    $('.vidLayer').css('outline','0 solid yellow');
    lay.style.outline = '2px solid yellow';
}


// 选取rtsp方法
function changeRtsp(r){
    ids = id-1;
    arr[ids] = r;
    var stream;
     lay.style.display = "none";
    //   lay.style.outline = '2px solid yellow';
     del.style.display = 'block';
     ptz.style.display = 'block';
     screens.style.display = 'block';
     record.style.display = 'block';
     if(r=='dahua'){
         vlc.get_url('rtsp://admin:admin@192.168.1.108:554/cam/realmonitor?channel=1&subtype=0&unicast=true&proto=Onvif');
     }
     else{
         vlc.get_url('rtsp://admin:admin123@192.168.1.64:554/Streaming/Channels/101?transportmode=unicast&profile=Profile_1');
     }

}


// 视频关闭
function closeVideo(v1){
        gain_id(v1);
        lay.style.display = 'block';
        del.style.display = 'none';
        ptz.style.display = 'none';
        screens.style.display = 'none';
        record.style.display = 'none';
        lay.style.border = '0px solid red';
        vlc.video_stop();
}

// 抓拍
function screenshot(s){
    gain_id(s);
    vlc.video_snapshot('D:\\',600,400);
    alert('抓拍已存至D盘');
}

//录像
var fso = new ActiveXObject('Scripting.FileSystemObject');
function getRecord(r) {
    // alert('录像了'+r);
    gain_id(r);
    var date = new Date();
    var year = date.getFullYear();
    var month = date.getMonth()+1;
    var day = date.getDate();
    var dirName = year+'.'+month+'.'+day;
    var dirPath = 'F:\\'+dirName;

    //如果不存在就创建文件夹
    if (!fso.FolderExists(dirPath)){
        fso.CreateFolder(dirPath)
    }
    if(recordBtn == 1){

        //点击第一次
        recordBtn = 2;
        startTime = getTime();
    }else {

        // 点击第二次
        recordBtn = 1;
        stopTime = getTime();
        alert('录像文件已存F盘');
        var recordName = startTime+'_'+stopTime;
        vlc.video_record(dirPath+'\\'+recordName);
    }
}
function getTime() {
    var date = new Date();
    var month = date.getMonth()+1;
    var currentTime = date.getHours()+'.'+date.getMinutes()+'.'+date.getSeconds();
    return currentTime;
}
//视频界面切换事件

$('#fourView').click(function (event) {
    event.stopImmediatePropagation();
    $('.vidBotCtl2ViewBtn').fadeToggle();

})
$(document).bind('click',function () {
    $('.vidBotCtl2ViewBtn').fadeOut();
})
$('#oneV').click(function () {
    $('.videoDiv>div').removeClass();
    $('.videoDiv>div').addClass('noneV');
    $('#objDiv1').addClass('objDivOne blockV');
    $('.screens').css('left','47%');
    $('.ptz').css('left','52%');
    $('.record').css('left','57%');
})
$('#fourV').click(function () {
    $('.videoDiv>div').removeClass();
    $('.videoDiv>div').addClass('noneV');
    $('#objDiv1,#objDiv2,#objDiv3,#objDiv4').addClass('objDivFour blockV');
    $('.screens').css('left','46%');
    $('.ptz').css('left','53%');
    $('.record').css('left','60%');
})
$('#sixV').click(function () {
    $('.videoDiv>div').removeClass();
    $('.videoDiv>div').addClass('noneV');
    $('#objDiv1').addClass('blockV objDivSixFirst');
    $('#objDiv2,#objDiv3,#objDiv4,#objDiv5,#objDiv6').addClass('objDivSix blockV');
    $('.screens').css('left','44%');
    $('.ptz').css('left','54%');
    $('.record').css('left','64%');
    $('#ptz1').css('left','52%');
    $('#screens1').css('left','46%');
    $('#record1').css('left','58%');
})
$('#nineV').click(function () {
    $('.videoDiv>div').removeClass();
    $('.videoDiv>div').addClass('objDivNine');
    $('.screens').css('left','43%');
    $('.ptz').css('left','55%');
    $('.record').css('left','67%');
})