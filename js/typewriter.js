let i = 0;
let txt = "My Name is Amy Vincent"; //text in typewriter effect
let speed = 50; //speed of effect in milliseconds

function typeWriter() 
{
    if(i < txt.length)
      {
        document.getElementById("typewriter").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      }
}
