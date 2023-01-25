// Get the modal
var modals = document.getElementById("myModal-2");


// Get the button that opens the modal
var btn = document.getElementById("myBtn-2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-2")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modals.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modals.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modals.style.display = "none";
  }
}