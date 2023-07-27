// Get the button that shows the element
var btn = document.getElementById("coder");


//get the element 

var code = document.getElementById("coding");
var me = document.getElementById("caption-text-about");
var home = document.getElementById("caption-text-index");
var port = document.getElementById("portfolio");
var scheme = document.getElementById("scheming");
var buttons = document.getElementById("c-buttons");
var certify = document.getElementById("certificate");
// When the user clicks on the button, open the modal and background
btn.onclick = function() {
    
    home.style.display = "none";
    port.style.display = "none";
    buttons.style.display="flex";
    code.style.display ="flex";
    scheme.style.display = "none";
    me.style.display = "none";
    certify.style.display = "none";
  }