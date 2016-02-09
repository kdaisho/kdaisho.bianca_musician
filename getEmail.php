<?php
	$name =  filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
	$email =  filter_var($_POST['Email'],FILTER_SANITIZE_EMAIL);
	$message =  filter_var($_POST['Message'],FILTER_SANITIZE_STRING);
	
	//mail(to,subject, message, from);
	
	$msg ="
	You've got an email from your website!
	Name: $name
	Email: $email
	
	Message:
	$message";

	mail("Bianca <bianca.beauchemin@gmail.com>",'Contact de votre site web',$msg,"From: Bynki's Website <no-reply@bynki.com>");
	
	echo   "<center>
				<p class='thanks_message'>
					Merci $name, je vous contacterai bientôt!
				</p>
			</center>";

 ?>