// opens drop down menu on button click

$(".dropbtn").click(function()
{
    $(".dropdown-content").slideDown();
    callback()
})

//closes when link is pressed 

$(".dropdown-content a").click(function()
{
     $(".dropdown-content").slideUp(1000);
});