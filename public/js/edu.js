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

    function activeAndScroll(id,position){
        $('.item').removeClass('active');
        $('#'+id).addClass('active');
        $('html,body').animate({scrollTop:$('#'+position).offset().top},200);
    }
});