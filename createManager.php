<?php
require_once 'CatManager.php';   //Connecting to the Manager class
require_once 'TableGateway.php'; //Connecting to the TableGateway
require_once 'Classes/Connection.php'; //Connecting to the Connection class

//initializing variables and setting their value to the values in the post array from the CreateManagerForm
//=========================================================================================================
$authorName = $_POST['UserName'];
$bookName = $_POST['mail'];
$costPrice = $_POST['date'];
$sellPrice = $_POST['phone'];
$productCatID = $_POST['location'];
//=========================================================================================================
//Making a new manager object using the variable initialized above
$authorName = new CatManager(-1, $authorName,$sellPrice, $bookName , $costPrice, $productCatID);
//The ID value is -1 as the database will AUTO INCRIMENT the ID when it is passed into the database
//therefore no id is required from the user

$connection = Connection::getInstance();

$gateway = new TableGateway($connection);

$id = $gateway->insert($authorName);

header('location: Home.php');
//returns to the home page and prevents multiple subimssions if the user reloads the page



