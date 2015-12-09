        <?php
        require_once 'Connection.php';
        require_once 'TableGateway.php';
        
        
        $Connection = Connection::getInstance();
        
        $gateway = new TableGateway($Connection);
        
        $statement = $gateway->getBooks();
        
        
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
                $row = $statement->fetch(PDO::FETCH_ASSOC);
                while($row)
                {
                     echo '<tr>';
                    echo '<td>' . $row['ProductID'] . '</td>';
                    echo '<td>' . $row['AuthorName'] . '</td>';
                    echo '<td>' . $row['BookName'] . '</td>';
                    echo '<td>' . $row['CostPrice'] . '</td>';
                    echo '<td>' . $row['sellPrice'] . '</td>';
                    echo '<td>';
                    echo '<td>'
                    . '<a href="viewBooks.php?id='.$row['ProductID'].'">View</a> '
                    . '<a href="editProgrammerForm.php?id='.$row['ProductID'].'">Edit</a> '
                    . '<a class="delete" href="deleteProgrammer.php?id='.$row['ProductID'].'">Delete</a> '
                    . '</td>';
                    echo '</tr>';
                    
                    $row = $statement->fetch(PDO::FETCH_ASSOC);
                }
                ?>
            </tbody>
             <p><a href="createBookForm.php">Create Book</a></p>
        </table>
    
    
</html>
