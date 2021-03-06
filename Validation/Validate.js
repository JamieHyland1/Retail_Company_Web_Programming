window.onload = function ()
{
    
    function isNumber(n)
    {
        return !isNaN(parseInt(n)) && isFinite(n);
    }
    function isValidDateFormat(date)
    {
        var re = /\d{4}-\d{2}-\d{2}/; //makes sure the date is entered in the form YYYY/MM/DD 
                                     //there were some errors with chrome going in the form DD/MM/YYYY
        return re.test(date);
        
    }
    function isDate(date)
    {
        var parts = date.split("/");
        var days = parseInt(parts[0], 10);
        var month = parseInt(parts[1], 10);
        var year = parseInt(parts[2], 10);
        
        var monthLength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        
        //adjusting for leap years
        if(year%400 === 0 ||(year%100 !== 0 && year%4 === 0))
        {
            monthLength[1] = 29;
        }
        
        return (year >= 1000 && year <= 3000 &&
                month >= 1 && month <= 12 &&
                days >= 1 && days <=  monthLength[month - 1]);
    }
    function isValidEmailFormat(mail)
    {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        return re.test(mail);
    }


    var submitBtn = document.getElementById('submit');
    
    submitBtn.addEventListener('click', function(event)
    { 
        var valid = true; // valid is true when theres no erros in submitting
                          // valid is false when there are validation errors
                          
         //Getting reference to element errors
         //=====================================================================
        var userNameErrorElement = document.getElementById("UserNameError");
        var passwordErrorElement = document.getElementById("PasswordError"); 
        var mailErrorElement = document.getElementById("mailError");    
        var phoneErrorElement = document.getElementById("phoneError");         
        var dateErrorElement = document.getElementById("dateError");         
        var locationErrorElement = document.getElementById("locationError");         
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
         
         var userNameField = document.getElementById('UserName');
         var passwordField = document.getElementById('Password');
         var mailField = document.getElementById('mail');
         var phoneField = document.getElementById('phone');
         var dateField = document.getElementById('date');
         var locationField = document.getElementById('location');
         //=====================================================================
         
         //getting the values in input(text elements)
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
         if(username === "")
         {
             userNameErrorElement.innerHTML = "UserName is required";
             valid = false;
         }
         if(password === "")
         {
             passwordErrorElement.innerHTML = "Password is required";
             valid = false;
         }
         if(mail === "" && !isValidEmailFormat(mail))
         {
             mailErrorElement.innerHTML = "E-mail is required";
             valid = false;
         }
         if(phone === "" && !isNumber(phone))
         {
             phoneErrorElement.innerHTML = "Phone number must be a number";
             valid = false;
         }
         else if(phone !== "" && isNumber(phone))
         {
             var phoneNum = parseInt(phone);
             if(phoneNum.toString().length < 0 || phoneNum.toString().length > 10)
             {
                 phoneErrorElement.innerHTML = "Phone number must be 0-10 characters long";
                 valid = false;
             }
         }
         if(date !== "" && !isValidDateFormat(date))
         {
             dateErrorElement.innerHTML = "A date is required in the form dd/mm/yyyy";
             valid = false;
         }
         else if (date === "")
         {
             dateErrorElement.innerHTML = "A date is required";
             valid = false;
         }
         if(location === "")
         {
             locationErrorElement.innerHTML = "A store location is required";
             valid = false;
         }
         //=====================================================================

        
        
        
        
        if(!valid)
        {
            event.preventDefault();
        }
        
        
        
    });
};
