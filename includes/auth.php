<?php
$users = array(
	"admin" => "adminpass",
	"fran" => "frans pass"
);

function credentials_valid($username, $password){
	global $users;
	return isset($users[$username]) && 
			$users[$username] == $password;
}

// Logs into the user $user
function log_in($user){
	$_SESSION['user'] = $user;
}

// Returns the currently logged in user (if any)
function current_user(){
	 if(isset($_SESSION['user'])){
	 	return $_SESSION['user'];
	 }
}

// Requires a current user
function require_login(){
	if(!current_user()){
		$_SESSION['redirect_to'] = $_SERVER['REQUEST_URI'];
		header("Location: login.php?login_required=1");
		exit("Please log in to view this page");
	}
}

?>