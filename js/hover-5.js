// Get the modal

var modal5 = document.getElementById("myModal-5");
var background = document.getElementById("scroll-2");


// Get the button that opens the modal
var btn = document.getElementById("myBtn-4");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-5")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal5.style.display = "block";
  background.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal5.style.display = "none";
  background.style.display = "none";
}


btn.onclick = function() {
  modal5.style.display = "block";
  background.style.display = "flex";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal5) {
    modal5.style.display = "none";
    background.style.display = "flex";
  }
}