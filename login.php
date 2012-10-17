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

<form action="authenticate.php" method="POST" id="login">
	<table>
		<tr>
			<td><label for="username">Username</label></td>
			<td><input type="text" name="username" id="username"></td>
		</tr>
		<tr>
			<td><label for="password">Password</label></td>
			<td><input type="password" name="password" id="password"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Log In"></td>
		</tr>
	</table>
</form>

<?php include "includes/_footer.php"; ?>