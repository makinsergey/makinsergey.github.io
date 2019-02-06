<?php
	// check if fields passed are empty
	if(empty($_POST['name'])   ||
	   empty($_POST['phone'])  ||
	   empty($_POST['email'])  ||
	   empty($_POST['comment']))
	   {
	echo "No arguments Provided!";
	return false;
	   }

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	//$question = $_POST['question'];
	// 
	// create email body and send it 
	$to = 'nyanvodka@yandex.ru'; // put your email 109-87@mail.ru
	$email_subject = "Вам отправлена форма с сайта Brandgraf!";
	$email_body = "Заполнена форма. \n\n".
	 "Данные отправителя:\n\nИмя: $name \n".
	 "Телефон: $phone \n".
	 "Комментарий: $comment \n".
	 "Почта: $email";
	$headers = "From: contact@mail.com\n";
	$headers .= "Reply-To:"; 
	mail($to,$email_subject,$email_body,$headers);
	return true; 
?>