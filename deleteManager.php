<?php
require_once 'CatManager.php';   //Connecting to the Manager class
require_once 'TableGateway.php'; //Connecting to the TableGateway
require_once 'Connection.php'; //Connecting to the Connection class

//==============================================================================
//If there is no ID in the GET array then cancel the request
if (!isset($_GET['id'])) 
{
    die("Illegal request");
}
$id = $_GET['id']; 
//making a variable called id to hold the value of the the 'id' in the GET array
//==============================================================================
$connection = Connection::getInstance();

$gateway = new TableGateway($connection);

$gateway->delete($id);//passes the ID into the delete function in the tablegateway

header('location: Home.php');
//returns to the home page and prevents multiple subimssions if the user reloads the page

 