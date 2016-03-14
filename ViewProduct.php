<?php
require_once 'Classes/productTable.php';
require_once 'Classes/Connection.php';

$Connection = Connection::getInstance();

$gateway = new productTable($Connection);

$statement = $gateway->getProduct();
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
                        <th>Author Name</th>
                        <th>Book Title</th>
                        <th>Cost Price</th>
                        <th>Sell Price</th>
                        <th>Product Category ID</th>
                    </tr>
                </thead>
                <tbody >
<?php
$row = $statement->fetch(PDO::FETCH_ASSOC);
while ($row) { //a while loop that prints out each row of data for each table in the database
    //displays the value of each respective row for each respective table column
    echo '<tr>';
    echo '<td>' . $row['ID'] . '</td>';
    echo '<td>' . $row['AuthorName'] . '</td>';
    echo '<td>' . $row['BookName'] . '</td>';
    echo '<td>' . $row['CostPrice'] . '</td>';
    echo '<td>' . $row['sellPrice'] . '</td>';
    echo '<td>' . $row['productCatID'] . '</td>';
    echo '<td>';
    echo '<td>'
    . '<a href="viewProducts.php?id=' . $row['ID'] . '">View</a> ' //Lets the user view an individual Manager
    . '<a href="Forms/editManagerForm.php?id=' . $row['ID'] . '">Edit</a> ' //Lets the user edit the selected Manager
    . '<a href="deleteManager.php?id=' . $row['ID'] . '">Delete</a> ' //Lets the user delete the respective Manager
    . '</td>';
    echo '</tr>';

    $row = $statement->fetch(PDO::FETCH_ASSOC);
}
?>
                </tbody>


                <p><a href="createProductForm.php">Add Product</a></p>
            </table>
        </div>
    </body>




</html>
