<?php
require 'PHPMailerAutoload.php';
function email_send($to, $subject, $body)
{
	$mail = new PHPMailer;
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 2;
	$mail->Host = 'smtp.mail.gmail.com';
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true;
	$mail->Username = ""; // GMAIL username
	$mail->Password = ""; // GMAIL password
		

	//Typical mail data
	$mail->addAddress($to);
	$mail->addCC("");
	$mail->addBCC("");
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->IsHTML(true);

	try{
	    $mail->Send();
	    return true;
	} catch(Exception $e){
	    //Something went bad
	    return false;
	}
}

email_send("ji*********@gmail.com", "Email subject", "email body content");
?>
