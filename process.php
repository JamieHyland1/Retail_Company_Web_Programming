<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
                <link rel="stylesheet" type="text/css" href="960.css">
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="text.css">
		<link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
        <div class="container_12">
        <pre>
            
            <?php   
            
                $form_data = array();
                $errors = array();
                $input_method = INPUT_GET;
                
                $form_data["UserName"] = filter_input($input_method, "UserName", FILTER_SANITIZE_STRING);
                $form_data["Password"] = filter_input($input_method, "Password", FILTER_SANITIZE_STRING);
//                $form_data["Product_Category_Manager"] = filter_input($input_method, "Product_Category_Manager", FILTER_SANITIZE_STRING);
                $form_data["mail"] = filter_input($input_method, "mail", FILTER_SANITIZE_STRING);
                $form_data["phone"] = filter_input($input_method, "phone", FILTER_SANITIZE_NUMBER_INT);
                $form_data["location"] = filter_input($input_method, "location", FILTER_SANITIZE_STRING);
                $form_data["date"] = filter_input($input_method, "phone", FILTER_SANITIZE_NUMBER_INT);
                
                if($form_data["UserName"] === NULL || $form_data["UserName"] === FALSE || $form_data["UserName"] === "")
                {
                    $errors["UserName"] = "Username is required";
                }
                if($form_data["Password"] === NULL || ["Password"] === FALSE || $form_data["Password"] === "")
                {
                    $errors["Password"] = "Password is required";
                }
//                if($form_data["Product_Category_Manager"] === NULL || $form_data["Product_Category_Manager"] === FALSE || $form_data["Product_Category_Manager"] === "")
//                {
//                    $errors["Product_Category_Manager"] = "Product Category Manager is required";
//                }
                if($form_data["mail"] === NULL || $form_data["mail"] === FALSE || $form_data["mail"] === "")
                {
                    $errors["mail"] = "An e-mail is required";
                }
               if ($form_data["phone"] !== NULL &&
			$form_data["phone"] !== FALSE &&
			$form_data["phone"]  !== "")
                            {
                                $phone = intval($form_data["phone"]);
                                if (strlen($phone) <= 0 || strlen($phone) > 10)
                                    {
                                        $errors['phone'] = "Phone number must be 0-9 characters long";
                                    }
                            }
                 if($form_data["location"] === NULL || $form_data["location"] === FALSE || $form_data["location"] === "")
                {
                    $errors["location"] = "Location is required";
                }
                if(empty($errors))
                {
                    require 'response.php';
                }
                else 
                {
                    require 'index.php';
                   
               }
               
                
//                print_r($errors);
//                print_r($_GET);
            ?>
        </pre>
        </div>
    </body>
</html>
