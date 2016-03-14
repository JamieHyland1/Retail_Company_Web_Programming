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
                <link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="text.css">
                <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Hyland Bookstore</h1>
        <ul>
            <li><a href="ViewManager.php">View Manager</a></li>
        </ul>
    </body>
   

        
    
    
</html>
