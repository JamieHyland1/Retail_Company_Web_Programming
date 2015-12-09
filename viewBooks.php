<?php
require_once 'Connection.php';
require_once 'TableGateway.php';

if (!isset($_GET['id'])) 
{
    die("Illegal request");
}
$id = $_GET['id'];

$connection = Connection::getInstance();
$gateway = new TableGateway($connection);

$statement = $gateway->getBooksById($id);

$row = $statement->fetch(PDO::FETCH_ASSOC);
if (!$row) {
    die("Illegal request");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
                <link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="text.css">
                <link rel="stylesheet" type="text/css" href="960.css">
		<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

    </body>
        <table>
            <thead
                <tr>
                    <th>Book ID</th>
                    <th>Author Name</th>
                    <th>Book Title</th>
                    <th>Cost Price</th>
                    <th>Sell Price</th>
                <tr>
            </thead>
            <tbody>
                <?php
                        echo '<tr>';
                        echo '<td>' . $row['ProductID'] . '</td>';
                        echo '<td>' . $row['AuthorName'] . '</td>';
                        echo '<td>' . $row['BookName'] . '</td>';
                        echo '<td>' . $row['CostPrice'] . '</td>';
                        echo '<td>' . $row['sellPrice'] . '</td>';
                        echo '<td>';
                        echo '<td>'
                        . '<a href="editProgrammerForm.php?id='.$row['ProductID'].'">Edit</a> '
                        . '<a class="delete" href="deleteProgrammer.php?id='.$row['ProductID'].'">Delete</a> '
                        . '</td>';
                        echo '</tr>';

                       
                ?>
            </tbody>
        </table>
    
    
</html>
