// Get the button that shows the element
var Sbtn = document.getElementById("schemeL");


//get the element 
var me = document.getElementById("caption-text-about");
var home = document.getElementById("caption-text-index");
var port = document.getElementById("portfolio");
var scheme = document.getElementById("scheming");
var certify = document.getElementById("certificate");
var code = document.getElementById("coding");
var form = document.getElementById("former");
// When the user clicks on the button, open the modal and background
Sbtn.onclick = function() {
    code.style.display = "none";
    home.style.display = "none";
    port.style.display = "none";
    buttons.style.display = "none";
    me.style.display = "none";
    form.style.display = "none";
    scheme.style.display = "flex";
    certify.style.display = "none";
  }