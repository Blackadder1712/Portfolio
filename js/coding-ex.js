// Get the button that shows the element
var btn = document.getElementById("coder");


//get the element 
var buttons = document.getElementById("c-buttons")
var code = document.getElementById("coding");
var me = document.getElementById("caption-text-about");
var home = document.getElementById("caption-text-index");
var port = document.getElementById("portfolio");
var scheme = document.getElementById("scheming");
// When the user clicks on the button, open the modal and background
btn.onclick = function() {
    code.style.display = "flex";
    home.style.display = "none";
    port.style.display = "none";
    buttons.style.display = "flex";
    scheme.style.display = "none";
    me.style.display = "none";
  }