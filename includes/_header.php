<?php 
session_start();
require_once('auth.php');
require_once('database.php');
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
		<link href='http://fonts.googleapis.com/css?family=Convergence' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<h1>Francis Apaloo</h1>
			<div id="navbar">
				<ul id="navigation">
					<li><a href="index.php">Home</a></li>
					<li><a href="blog.php">Blog</a></li>			
				</ul>
			</div>
			<div id="content">