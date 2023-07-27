// Get the button that shows the element
var btn = document.getElementById("certify");



//get the element 

var me = document.getElementById("caption-text-about");
var home = document.getElementById("caption-text-index");
var port = document.getElementById("portfolio");
var scheme = document.getElementById("scheming");
var certify = document.getElementById("certificate")

// When the user clicks on the button, open the modal and background
btn.onclick = function() {
    me.style.display = "none";
    home.style.display = "none";
    port.style.display = "none";
    scheme.style.display = "none";
    certify.style.display = "flex";
   
  }



  
