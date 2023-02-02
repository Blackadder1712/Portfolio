//Get the modal
var modal11 = document.getElementById("myModal-11");


// Get the button that opens the modal
var btn = document.getElementById("myBtn-11");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-11")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal11.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal11.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal11) {
    modal11.style.display = "none";
  }
}