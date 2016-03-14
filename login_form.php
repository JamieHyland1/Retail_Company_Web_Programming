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

        <?php
        if (isset($errorMessage))
            echo "<p>$errorMessage</p>";
        ?>
        <div class="contaniner">
        <form action="login.php" method="POST">
            <label for="username">Username: </label>
            <input type="text"
                   name="username"
                   value="<?php if (isset($formdata['username'])) echo $formdata['username']; ?>"
                   />
            <span class="error">
                <?php                        if (isset($errors['username'])) {
                    echo $errors['username'];
                }
                ?>
            </span>
            <br/>
            <label for="password">Password: </label>
            <input type="password"
                   name="password"
                   value=""
                   />
            <span class="error">
                <?php if (isset($errors['password'])) echo $errors['password']; ?>
            </span>
            <br/>
            <input type="submit" value="Login" />
        </form>
        <p><a href="register_form.php">Register</a></p>
        <?php require 'utils/footer.php'; ?>
        </div>
    </body>
</html>
