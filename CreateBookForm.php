<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <h1>Create Book Form</h1>
        <?php 
        if (isset($errorMessage))
        {
            echo '<p>Error: ' . $errorMessage . '</p>';
        }
        ?>
        <form action="createBook.php" 
              method="POST">
            <table border="0">
                <tbody>
                    <tr>
                        <td> Author Name</td>
                        <td>
                            <input type="text" name="authorName" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Book Title</td>
                        <td>
                            <input type="text" name="bookTitle" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Cost Price</td>
                        <td>
                            <input type="text" name="costPrice" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Sell Price</td>
                        <td>
                            <input type="text" name="sellPrice" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Create Book" name="createBook" />
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </body>
</html>
