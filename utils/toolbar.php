<ul>
<?php
require_once 'utils/functions.php';

echo '<li><a href="Home.php">My Website</a></li>';
if (!is_logged_in()) {
    echo '<li><a href="login_form.php">Login</a></li>';
}
else {
    echo '<li><a href="logout.php">Logout</a></li>';
}
?>
</ul>