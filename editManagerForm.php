<?php
require_once 'CatManager.php';
require_once 'Connection.php';
require_once 'TableGateway.php';
require_once 'validateManager.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        if (!isset($_GET['id'])) 
        {
            die("Illegal request");
        }
    $id = $_GET['id'];

    $connection = Connection::getInstance();
    $gateway = new TableGateway($connection);

    $statement = $gateway->getManagerById($id);

    $row = $statement->fetch(PDO::FETCH_ASSOC);
    if (!$row) 
    {
        die("Illegal request");
    }
}
else if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if (!isset($_POST['id'])) {
            die("Illegal request");
    }
    $id = $_POST['id'];
    
    $row = $formdata;
}
else
{
    die("Illegal request");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Edit Manager Form</h1>
        <?php 
        if (isset($errorMessage)) {
            echo '<p>Error: ' . $errorMessage . '</p>';
        }
        ?>
        <form action="editManager.php" 
              method="GET">
            <input type="hidden" name="ID" value="<?php echo $row['ID'];; ?>" />
            <table border="0">
                <tbody>
                    <tr>
                        <td>User Name</td>
                        <td>
                            <input type="text" name="UserName" id="UserName" value="<?php echo $row['Name']; ?>" />
                            <span id="nameError" class="error">
                                <?php echoValue($errors, 'UserName'); ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="mail" value="<?php echo $row['emailAddress']; ?>" />
                            <span id="emailError" class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td>
                            <input type="text" name="mobile" value="<?php echo $row['managerPhoneNum']; ?>" />
                            <span id="mobileError" class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Date Appointed</td>
                        <td>
                            <input type="text" name="date" value="<?php echo $row['managerDateAppointed']; ?>" />
                            <span id="staffNumberError" class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td>
                            <input type="text" name="location" value="<?php echo $row['managerLocation']; ?>" />
                            <span id="skillsError" class="error"></span>
                        </td>
                    </tr>
                    <tr>
                <pre>
                    <?php print_r($row) ?>
                </pre>
                        <td></td>
                        <td>
                            <input type="submit" value="Update Manager" name="editManager" />
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </body>
</html>
