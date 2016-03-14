<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <?php require 'utils/toolbar.php'; ?>
        <h2>Login Form</h2>
        <?php
        if (isset($errorMessage))
            echo "<p>$errorMessage</p>";
        ?>
        <form action="CreateProduct.php" 
              method="POST">
            <table border="0">
                <tbody>
                     <tbody>
                    <tr>
                        <td>Author Name</td>
                        <td>
                            <input type="text" name="AuthorName" value="" />
                            <span id="AuthorName" class="error">
                                <?php echoValue($errors, 'AuthorName'); ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <tr>
                        <td>Book Title</td>
                        <td>
                            <input type="text" name="BookName" value="" />
                            <span id="AuthorName" class="error">
                                <?php echoValue($errors, 'BookName'); ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <tr>
                        <td>Cost Price</td>
                        <td>
                            <input type="number" min="1" name="CostPrice" value="" />
                            <span id="CostPrice" class="error">
                                <?php echoValue($errors, 'CostPrice'); ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>Sell Price</td>
                        <td>
                            <input type="number" min="1" name="sellPrice" value="" />
                            <span id="CostPrice" class="error">
                                <?php echoValue($errors, 'sellPrice'); ?>
                            </span>
                        </td>
                    </tr>


                    
                </tbody>
            </table>

        </form>
        <p><a href="register_form.php">Register</a></p>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
