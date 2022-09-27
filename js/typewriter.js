let i = 0;
let txt = "My Name is Amy Vincent";
let speed =50;

function typeWriter() 
{
    if(i < txt.length)
      {
        document.getElementByClass("img-title").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      }
}

console.log("hello");
