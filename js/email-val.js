let emailInput = document.getElementById('email');
let emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
let nameInput = document.getElementById('Name');
let nameRegex = /[^0-9]/;
let lastNameInput = document.getElementById('LastName');
let LastnameRegex = /[^0-9]/;
let messageInput = document.getElementById('Subject');
let messageRegex = /(?:[A-Za-z].*?\d|\d.*?[A-Za-z])/;


$(".submit").click(function()
{
  if (!emailInput.value.match(emailRegex) ) 
    {
    alert('Invalid email address.');
  
    }
  else if (!nameInput.value.match(nameRegex))
    {
      alert('Invalid First name.')
    }
    else if (!lastNameInput.value.match(LastnameRegex))
    {
      alert('Invalid Last name.')
    }
  else (!messageInput.value.match(messageRegex))
    {
      alert('Please enter message')
    }

});


        
    