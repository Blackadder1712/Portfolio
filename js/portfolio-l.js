// Get the button that shows the element
var Pbtn = document.getElementById("portL");

//get the element 


var me = document.getElementById("caption-text-about");
var home = document.getElementById("caption-text-index");
var port = document.getElementById("portfolio");
var scheme = document.getElementById("scheming");
var certify = document.getElementById("certificate");
var code = document.getElementById("coding");
var form = document.getElementById("former");

// When the user clicks on the button, open the modal and background
Pbtn.onclick = function() {
    port.style.display = "flex";
    me.style.display = "none";
    home.style.display = "none";
    scheme.style.display = "none";
    code.style.display = "none";
    certify.style.display = "none";
  }
  
