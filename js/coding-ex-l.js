// Get the button that shows the element
var Cbtn = document.getElementById("codeL");


//get the element 

var code = document.getElementById("coding");
var me = document.getElementById("caption-text-about");
var home = document.getElementById("caption-text-index");
var port = document.getElementById("portfolio");
var scheme = document.getElementById("scheming");
var buttons = document.getElementById("c-buttons");
// When the user clicks on the button, open the modal and background
Cbtn.onclick = function() {
    
    home.style.display = "none";
    port.style.display = "none";
    buttons.style.display="flex";
    code.style.display ="flex";
    scheme.style.display = "none";
    me.style.display = "none";
  }