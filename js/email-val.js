const emailInput = document.getElementById('email');
const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


$(".submit").click(function()
{
  if (!emailInput.value.match(emailRegex) ) 
    {
    alert('Invalid email address.');
  
    }

});


        
    