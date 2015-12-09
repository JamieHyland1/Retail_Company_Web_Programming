<!DOCTYPE html>
<?php

function echoValue($array, $fieldName) {
    if (isset($array) && isset($array[$fieldName])) {
        echo $array[$fieldName];
    }
}

function echoChecked($array, $fieldName, $value) {
    if (isset($array[$fieldName]) && $array[$fieldName] == $value) {
        echo 'checked="checked"';
    }
}

function echoCheckedArray($array, $fieldName, $value) {
    if (isset($array[$fieldName]) &&
            is_array($array[$fieldName]) &&
            in_array($value, $array[$fieldName])) {
        echo 'checked="checked"';
    }
}

function echoSelected($array, $fieldName, $value) {
    if (isset($array[$fieldName]) && $array[$fieldName] == $value) {
        echo 'selected="selected"';
    }
}

function echoSelectedArray($array, $fieldName, $value) {
    if (isset($array[$fieldName]) &&
            is_array($array[$fieldName]) &&
            in_array($value, $array[$fieldName])) {
        echo 'selected="selected"';
    }
}

if(!isset($form_data))
{
    $form_data = array();
}
if(!isset($errors))
{
    $errors = array();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="reset.css">
		<link rel="stylesheet" type="text/css" href="text.css">
                <link rel="stylesheet" type="text/css" href="960.css">
		<link rel="stylesheet" type="text/css" href="style.css">

        <script src="Validate.js"></script>
    </head>
    <body>
        <div class="container_12">
            <h1>Enter a new Product Category Manager</h1>
            <div id="container">
                <form  action=""  method="get">

                    <div class="row">
                        <div class="label">
                            <label for="UserName">UserName</label>
                        </div>
                            <div class="control">
                                <input type="text" id="UserName" name="UserName" value="<?php echoValue($form_data, 'UserName') ?>"> 
                            </div>
                        <div class="error">
                            <span id="UserNameError">
                                <?php if(isset($errors['UserName'])) echo $errors['UserName']; ?>
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="label">
                            <label for="Password">Password</label>
                        </div>
                            <div class="control">
                                <input type="password" id="Password" name="Password" > 
                            </div>
                        <div class="error">
                            <span id="PasswordError">
                                <?php if(isset($errors['Password'])) echo $errors['Password']; ?>
                            </span>
                        </div>
                    <br>
                    <div class="row">
                        <div class="label">
                            <label for="picture">Profile Picture</label>
                        </div>
                        <div class="control">
                            <input type="file" id="picture" name="picture" />
                        </div>
                        <div class="error">
                            <span id="pictureError"></span>
                        </div>
                    </div>
    <!--                <div class="row">
                        <div class="label">
                            <label for="Product Category Manager">Product Category Manager</label>
                        </div>
                        <div class="control">
                        <select name="Product Category Manager" id="Product Category Manager">
                            <option value="John Doe">John Doe</option>
                            <option value="Dave Mathews">Dave Mathews</option>
                            <option value="Niall Ford">Niall Ford</option>
                            <option value="Jamie Hyland">Jamie Hyland</option>
                        </select>
                        </div>
                        <div class="error">
                            <span id="ProductCatManagerError"></span>
                        </div>
                    </div>-->
                    <br>
                    <div class="row">
                        <div class="label">
                            <label for="mail">E-mail:</label>
                        </div>
                        <div class="control">
                            <input type="text" name="mail" id="mail" value="<?php echoValue($form_data, 'mail')?>">
                        </div>
                        <div class="error">
                            <span id="mailError">
                                <?php if(isset($errors['mail'])) echo $errors['mail']; ?>
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="label">
                            <label for="phone">Manager Phone Number:</label>    
                        </div>
                        <div class="control">
                        <input type="number" name="phone" id="phone" value="phoneNumber"><br> 
                        </div>
                        <div class="error">
                            <span id="phoneError">
                                <?php if(isset($errors['phone'])) echo $errors['phone']; ?>
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="label">
                            <label for="date">Date appointed:</label>
                        </div>
                        <div class="control">
                            <input type="date" name="date" id="date" value="<?php echoValue($form_data, 'date')?>"><br>
                        </div>
                        <div class="error">
                            <span id="dateError">
                                <?php if(isset($errors['date'])) echo $errors['date']; ?>
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="label">
                            <label for="location">Store Location:</label>
                        </div>
                        <div class="control">
                            <input type="text" name="location" id="location" value="<?php echoValue($form_data, 'location')?>">
                        </div>
                        <div class="error">
                            <span id="locationError">
                                <?php if(isset($errors['location'])) echo $errors['location']; ?>
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="label"></div>
                        <div class="control">
                            <input type="submit" name="submit" id="submit" value="submit">
                            <input type="reset"  name="reset" id="reset" value="reset">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </body>
</html>
