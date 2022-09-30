let emailInput = document.getElementById('email');
let emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
let nameInput = document.getElementById('Name');
let nameRegex = /[^0-9]/;
let lastNameInput = document.getElementById('LastName');
let LastnameRegex = /[^0-9]/;
let messageInput = document.getElementById('Subject');
let messageRegex = /^[a-zA-Z0-9-]+$/;


$(".submit").click(function()
{
   if (!nameInput.value.match(nameRegex))
  {
    $("#Name").css({"border": "3px solid red"})
  }
  else if (!lastNameInput.value.match(LastnameRegex))
  {
    $("#LastName").css({"border": "3px solid red"})
  }
  else if (!emailInput.value.match(emailRegex) ) 
    {
       $("#email").css({"border": "3px solid red"})
  
    }
 
 
  else if(!messageInput.value.match(messageRegex))
    {
      $("#Subject").css({"border": "3px solid red"})
    }

});


        
    