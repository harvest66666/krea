<?php

$to = 'contact@email.com'; // Replace with your email address

// No need to edit below this line
if($to) {
	$name = $_POST['namesurname'];
	$email = $_POST['mail'];
	$subject = "Contact Form";
	$message = $_POST['message'];
	
	$html = "";
	$html .= "Name: " . htmlentities($name, ENT_QUOTES, "UTF-8") . "<br>\n";
	$html .= "Email: " . htmlentities($email, ENT_QUOTES, "UTF-8") . "<br>\n";
	$html .= "Message: " . htmlentities($message, ENT_QUOTES, "UTF-8") . "<br>\n";
	
	$headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\n";
	$headers .= "From: " . $name . "<". $email .">\r\n";
	$headers .= "Reply-To: " .  $email . "\r\n";
	
	$html = utf8_decode($html);
	
	mail($to, $subject, $html, $headers);
	
	if ($html)
		echo 'Your message has been sent. Thank you!';
	else
		echo 'Sorry your message can not be sent.';
	
} else {
	echo "error";	
}
?>