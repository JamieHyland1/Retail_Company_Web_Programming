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
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Enter a new Product Category Manager</h1>
        <div id="container">
            <form  action="process.php"  method="get">

                <div class="row">
                    <div class="label">
                        <label for="UserName">UserName</label>
                    </div>
                        <div class="control">
                            <input type="text" name="UserName"> 
                        </div>
                    <div class="error">
                        <span id="UserNameError"></span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="label">
                        <label for="Password">Password</label>
                    </div>
                        <div class="control">
                            <input type="password" name="Password"> 
                        </div>
                    <div class="error">
                        <span id="Password"></span>
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
                        <input type="text" name="mail" id="mail" value="your email">
                    </div>
                    <div class="error">
                        <span id="mailError"></span>
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
                        <span id="phoneError"></span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="label">
                        <label for="date">Date appointed:</label>
                    </div>
                    <div class="control">
                        <input type="date" name="date" id="date"><br>
                    </div>
                    <div class="error">
                        <span id="dateError"></span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="label">
                        <label for="location">Store Location:</label>
                    </div>
                    <div class="control">
                        <input type="text" name="location" id="loaction">
                    </div>
                    <div class="error">
                        <span id="locationError"></span>
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
    </body>
</html>