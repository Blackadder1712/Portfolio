// Get the button that shows the element
var Pbtn = document.getElementById("portL");

//get the element 

var port = document.getElementById("portfolio");
var code = document.getElementById("coding");
var me = document.getElementById("caption-text-about");
var home = document.getElementById("caption-text-index");
var scheme = document.getElementById("scheming");

// When the user clicks on the button, open the modal and background
Pbtn.onclick = function() {
    port.style.display = "flex";
    me.style.display = "none";
    home.style.display = "none";
    scheme.style.display = "none";
    code.style.display = "none";
  }
  
