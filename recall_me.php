<?php
	// check if fields passed are empty
	if(empty($_POST['name'])   ||
	   empty($_POST['phone'])   /*||
	   empty($_POST['email']))*/
	   {
	echo "No arguments Provided!";
	return false;
	   }

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	// $email = $_POST['email'];
	// $service = $_POST['service'];
	// 
	// create email body and send it 
	$to = 'nyanvodka@yandex.ru'; // put your email
	$email_subject = "Вам отправлена заявка по ЛР";
	$email_body = "Заполнена форма. \n\n".
	 "Данные отправителя:\n\nИмя: $name \n".
	 "Телефон: $phone \n";
	$headers = "From: contact@mail.com\n";
	$headers .= "Reply-To:"; 
	mail($to,$email_subject,$email_body,$headers);
	return true; 
?>