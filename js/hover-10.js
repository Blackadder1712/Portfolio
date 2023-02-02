//Get the modal
var modal10 = document.getElementById("myModal-10");


// Get the button that opens the modal
var btn = document.getElementById("myBtn-10");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-10")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal10.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal10.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal10) {
    modal10.style.display = "none";
  }
}