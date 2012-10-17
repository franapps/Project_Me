<?php
$title = "For your eye's only";
include "includes/_header.php";
require_login();
db_connect();
?>

<p>Fill in the new blog form below.</p>

<?php
	if(isset($_POST['submit'])){
		$title = $_POST['Title'];
		$content = $_POST['Content'];
		$date = date('Y-m-d');

		mysql_query("INSERT INTO blogData (Title, theDate, Content) VALUES('$title', '$date', '$content')");
		header("location: blog.php");
	}else{
	?>
	<form action='admin.php' method='POST'>
		<table>
			<tr>
				<td><label for="Title">Title</label></td>
				<td><input type="text" name="Title"></td>
			</tr>
			<tr>
				<td><label for="Content">Content</label></td>
				<td><textarea name="Content"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Post!"></td>
			</tr>
		</table>
	</form>
<?php }; ?>

<?php include "includes/_footer.php"; ?>