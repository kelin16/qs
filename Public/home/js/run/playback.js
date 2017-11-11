
$(function () {
    //时间实时获取
    // getTime();
    function getTime() {
        var date = new Date();
        var seperator1 = '-';
        var seperator2 = ':';
        var month = date.getMonth()+1;
        var strDate = date.getDate();
        var hour = date.getHours();
        var minu = date.getMinutes();
        var sec = date.getSeconds();
        if (month >= 1 && month <= 9){
            month = '0'+month;
        }
        if (strDate>=0 && strDate <=9){
            strDate = '0'+strDate;
        }
        if (minu >= 0 && minu <=9){
            minu = '0' +minu;
        }
        if (sec >= 0 && sec <=9){
            sec = '0' +sec;
        }
        if (hour >= 0 && hour <= 9){
            hour = '0' + hour;
        }

        var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate + " " + hour + seperator2 + minu + seperator2 + sec;　
       $('#timeSpan')[0].innerHTML = currentdate;
       // console.log(currentdate);
    };
    var time = null;
    time = setInterval(getTime, 1000);


})

var fso = new ActiveXObject('Scripting.FileSystemObject');
// var f = fso.GetFolder();

function getPathInputVal(val) {
    $('#viewRightBar').empty()
    var newVal = 'F:\\'+ val.split('-')[0]+'.'+val.split('-')[1]+'.'+val.split('-')[2];
    console.log(newVal);
    var f = fso.GetFolder(newVal);
    var fc = new Enumerator(f.files);
    var s = '';
    for(; !fc.atEnd(); fc.moveNext()){
        var para = document.createElement('span');
        var element = document.getElementById('viewRightBar');
        // element.removeChild(para);
        var item = '1'+fc.item();
        var itemArr = item.split('\\');
        var itemRange = itemArr[2].slice(0,-4);

        para.setAttribute('onclick','changeVideo(this.innerHTML)');

        var node = document.createTextNode(itemRange);
        para.appendChild(node);


        element.appendChild(para);

    }
    // console.log($('#viewRightBar span')[0]);
}

// $("#viewRightBar span").click(function () {
//     alert('点击了span按钮...')
// })

var video = document.getElementById('backVideo');
function changeVideo(val) {

    var inputValue = $('#timeInput').val();
    var path = 'file:///F:/'+inputValue.split('-')[0]+'.'+inputValue.split('-')[1]+'.'+inputValue.split('-')[2];
    var ss = path+'/'+val+'.mp4';
    // alert(inputValue);
    // alert(val);
    console.log(ss);
    //var url = URL.createObjectURL(ss);

    video.src = ss;

    video.play();
    //alert(path+'/'+val+'.mp4');
}




