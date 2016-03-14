<?php
require_once 'C:\Users\jamie\Desktop\Work\Second Year\Web Programming 2\NetBeansProjects\PhpProject2\Classes\Connection.php';
require_once 'TableGateway.php';

$Connection = Connection::getInstance();

$gateway = new TableGateway($Connection);

$statement = $gateway->getCategory();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="styles/Style.css">
    </head>
    <body>
        <div class="table-responsive">
            <table class="table-bordered table-striped table-hover col-lg-11">

                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Category Manager</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Date Appointed</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody >
<?php
$row = $statement->fetch(PDO::FETCH_ASSOC);
while ($row) { //a while loop that prints out each row of data for each table in the database
    //displays the value of each respective row for each respective table column
    echo '<tr>';
    echo '<td>' . $row['ID'] . '</td>';
    echo '<td>' . $row['categoryManager'] . '</td>';
    echo '<td>' . $row['emailAddress'] . '</td>';
    echo '<td>' . $row['managerPhoneNum'] . '</td>';
    echo '<td>' . $row['managerDateAppointed'] . '</td>';
    echo '<td>' . $row['managerLocation'] . '</td>';
    echo '<td>';
    echo '<td>'
    . '<a href="viewManagers.php?id=' . $row['ID'] . '">View</a> ' //Lets the user view an individual Manager
    . '<a href="Forms/editManagerForm.php?id=' . $row['ID'] . '">Edit</a> ' //Lets the user edit the selected Manager
    . '<a href="deleteManager.php?id=' . $row['ID'] . '">Delete</a> ' //Lets the user delete the respective Manager
    . '</td>';
    echo '</tr>';

    $row = $statement->fetch(PDO::FETCH_ASSOC);
}
?>
                </tbody>


                <p><a href="CreateCategoryManagerForm.php">Create Manager</a></p>
            </table>
        </div>
    </body>




</html>
