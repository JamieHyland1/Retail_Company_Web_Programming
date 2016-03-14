<?php
require_once 'product.php';   //Connecting to the product class
require_once 'ProductTable.php'; //Connecting to the TableGateway
require_once 'Classes/Connection.php'; //Connecting to the Connection class

//initializing variables and setting their value to the values in the post array from the CreateProductForm
//=========================================================================================================
$authorName = $_POST['authorName'];
$bookName = $_POST['bookName'];
$costPrice = $_POST['costPrice'];
$sellPrice = $_POST['sellPrice'];
$productCatID = $_POST['productCatID'];
//=========================================================================================================
//Making a new manager object using the variable initialized above
$authorName = new product(-1, $authorName,$sellPrice, $bookName , $costPrice, $productCatID);
//The ID value is -1 as the database will AUTO INCRIMENT the ID when it is passed into the database
//therefore no id is required from the user

$connection = Connection::getInstance();

$gateway = new TableGateway($connection);

$id = $gateway->insert($authorName);

header('location: Home.php');
//returns to the home page and prevents multiple subimssions if the user reloads the page


