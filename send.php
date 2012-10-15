<?php

//PHPMailer with GMAIL

include "includes/class.phpmailer.php";
include "includes/class.smtp.php"; // note, this is optional - gets called from main class if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents('contents.html');
$body 			  = str_replace("/", "", $body);
$body 			  = $_POST['emailmsg'];


$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "frapweb12@gmail.com";  // GMAIL username
$mail->Password   = "s3CUr3#mon";            // GMAIL password

$mail->SetFrom($_POST['email'], $_POST['ename']);

//$mail->AddReplyTo("frapaloo@gmail.com","First Last");

$mail->Subject    = "Email Enquiry from the Webpage";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "frapweb12@gmail.com";
$mail->AddAddress($address, "Francis Apaloo");  

include "includes/_header.php";
?>

<?php

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

$title = 'Message Sent!';

?>

<p>To return to the front page, please click <a href="index.php">here</a></p>

<?php include "includes/_footer.php" ?>