<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<?php
if (is_logged_in()) {
    echo "Welcome home, " . get_username();
   
} else {
    echo "You're not logged in";
}
?>
<?php require(__DIR__ . "/../../partials/flash.php"); ?>