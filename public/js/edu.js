$(document).ready(function(){
    var videoUrl = $('#videoUrl');
    var banner_title = $('#banner-title');
    var myPlayer = videojs('banner-video');
    var playModel = $('#playModel');
    var carousel = $('.carousel');

    carousel.carousel({
        interval: 3000
    })
    carousel.on('slide.bs.carousel', function (relatedTarget) {
        var a = relatedTarget.relatedTarget;
        var desc = a.attributes["desc"].value;
        $('#carousel-title-word').html(desc);
    })

    myPlayer.on('play', function() {
        $('.vjs-text-track-display').addClass('vjs-hidden');
    });
    myPlayer.on('pause', function() {
        $('.banner').removeClass('banner_hide').addClass('banner_show');
    });
    myPlayer.on('ended', function() {
        $('.banner').removeClass('banner_hide').addClass('banner_show');
    });

    $('#head_3').on('click', function(event) {
        activeAndScroll('head_3','elephant');
    });
    $('#head_2').on('click', function(event) {
        activeAndScroll('head_2','program');
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
        play($(this));
    });

    $('.video_pic').bind('click',function(){
        play($(this));
    });

    playModel.on('hidden.bs.modal', function(e) {
        myPlayer.pause();
    });

    $(document).keydown(function(event){
        var keycode = event.keyCode;
        if(keycode == 32 || keycode == 13){
            playerToggle();
        }
        if(keycode == 38){
            adjustPlayerVolume(true)
        }
        if(keycode == 40){
            adjustPlayerVolume(false)
        }
        if(keycode == 37){
            adjustPlayerCurTime(false);
        }
        if(keycode == 39){
            adjustPlayerCurTime(true);
        }
    });

    function adjustPlayerCurTime(flag){
        var curTime = myPlayer.currentTime();
        if(flag){
            myPlayer.currentTime(curTime+20);
        }else{
            myPlayer.currentTime(curTime-20);
        }
    }

    function adjustPlayerVolume(flag){
        var volume = myPlayer.volume();
        if(flag){
            myPlayer.volume(volume+0.1);
        }else{
            myPlayer.volume(volume-0.1);
        }
    }

    function playerToggle(){
        var isPaused = myPlayer.paused();
        if(isPaused){
            myPlayer.play();
        }else{
            myPlayer.pause();
        }
    }

    function play(obj){
        var video_url = obj.attr('videoAddr');
        var picUrl = obj.attr('picUrl');
        var videoTitle = obj.attr('videoTitle');
        banner_title.text(videoTitle);
        myPlayer.poster(picUrl);
        myPlayer.src(video_url);
        myPlayer.load();
        playModel.modal('show');
    }

    function changeVideoPannel(obj){
        $('.videos').hide();
        $('.videos').removeClass('hide');
        $("div[name='pannel_"+obj+"']").show();
    }

    function navReset(){
        $('.sub_tag').removeClass('nav_active');
    }

    function activeAndScroll(id,position){
        $('.itemmy').removeClass('active');
        $('#'+id).addClass('active');
        $('html,body').animate({scrollTop:$('#'+position).offset().top},200);
    }

    $(document).scroll(function(){
        var programTop = $('#program').offset().top-60;
        var elephantTop = $('#common_box').offset().top;
        var elephantHeight = $('#common_box').height();
        var scrollTop = $(document).scrollTop();
        if(scrollTop < programTop){
            $('.itemmy').removeClass('active');
            $('#head_1').addClass('active')
        } else if(scrollTop > programTop && scrollTop < (elephantTop+elephantHeight/2)){
            $('.itemmy').removeClass('active');
            $('#head_2').addClass('active')
        } else {
            $('.itemmy').removeClass('active');
            $('#head_3').addClass('active')
        }
    })
});