<?php

$to      = 'frapweb12@gmail.com';
$subject = 'Enquiry from Web Page';
$message = $_POST['emailmsg'];
$message = str_replace("\n.", "\n..", $message);
$headers = 'From: '. $_POST['email'] . "\r\n";

mail($to, $subject, $message, $headers);

if(mail() == 1){
	exit("Mail sent! You are now being redirected");
}

?>
