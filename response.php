<!DOCTYPE html>

<html>
</head>
    <body>
        <div class="container">
            <div class="row">
                <h3>Thank you for submitting your data.</h3>
            </div>
            <div class="row">
                <div class="label">
                    <label>Username</label>
                </div>
                <div class="control">
                    <?php echo $form_data["UserName"]; ?>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Password</label>
                </div>
                <div class="control">
                    <?php echo $form_data["Password"] ; ?>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Email</label>
                </div>
                <div class="control">
                    <?php echo $form_data['mail']; ?>
                </div>
            </div>
           
            
            
            <div class="row">
                <div class="label">
                    <label>Phone Number</label>
                </div>
                <div class="control">
                    <?php echo $form_data['$phone']; ?>
                </div>
            </div>
            
            </div>
            <div class="row">
                <div class="label">
                    <label>Comments</label>
                </div>
                <div class="control">
                    <?php echo $form_data['location']; ?>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Profile Picture</label>
                </div>
                <div class="control">
                    <?php echo $form_data['picture']; ?>
                </div>
            </div>
        </div>
    </body>
</html>