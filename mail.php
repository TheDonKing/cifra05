<?php

$recepient = "youmail@ya.ru";
$sitename = "Название сайта";

$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$number = trim($_GET["number"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nЕмайл: $email \nНомер телефона: $number";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");