// Get the button that shows the element

var Lbtn = document.getElementById("aboutL");


//get the element 

var me = document.getElementById("caption-text-about");
var home = document.getElementById("caption-text-index");
var port = document.getElementById("portfolio");
var scheme = document.getElementById("scheming");
var form = document.getElementById("former");



  //large nav

Lbtn.onclick = function()
{
  me.style.display = "flex";
  home.style.display = "none";
  port.style.display = "none";
  scheme.style.display = "none";
  form.style.display = "none";
 
}
  