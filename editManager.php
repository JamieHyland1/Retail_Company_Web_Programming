<?php
require_once 'CatManager.php';   //Connecting to the Manager class
require_once 'TableGateway.php'; //Connecting to the TableGateway
require_once 'Connection.php'; //Connecting to the Connection class
 //=============================================================================
//Gets the the values from the post array of the edit manager form
$ID = $_GET['id'];
$authorName = $_POST['categoryManager'];
$bookName = $_GET['emailAddress'];
$sellPrice = $_POST['phone'];
$costPrice = $_POST['date'];
$productCatID = $_POST['location'];
//==============================================================================
 
     echo '<pre>';
     print_r($_POST);
     echo '</pre>';
//Creates a new manager object to be passed into the databse
$authorName = new CatManager($ID, $authorName, $bookName, $sellPrice, $costPrice, $productCatID);
//as you're editing an already existing object in the database, the ID is required unlike the create form

$connection = Connection::getInstance();

$gateway = new TableGateway($connection);

$gateway->update($authorName);

header('location: Home.php');
//returns to the home page and prevents multiple subimssions if the user reloads the page

//Getting weird Errors here
//Keeps saying undefined variables for each value in the POST array
//No values are being passed into the POST array on the edit Manager form
//If I change the ID to the GET array it shows up in the Manager object
//However changing this for the rest of the values proved to be no help
