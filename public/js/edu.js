$(document).ready(function(){
    var videoUrl = $('#videoUrl');
    var banner_title = $('#banner-title');
    var myPlayer = videojs('banner-video');
    var playModel = $('#playModel');
    //var bigPlayBtn = $('.vjs-text-track-display');

    myPlayer.on('play', function() {
        //$('.banner').removeClass('banner_show').addClass('banner_hide');
        $('.vjs-text-track-display').addClass('vjs-hidden');
    });
    myPlayer.on('pause', function() {
        $('.banner').removeClass('banner_hide').addClass('banner_show');
        //$('.vjs-text-track-display').removeClass('vjs-hidden');
        //bigPlayBtn.show();
    });
    myPlayer.on('ended', function() {
        $('.banner').removeClass('banner_hide').addClass('banner_show');
    });

    $('.flicker-example').flicker();
    $('#head_3').on('click', function(event) {
        activeAndScroll('head_3','elephant');
    });
    $('#head_2').on('click', function(event) {
        activeAndScroll('head_2','program');
    });
    $('#head_1').on('click', function(event) {
        activeAndScroll('head_1','top');
    });

    $('.sub_tag').bind('click',function(){
        var name = $(this).attr('name');
        var words = $(this).text();

        navReset();
        //$(this).html("<img src='img/btn_sel"+words+".jpg' width='100%' height='100%'/>");
        //$(this).css("backgroundImage","url(img/btn_sel"+words+".jpg)");
        $(this).addClass('nav_active');
        changeVideoPannel(name);
    });

    $('.video_title').bind('click',function(){
        var video_url = $(this).attr('videoAddr');
        var picUrl = $(this).attr('picUrl');
        var videoTitle = $(this).attr('videoTitle');
        banner_title.text(videoTitle);
        myPlayer.poster(picUrl);
        myPlayer.src(video_url);
        myPlayer.load();
        playModel.modal('show');
    });

    //模态框隐藏时，视频播放器清空
    playModel.on('hidden.bs.modal', function(e) {
        myPlayer.pause();
        console.log('player model hide');
    });

    function changeVideoPannel(obj){
        $('.videos').hide();
        $('.videos').removeClass('hide');
        $("div[name='pannel_"+obj+"']").show();
    }

    function navReset(){
        $('.sub_tag').removeClass('nav_active');
    }

    function activeAndScroll(id,position){
        $('.item').removeClass('active');
        $('#'+id).addClass('active');
        $('html,body').animate({scrollTop:$('#'+position).offset().top},200);
    }
});