<!DOCTYPE html>


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
                    <?php echo $formdata["UserName"]; ?>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Password</label>
                </div>
                <div class="control">
                    <?php echo $formdata["Password"] ; ?>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Email</label>
                </div>
                <div class="control">
                    <?php echo $formdata['mail']; ?>
                </div>
            </div>
           
            
            
            <div class="row">
                <div class="label">
                    <label>Phone Number</label>
                </div>
                <div class="control">
                    <?php echo $formdata['$phone']; ?>
                </div>
            </div>
            
            </div>
            <div class="row">
                <div class="label">
                    <label>Comments</label>
                </div>
                <div class="control">
                    <?php echo $formdata['location']; ?>
                </div>
            </div>
            <div class="row">
                <div class="label">
                    <label>Profile Picture</label>
                </div>
                <div class="control">
                    <?php echo $formdata['picture']; ?>
                </div>
            </div>
        </div>
    </body>
</html>