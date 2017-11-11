/**
 * Created by Administrator on 2017/7/18.
 */
$(function () {


    // 在线检测按钮
    $('#find').click(function () {
        // 弹出框
        // $('#findPopup').remove('none').addClass('block');
        // // 插件方法
        // var findDevStr = $('#obj')[0].video_dev();
        // console.log($('#obj')[0]);
        // console.log(findDevStr);
        // var findDevArr = findDevStr.split('http');
        // var haikang = 'http'+findDevArr[1];
        // var dahua = 'http'+findDevArr[3];
        // console.log(findDevArr);
        // console.log('findDevArr[0]:'+findDevArr[1]);
        // console.log('findDevArr[2]:'+findDevArr[3]);
        // ipStr = '<tr><td>01</td><td>'+haikang+'</td><td>8000</td></tr><tr><td>02</td><td>'+dahua+'</td><td>80</td></tr>'
        // $('#findContentTable').append(ipStr);

        var tableStr;
        var devName;
        var portNum;
        var findDevStr = $('#obj')[0].video_dev();
        var findDevArr = findDevStr.split('http');
        var arr = new Array();
        var num;
        // arr.push(findDevArr[1]);
        console.log(findDevStr);
        console.log(findDevArr);
        for (var i=1; i<=findDevArr.length-1;i++){
            // console.log(findDevArr[i].indexOf('['));
            if (findDevArr[i].indexOf('[') != -1){

                continue;
            }
            arr.push(findDevArr[i]);
            // if (i==1){num='1'; devName ='海康NVR'; }
            // if (i==2){num='2'; devName = '海康'; }
            // if (i==4){num='3'; devName = '大华';}
        }

        console.log(arr)

        for (var i=0;i<arr.length; i++){
            num = i+1;
            console.log(arr[i]);
            if (num <= 9){
                num = '0'+num;
            }
            tableStr += '<tr><td>'+num+'</td><td>'+devName+'</td><td>ONVIF设备</td><td>http:'+arr[i]+'</td><td></td></tr>';
        }

        $('#devTable').append(tableStr);

        $('tr:odd').css('background-color','#ddd');

        $('#devTable tr').click(function () {
            // console.log(this);
            // this.hide()
        })


    })

    $('#findPopupDel').click(function () {
        $('#findPopup').removeClass('block').addClass('none');
    })

    $('.switchViewBtn div').click(function () {
        $('.switchViewBtn div').removeClass().addClass('unselec');
        $(this).removeClass().addClass('selec');
        $('.con').removeClass('contentView block').addClass('none');
        $($('.con')[$(this).index()]).removeClass('none').addClass('contentView block');

    })
})




function zhishu(){
    var zhe=document.getElementById("zhishu").value;
    switch (zhe){
        case "1":
            $(".form1").css("display","none");
            $(".form2").css("display","none");
            $(".form3").css("display","none");
            $(".form").css("display","block");
        break;

        case "2":
            $(".form").css("display","none");
            $(".form2").css("display","none");
            $(".form3").css("display","none");
            $(".form1").css("display","block");
            ;
        break;

        case "3":
            $(".form").css("display","none");
            $(".form1").css("display","none");
            $(".form3").css("display","none");
            $(".form2").css("display","block");
            ;
        break;

        case "4":
            $(".form").css("display","none");
            $(".form1").css("display","none");
            $(".form2").css("display","none");
            $(".form3").css("display","block");
            ;
        break;
    }
}
$(document).ready(function(){
    $(".picture_word").hover(function(){
       $(this).addClass("back");
       $(this).children().show();
    },function(){
        $(this).removeClass("back");
        $(this).children().hide();
    });
    $("picture_word").click(function(){
        $(this).css("border","1px solid#f00")
    })
});


// var gui=document.getElementsById('gui');
//  gui.onclick=function(){
//     if(this.style.backgroundColor =='red'){
//         this.style.backgroundColor ='#000000';
//     }else{
//         this.style.backgroundColor ='red';
//      }
//  }




























































