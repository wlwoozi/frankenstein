<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "amcneil@techsassygirlz.org";
$mail->Password = "yugyeom97";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom($_POST["userEmail"], $_POST["userName"]);
$mail->AddReplyTo($_POST["userEmail"], $_POST["userName"]);
$mail->AddAddress("amcneil@techsassygirlz.org");	
$mail->Subject = "Contact Form";
$mail->WordWrap   = 80;
$mail->MsgHTML($_POST["content"]);


$mail->IsHTML(true);

  

if(!$mail->Send()) {
	echo "<p class='error'>Problem in Sending Mail.</p>";
} else {
	echo "<p class='success'>Contact Mail Sent.</p>";
}	



?>
