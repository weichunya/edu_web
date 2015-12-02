$(document).ready(function(){
    var winHeight = $(window).height();
    setWinWidth(winHeight);

    var shopId = $('#shopId').val();
    var activityId = $('#activityId').val();
    var shareType = $('#shareType').val();
    var userId = $('#userId').val();
    var os_type = isiphone()? '2' : '1';
    var scene = $('#scene').val();
    var channel = $('#channel').val();

    var array = {
        'shopId' : shopId,
        'scene' : scene,
        'os_type' : os_type
    }
    $.post('/system/download/record-num',array,null,'json');

    $('.get_money').bind('click' , function(){
        var phoneNumber = $('.phone').val();
        if(!isphone(phoneNumber)){
            alert("请输入正确的手机号");
        }else{
            var url = getUrl(shareType);
            var data = getData(shareType,phoneNumber);
            var callback = function(res){
                if(res.code == 20503){
                    window.location.href="/system/download/app-one?os_type="+os_type;
                }else{
                    alert(res.msg);
                    window.location.href="/system/download/app-one?os_type="+os_type;
                }
            }
            $.get(url , data , callback , 'json');
        }
    });

    function setWinWidth(winHeight) {
        var img_url = 'http://7xlbf0.com1.z0.glb.clouddn.com/dbh_bg_1.jpg';
        var img = new Image();
        img.src = img_url;
        img.onload = function(){
            var width = img.width;
            var height = img.height;
            var newWidth = winHeight*width/height;
            var winWidth = ispc() ? newWidth : '100%';
            $('.dbh_panel').css({'background-size' : winWidth + ' ' + winHeight+'px' , 'height' : winHeight});
            $('#master').width(winWidth);
        }
    }

    function getUrl(typeStr){
        if(typeStr == '1') {
            return '/activity/share/give-red-packet';
        }
        return '/activity/share/share-red-packet';
    }

    function getData(shareType,phoneNumber) {
        var os_type = isiphone()? '2' : '1';
        var data = {
            'tel' : phoneNumber,
            'activityId' : activityId
        }
        data.os_type = os_type
        if(shareType == '1'){
            data.shopId = shopId;
            data.scene = scene;
        } else {
            data.userId = userId;
            data.channel = channel;
        }
        return data;
    }

    function ispc(){
        var userAgentInfo = navigator.userAgent;
        var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
        var flag = true;
        for (var v = 0; v < Agents.length; v++){
            if (userAgentInfo.indexOf(Agents[v]) > 0){
                flag = false; break;
            }
        }
        return flag;
    }

    function isphone(inpurStr){
        var partten = /^1[3|4|5|8|7][0-9]\d{8}$/;
        if(partten.test(inpurStr)){
            return true;
        }else{
            return false;
        }
    }

    function isiphone(){
        if(navigator.userAgent.match(/iPhone/i)){
            return true;
        }
        return false;
    }
});