<?php
$name2= $_POST["name2"];
$phone2= $_POST["phone2"];
 
$EmailTo= "mr.moiseev@bk.ru";
$Subject= "Получено новое сообщение";
// Подготовка шапки сообщения
$Body = "Вам отправлена заявка по ЛР на прохождение теста: \n\n".
$Body.= "Имя: ";
$Body.= $name2;
$Body.= "\n";
 
$Body.= "Номер телефона: ";
$Body.= $phone2;
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
