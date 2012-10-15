<?php
include "includes/_header.php";
unset($_SESSION['user']);
?>

<h2>You are now logged out</h2>
<p>If you are not automatically transfered within 10 seconds, please click <a href="index.php">here</a> to return to the home page</p>

<?php include "includes/_footer.php"; ?>

<?php header("location: index.php"); ?>