<?php
require_once 'CatManager.php';
require_once 'Connection.php';
require_once 'TableGateway.php';
require_once 'validateProgrammer.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET')
    {
        if (!isset($_GET['id'])) 
        {
            die("Illegal request");
        }
    $id = $_GET['id'];

    $connection = Connection::getInstance();
    $gateway = new ProgrammerTableGateway($connection);

    $statement = $gateway->getProgrammerById($id);

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
                            <input type="text" name="UserName" id="UserName" value="<?php echo $row['UserName']; ?>" />
                            <span id="nameError" class="error">
                                <?php echoValue($errors, 'UserName'); ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="mail" value="<?php echo $row['mail']; ?>" />
                            <span id="emailError" class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Mobile</td>
                        <td>
                            <input type="text" name="mobile" value="<?php echo $row['phone']; ?>" />
                            <span id="mobileError" class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Date Appointed</td>
                        <td>
                            <input type="text" name="date" value="<?php echo $row['date']; ?>" />
                            <span id="staffNumberError" class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td>
                            <input type="text" name="location" value="<?php echo $row['location']; ?>" />
                            <span id="skillsError" class="error"></span>
                        </td>
                    </tr>
                    <tr>
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
