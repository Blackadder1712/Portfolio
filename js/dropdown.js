
$(document).ready(function(){
    $(".dropbtn").click(function(){
            $(".dropdown-content").slideToggle();
            $(".dropdown-content ")
        });

        // $("ul li").click(function(){
        //     $("ul ul").slideUp();
        //     $(this).find('ul').slideToggle();
        // });
        $('.dropdown-content a').click(function () {
            $(this).siblings().find('.dropdown-content').slideUp();
            $(this).find('.dropdown-content').slideToggle();
        });

        $(window).resize(function(){
            if($(window).width() > 768){
                $(".dropdown-content").removeAttr('style');
            }
        });
 });

