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

    $('#head_3').on('click', function(event) {
        activeAndScroll('head_3','elephant');
    });
    $('#head_2').on('click', function(event) {
        activeAndScroll('head_2','program');
    });
    //$('#head_1').on('click', function(event) {
    //    activeAndScroll('head_1','');
    //});

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

    $('#carousel-example-generic').on('slide.bs.carousel', function () {
        //alert(123);
    })

    $(document).scroll(function(){
        var navTop = $('#nav').offset().top;
        var videoHeight = $('.problems').offset().top;

        var programTop = $('#program').offset().top-60;
        var programHeight = $('#program').height();

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
        //console.log(videoHeight,programHeight,scrollTop,(programTop+programHeight));
    })
});