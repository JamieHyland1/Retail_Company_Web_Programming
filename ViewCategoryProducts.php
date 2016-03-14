<?php
require_once 'Classes/Connection.php';
require_once 'TableGateway.php';
require_once 'Classes/productTable';

start_session();

if (!is_logged_in()) {
    header("Location: login_form.php");
}

if (!isset($_GET) || !isset($_GET['id'])) {
    die('Invalid request');
}
$id = $_GET['id'];

$connection = Connection::getInstance();
$categoryGateway = new TableGateway($connection);
$productGateway = new productTable($connection);

$Category = $categoryGateway->getManagerById($id);
$product = $productGateway->getProductsByCategoryID($id);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
        <title></title>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <?php require 'utils/toolbar.php'; ?>
        <div class="container">
            <h2>View Category Details</h2>
            <table class="table">
                <tbody>
                    <?php
                    $category = $Category->fetch(PDO::FETCH_ASSOC);
                    echo '<tr>';
                    echo '<td>Category</td>'
                    . '<td>' . $category['categoryManager'] . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Email</td>'
                    . '<td>' . $category['emailAddress'] . '</td>';
                    echo '</tr>';
                    echo '<tr>';
                    echo '<td>Locatiob</td>'
                    . '<td>' . $category['managerLocation'] . '</td>';
                    echo '</tr>';
                    ?>
                </tbody>  
            </table>
            <p>   '<a href="editManager.php?id='.$row['ID'].'">Edit</a> '
                . '<a class="delete" href="deleteManager.php?id='.$row['ID'].'">Delete</a> '
                . '<a class="back" href="Home.php?id='.$row['ID'].'">Home</a> '
            </p>
            <h3>All products assigned to <?php $category['categoryManager'] ?></h3>
            <?php if ($product->rowCount() !== 0) { ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Author Name</th>
                            <th>Book Title</th>
                            <th>Cost Price</th>
                            <th>Sell Price</th>
                            <th>Category ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $row = $->fetch(PDO::FETCH_ASSOC);
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
                            . '<a href="viewManagers.php?id=' . $row['ID'] . '">View</a> ' //Lets the user view an individual Manager
                            . '<a href="Forms/editManagerForm.php?id=' . $row['ID'] . '">Edit</a> ' //Lets the user edit the selected Manager
                            . '<a href="deleteManager.php?id=' . $row['ID'] . '">Delete</a> ' //Lets the user delete the respective Manager
                            . '</td>';
                            echo '</tr>';

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <p>There are no products assigned to this Category.</p>
            <?php } ?>

        </div>
    </div>
</body>
</html>
