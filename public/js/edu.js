$(document).ready(function(){
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

    function changeVideoPannel(obj){
        $('.videos').hide();
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