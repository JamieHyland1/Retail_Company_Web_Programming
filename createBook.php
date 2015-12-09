<?php
require_once 'Book.php';
require_once 'TableGateway.php';
require_once 'Connection.php';


$authorName = $_POST['authorName'];
$bookName = $_POST['bookTitle'];
$costPrice = $_POST['costPrice'];
$sellPrice = $_POST['sellPrice'];

$book = new Book(-1, $authorName, $bookName, $costPrice, $sellPrice);

$connection = Connection::getInstance();

$gateway = new TableGateway($connection);

$id = $gateway->insertBook($book);

header('location: Home.php');

?>

