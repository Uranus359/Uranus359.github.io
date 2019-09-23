<?php

$frm_name  = "Евгений";
$recepient = "agragregra@ya.ru";
$sitename  = "Тестовое задание";
$subject   = "";

$name = trim($_POST["name"]);
$recepient = trim($_POST["email"]);
$formname = trim($_POST["formname"]);

$message = "
Форма: $formname <br>
Имя: $name <br>
email: $recepient
";

mail($recepient, $subject, $message, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
