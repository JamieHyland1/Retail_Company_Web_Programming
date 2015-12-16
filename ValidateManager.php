<?php

function echoValue($array, $fieldName) {
    if (isset($array) && isset($array[$fieldName])) {
        echo $array[$fieldName];
    }
}



$form_data = array(); //empty array to hold all of the user input elements
$errors = array(); //empty array to hold any errors
 function validate (&$form_data, &$errors)
  {
    $form_data["UserName"] = filter_input($input_method, "UserName", FILTER_SANITIZE_STRING);
                   $form_data["Password"] = filter_input($input_method, "Password", FILTER_SANITIZE_STRING);
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
                                           $errors['phone'] = "Phone number must be 0-9 characters long"; //Making sure the the phone number has to be 10 digits long 
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
    }
            ?>
