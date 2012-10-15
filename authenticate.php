<?php
include "includes/_header.php";

if(credentials_valid($_POST['username'], $_POST['password'])){
	log_in($_POST['username']);
	
	if($_SESSION['redirect_to']){
		header("location: " . $_SESSION['redirect_to']);
		unset($_SESSION['redirect_to']);

	}else{
		header("location: index.php");
	}
}else{
	header("Location: login.php?error=1");
	exit("You are being redirected");
}

$title = "You are now logged in... sort of.";


include "includes/_footer.php";
?>