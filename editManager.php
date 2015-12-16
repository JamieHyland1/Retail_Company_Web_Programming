<?php
require_once 'CatManager.php';   //Connecting to the Manager class
require_once 'TableGateway.php'; //Connecting to the TableGateway
require_once 'Connection.php'; //Connecting to the Connection class
 //=============================================================================
//Gets the the values from the post array of the edit manager form
$ID = $_GET['id'];
$manager = $_POST['categoryManager'];
$email = $_GET['emailAddress'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$location = $_POST['location'];
//==============================================================================
 
     echo '<pre>';
     print_r($_POST);
     echo '</pre>';
//Creates a new manager object to be passed into the databse
$manager = new CatManager($ID, $manager, $email, $phone, $date, $location);
//as you're editing an already existing object in the database, the ID is required unlike the create form

$connection = Connection::getInstance();

$gateway = new TableGateway($connection);

$gateway->update($manager);

header('location: Home.php');
//returns to the home page and prevents multiple subimssions if the user reloads the page

//Getting weird Errors here
//Keeps saying undefined variables for each value in the POST array
//No values are being passed into the POST array on the edit Manager form
//If I change the ID to the GET array it shows up in the Manager object
//However changing this for the rest of the values proved to be no help
