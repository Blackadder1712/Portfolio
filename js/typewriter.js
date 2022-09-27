//variables
let titleArray = ["My Name is Amy Vincent"];
let textPosition = 0;
let speed = 100;

//function
typewriter = () =>
{
    document.querySelector(".img-title").
    innerHTML = titleArray[0].substring(0, textPosition)
    + "<span>\u25ae</span>";// text block
   //as long as text position isnt += array length it will keep incrementing
    if(textPosition++ != titleArray[0].length) 
      setTimeout(typewriter, speed); 
}

//start function on page load
window.addEventListener("load", typewriter);
