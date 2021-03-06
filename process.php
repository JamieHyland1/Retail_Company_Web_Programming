<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
                <link rel="stylesheet" type="text/css" href="960.css">
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="text.css">
		<link rel="stylesheet" type="text/css" href="style.css"> <!-- my style sheet -->
    </head>
    <body>
        <div class="container_12">
        <pre>
            
            <?php   
            
                $form_data = array(); //empty array to hold all of the user input elements
                $errors = array(); //empty array to hold any errors
                $input_method = INPUT_GET; 
                
                
     //Santizing the input fields to prevent any Js or SQL injections           
//=========================================================================================================================                
                $form_data["UserName"] = filter_input($input_method, "UserName", FILTER_SANITIZE_STRING);
                $form_data["Password"] = filter_input($input_method, "Password", FILTER_SANITIZE_STRING);
                $form_data["phone"] = filter_input($input_method, "phone", FILTER_SANITIZE_NUMBER_INT);
                $form_data["location"] = filter_input($input_method, "location", FILTER_SANITIZE_STRING);
                $form_data["date"] = filter_input($input_method, "phone", FILTER_SANITIZE_NUMBER_INT);
//=========================================================================================================================
// Checking to see if, the values are strings in the case of text elements 
//or numbers in case of the date and phone and also checking if the values or null
//These Errors will be printed out in the span elements of the HTML form
                if($form_data["UserName"] === NULL || $form_data["UserName"] === FALSE || $form_data["UserName"] === "")
                {
                    $errors["UserName"] = "Username is required";
                }
                if($form_data["Password"] === NULL || ["Password"] === FALSE || $form_data["Password"] === "")
                {
                    $errors["Password"] = "Password is required";
                }
                if($form_data["mail"] === NULL || $form_data["mail"] === FALSE || $form_data["mail"] === "")
                {
                    $errors["mail"] = "An e-mail is required";
                }
               if ($form_data["phone"] !== NULL &&
			$form_data["phone"] !== FALSE &&
			$form_data["phone"]  !== "")
                            {
                                $sellPrice = intval($form_data["phone"]);
                                if (strlen($sellPrice) <= 0 || strlen($sellPrice) > 10)
                                    {
                                        $errors['phone'] = "Phone number must be 0-9 characters long"; //Making sure the the phone number has to be 10 digits long 
                                    }
                            }
                 if($form_data["location"] === NULL || $form_data["location"] === FALSE || $form_data["location"] === "")
                {
                    $errors["location"] = "Location is required";
                }
//====================================================================================================================================================================
                if(empty($errors))
                {
                    require 'response.php';
                }
                else 
                {
                    require 'index.php';
                   
               }
            ?>
        </pre>
        </div>
    </body>
</html>
