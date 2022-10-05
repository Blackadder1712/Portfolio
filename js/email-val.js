
// variables to set regex
let emailInput = document.getElementById('email');
let emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
let nameInput = document.getElementById('Name');
let nameRegex = /[^0-9]/;
let lastNameInput = document.getElementById('LastName');
let LastnameRegex = /[^0-9]/;
let messageInput = document.getElementById('Subject');
let messageRegex = /^[a-zA-Z0-9-]+$/;

 //Check if first name field contains only alphabetical characters 
$(".submit").click(function()
{
   if (!nameInput.value.match(nameRegex))
    
   
              {
                $("#Name").css({"border": "3px solid red"})
              }
              else 
              {
                $("#Name").css({"border": "3px solid #7FFF94"})
              };
            
          if(!lastNameInput.value.match(LastnameRegex))
              {
                $("#LastName").css({"border": "3px solid red"})
              }
              else
              {
                $("#LastName").css({"border": "3px solid #7FFF94"})
              };

              //check if email field contains @ character
          if (!emailInput.value.match(emailRegex) ) 
              {
                $("#email").css({"border": "3px solid red"})
              }
              else
              {
                $("#email").css({"border": "3px solid #7FFF94"})
              };

              //Check if message field contains characters
          if(!messageInput.value.match(messageRegex))
              {
                $("#Subject").css({"border": "3px solid red"})
              }
              else
              {
                $("#Subject").css({"border": "3px solid #7FFF94"})
              };

    });


        
    