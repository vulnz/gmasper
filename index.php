<?php
error_reporting(0);

$emailgot=$_GET["name"];	
$from=$_GET["from"];

echo $emailgot;
echo $from;

date_default_timezone_set('Etc/UTC');
require 'mail//PHPMailerAutoload.php';

$mail = new PHPMailer;
$email = $emailgot;
$html ="Example html content";
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
//$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username =$from;
//Password to use for SMTP authentication
$mail->Password = "examplepassword";
//Set who the message is to be sent from
$mail->setFrom($from, 'Example from');
$mail->addReplyTo($from, $from);
$mail->addAddress($email,'John Doe');
//$mail->AddCC($email_1);

   
//Set the subject line
$mail->Subject = 'Example title';

$mail->Body = 'Example content:'.$html.' ';

if (!$mail->send()) {
	echo " Mail Not sent. Please check installation guide.";
   // echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo " Mail send";
}
