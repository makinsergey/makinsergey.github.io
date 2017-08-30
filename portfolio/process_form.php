<?php
$name= $_POST["name"];
$phone= $_POST["phone"];
 
$EmailTo= "nyanvodka@yandex.ru";
$Subject= "Получено новое сообщение";
// Подготовка шапки сообщения
$Body = "Вам отправлена заявка по ЛР на прохождение теста: \n\n".
$Body.= "Имя: ";
$Body.= $name;
$Body.= "\n";
 
$Body.= "Номер телефона: ";
$Body.= $phone;
$Body.= "\n";
 
// посылаем сообщение
$success= mail($EmailTo, $Subject, $Body, "From: contact@mail.com".$email);
 
// редирект
if($success){
   echo"success";
}else{
    echo"invalid";
}
 
?>
