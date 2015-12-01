window.onload = function ()
{
    var submitBtn = document.getElementsByID('submit');
    
    submitBtn.addEventListener('click', function(event)
    { 
        var valid = true; // valid is true when theres no erros in submitting
                          // valid is false when there are validation errors
                          
         //Getting reference to element errors
         //=====================================================================
        var userNameErrorElement = document.getElemenByID("UserNameError");
        var passwordErrorElement = document.getElemenByID("Password"); 
        var mailErrorElement = document.getElemenByID("mailError");    
        var phoneErrorElement = document.getElemenByID("PhoneError");         
        var dateErrorElement = document.getElemenByID("DateError");         
        var locationErrorElement = document.getElemenByID("locationError");         
         //=====================================================================

         //clearing any errors from previous form submission
         //=====================================================================
         userNameErrorElement.innerHTML = " ";
         passwordErrorElement.innerHTML = " ";
         mailErrorElement.innerHTML = " ";
         phoneErrorElement.innerHTML = " ";
         dateErrorElement.innerHTML = " ";
         locationErrorElement.innerHTML = " ";
         //=====================================================================
         
         //getting references to my input fields
         //=====================================================================
         
         var userNameField = document.getElementByID('UserName');
         var passwordField = document.getElementByID('password');
         var mailField = document.getElementByID('mail');
         var phoneField = document.getElementByID('phone');
         var dateField = document.getElementByID('date');
         var locationField = document.getElementByID('location');
         //=====================================================================
         
         //getting the values in input(text elements
         //=====================================================================
         
         var username = userNameField.value;
         var password = passwordField.value;
         var mail = mailField.value;
         var phone = phoneField.value;
         var date = dateField.value;
         var location = locationField.value;
         //=====================================================================
         
         
         //making sure username is a required field
         //=====================================================================
         if(username == "")
         {
             userNameErrorElement.innerHTML = "UserName is required";
             valid = false;
         }
         //=====================================================================


        
        
        
        
        
        
        
        
        
        
        
        if(!valid)
        {
            event.preventDefault();
        }
        
        
        
    });
};
