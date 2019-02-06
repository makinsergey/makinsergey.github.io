<?php
	// check if fields passed are empty
	if(empty($_POST['name2'])   ||
	   empty($_POST['phone2'])  ||
	   empty($_POST['email2'])  ||
	   empty($_POST['comment2'])||
	   empty($_POST['question']))
	   {
	echo "No arguments Provided!";
	return false;
	   }

	$name2 = $_POST['name2'];
	$phone2 = $_POST['phone2'];
	$email2 = $_POST['email2'];
	$comment2 = $_POST['comment2'];
	$question = $_POST['question'];
	// 
	// create email body and send it 
	$to = 'nyanvodka@yandex.ru'; // put your email
	$email_subject = "Вам отправлена форма с сайта Brandgraf!";
	$email_body = "Заполнена форма. \n\n".
	 "Данные отправителя:\n\nИмя: $name2 \n".
	 "Телефон: $phone2 \n".
	 "Почта: $email2\n".
	 "Услуга: $question\n".
	 "Комментарий: $comment2";
	$headers = "From: contact@mail.com\n";
	$headers .= "Reply-To:"; 
	mail($to,$email_subject,$email_body,$headers);
	return true; 
?>