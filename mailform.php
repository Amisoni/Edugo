<?php
require_once('class.phpmailer.php');
 
$mail             = new PHPMailer();
 
$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);
 
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth   = true;                  		// enable SMTP authentication
$mail->SMTPSecure = "ssl";                 		// sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      		// sets GMAIL as the SMTP server
$mail->Port       = 465;                  	 	// set the SMTP port for the GMAIL server
$mail->Username   = "10dit110@nirmauni.ac.in";  	// GMAIL username
$mail->Password   = "arjunkumar";		// GMAIL password
 
$mail->SetFrom('10dit110@nirmauni.ac.in', 'arjun');
 
$mail->Subject    = "Test PHPMailer via Gmail smtp";
 
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
 
$mail->MsgHTML($body);
 
$address = "arjunmaybe@gmail.com";
$mail->AddAddress($address, "aghataliya");
 
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
?>