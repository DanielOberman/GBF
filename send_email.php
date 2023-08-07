<?php

// Allow requests from any origin
header("Access-Control-Allow-Origin: *");

// Allow specific HTTP methods
header("Access-Control-Allow-Methods: POST, OPTIONS");

// Other headers you might need
header("Access-Control-Allow-Headers: Content-Type");

$recepient = "danieloberman777@gmail.com";
$sitename = "GBF";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$type = trim($_POST["radioGroup"]);
$message = trim($_POST["message"]);
$text = trim($_POST["textarea"]);

$message = "Имя: $name \nЭлектронная почта: $email  \nТелефон: $phone \Проект: $type \nСообщение: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";

mail($recepient, $pagetitle, $message, "Content-type:text/html;charset=UTF-8");
?>
