<?php

$recepient = "t.yanishevska@i.ua"; /*ваша електронная почта*/
$siteName = "Yanishevska"; /*название вашего сайта*/

$name = trim($_POST["name"]);
$surname = trim($_POST["surname"]);
$phone = trim($_POST["phone"]);
$mail = trim($_POST["mail"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nФамилия: $surname\nТелефон: $phone \n@mail: $mail\nСообщение: $text";

$pagetitle = "Заказ \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>
