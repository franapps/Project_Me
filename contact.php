<?php 
$title = "Contact Me!";
include "includes/_header.php"; 
?>

<p>
	This page will show you how to contact me. 
	<br><br>
	You can follow me on Twitter and send me a message.
	I will create an Email form below which will be available soon, if you would like to contact me before then,
	please send an email to frapweb12@gmail.com.<br>
</p>


<!-- <h2 id="emailtitle">Email me!</h2>

<form class="emailform" action="sendmail.php" method="POST">
	<div class="inputbox">
		<label for="ename"> Your Name:</label>
		<input type="text" name="ename" id="ename" class="input">
	</div>
	<div class="inputbox">
		<label for="email">Your Email Address:</label>
		<input type="text" name="email" id="email" class="input">
	</div>
	<div class="messagebox">
		<label for="message">Please type your message below:</label><br>
		<textarea style="width: 400px; height: 100px;" name="emailmsg" rows="3" cols="20" id="emailmsg" onkeypress="return isMaxLength(event, this,199)" onkeyup="TrackKeyPress(this,200)"></textarea><br>
	</div>
	<input type="submit" value="Send" class="button">
</form>
-->
<p>
	You can click the icon to follow me on twitter! @monk1989 <a href="https://twitter.com/intent/user?screen_name=Monk1989"><img src="img/Twitter_512x512.png" id="twiticon"></a>
</p>

<?php include "includes/_footer.php"; ?>