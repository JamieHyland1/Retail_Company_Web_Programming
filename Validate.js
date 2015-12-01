window.onload = function ()
{
    
    function isNumber(n)
    {
        return !isNaN(parseInt(n)) && isFinite(n);
    }
    function isValidDateFormat(date)
    {
        var re = /^d{2}\/\d{2}\/\d{4}$/;
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
        if(year%400 == 0 ||(year%100 != 0 && year%4 === 0))
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
         if(password == "")
         {
             passwordErrorElement.innerHTML = "Password is required";
             valid = false;
         }
         if(mail == "" && !isvalidEmailFormat(mail))
         {
             mailErrorElement.innerHTML = "E-mail is required";
             valid = false;
         }
         if(phone == "" && !isNumber(phone))
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
         if(date == "" && isvalidDateFormat(date))
         {
             dateErrorElement.innerHTML = "A date is required in the form dd/mm/yyyy";
             valid = false;
         }
         else if (date != "" && !isvalidDateFormat(date))
         {
             dateErrorElement.innerHTML = "A date is required";
         }
         if(location == "")
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
