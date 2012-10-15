<?php
session_start();
//$_SESSION['foo'] = 'bar';
//var_dump($_SESSION);die;
require_once 'includes/auth.php';
require_once 'includes/database.php';
//db_connect();
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
		<link href='http://fonts.googleapis.com/css?family=Convergence' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="outerwrap">
			<!-- Login in functionality, temporarily disabled until further notice -->
			<!-- <div id="login" class="side login">
				<?php if(current_user()): ?>
					<span>
						Logged in as <?php echo current_user(); ?>
					</span>
				<?php else: ?>
					<span>
						Please log in
					</span>
				<?php endif; ?>
				<form action="authenticate.php" method="POST">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="fields">
					<br>
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="fields">
					<br>
					<input type="submit" value="Log In">
				</form>
				<div id="logout"><a href="logout.php">Click here to Log out</a></div>
			</div> --> 
			<div id="wrapper">
				<h1>Francis Apaloo</h1>
				<div id="navbar">
					<ul id="navigation">
						<li><a href="index.php">About Me</a></li>
						<li><a href="projects.php">What I've been up to</a></li>
						<li><a href="contact.php">Contact Me</a></li>			
					</ul>
				</div>
				<div id="content">