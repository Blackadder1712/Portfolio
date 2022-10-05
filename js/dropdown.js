        // make dropdown content slide down when button pressed
        $(".dropbtn").click(function(){
                $(".dropdown-content").slideToggle();
                $(".dropdown-content ")
            });

        // make it slide back up on 2nd click
            $('.dropdown-content a').click(function () {
                $(this).siblings().find('.dropdown-content').slideUp();
                $(this).find('.dropdown-content').slideToggle();
            });

            $(window).resize(function(){
                if($(window).width() > 768){
                    $(".dropdown-content").removeAttr('style');
                }
            });

            
    


