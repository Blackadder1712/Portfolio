//Get the modal
var modal33 = document.getElementById("myModal-33");


// Get the button that opens the modal
var btn = document.getElementById("myBtn-33");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-33")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal33.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal33.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal33) {
    modal33.style.display = "none";
  }
}