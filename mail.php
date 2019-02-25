<?php

$recepient = "varygin.design@gmail.com";
$siteName = "Автосервис «Авангард»";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$model = trim($_POST["model"]);
$service = trim($_POST["service"]);
$message = trim($_POST["message"]);
$message1 = "Имя: $name \nТелефон: $phone \nМодель автомобиля : $model \nПо вопросу : $service \nСообщение : $message" ;

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message1, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>