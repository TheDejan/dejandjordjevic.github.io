<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


if ($_POST['submit']) {

$formcontent="From: $name \n Message: $message";
$recipient = "office@dejandjordjevic.net";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";



if(mail($recipient, $subject, $formcontent, $mailheader)){
echo"<p class="contact-text">Ihre Nachricht wurde erfolgreich gesendet!!</p>";
} else{
	echo "<p class="contact-text">Error! Etwas ist schief gelaufen! Versuchen Sie es bitte noch einmal!</p>";}
}

?>
