<?php
$to = "mlvmisha@gmail.com"; // емайл получателя данных из формы
$tema = "Обратная связь"; // тема полученного емайла
$message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
$message .= "Номер телефона: ".$_POST['tel']."<br>"; //полученное из формы name=phone
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=feedback.html');
?>
