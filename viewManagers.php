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

$statement = $gateway->getManagerById($id);

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
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Manager</th>
                    <th>email Address</th>
                    <th>manager Phone Number</th>
                    <th>Manager Date</th>
                    <th>Location</th>
                <tr>
            </thead>
            <tbody>
                <?php
                        echo '<tr>';
                        echo '<td>' . $row['ID'] . '</td>';
                        echo '<td>' . $row['categoryManager'] . '</td>';
                        echo '<td>' . $row['emailAddress'] . '</td>';
                        echo '<td>' . $row['managerPhoneNum'] . '</td>';
                        echo '<td>' . $row['managerDateAppointed'] . '</td>';
                        echo '<td>' . $row['managerLocation'] . '</td>';

                        echo '<td>';
                        echo '<td>'
                        . '<a href="editManager.php?id='.$row['ID'].'">Edit</a> '
                        . '<a class="delete" href="deleteManager.php?id='.$row['ID'].'">Delete</a> '
                        . '<a class="back" href="Home.php?id='.$row['ID'].'">Home</a> '

                        . '</td>';
                        echo '</tr>';

                       
                ?>
            </tbody>
        </table>
    
    
</html>
