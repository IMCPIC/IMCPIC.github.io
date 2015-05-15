<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
	
// Create the email and send the message
$to = 'erikjohnrichter@outlook.com';
$email_subject = "Website Subscription Form:  $name";
$email_body = "Subscription from Posigrator.\n\n"."Name: $name\n\nEmail: $email_address";

mail($to,$email_subject,$email_body);
return true;			
?>