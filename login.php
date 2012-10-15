<?php
$title = "Log In!";

include "includes/_header.php";
?>

<?php if(isset($_GET['error']) && $_GET['error'] == 1): ?>
	<h3 class="error">Username and/or Password are incorrect</h3>
<?php endif ?>

<?php if(isset($_GET['login_required']) && $_GET['login_required'] == 1): ?>
	<h3 class="error">You need to log in to view this page</h3>
<?php endif ?>

<form action="authenticate.php" method="POST">
	<label for="username">Username</label>
	<input type="text" name="username" id="username">
	<label for="password">Password</label>
	<input type="password" name="password" id="password">
	<input type="submit" value="Log In">
</form>
<?php include "includes/_footer.php"; ?>