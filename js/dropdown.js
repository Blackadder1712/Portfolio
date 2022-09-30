


$(".dropbtn").click(function()
{
    $(".dropdown-content").slideDown();
    callback()
});

$(.document).ready(function(){
    $(".dropdown").scroll(function(){
       $(".dropdown").css('display','inline').fadeOut(1000);
    });
 });
