<?php
	// check if fields passed are empty
	if(empty($_POST['name'])   ||
	   empty($_POST['phone']))
	   {
	echo "No arguments Provided!";
	return false;
	   }

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	// create email body and send it 
	$to = 'nyanvodka@yandex.ru'; // put your email
	$email_subject = "Вам отправлена форма";
	$email_body = "Заполнена форма. \n\n".
	 "Данные отправителя:\n\nИмя: $name \n".
	 "Телефон: $phone \n".;
	$headers = "From: contact@mail.com\n";
	$headers .= "Reply-To:"; 
	mail($to,$email_subject,$email_body,$headers);
	return true; 
?>