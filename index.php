<?php 


require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();

$mail->Host = "smtp.mail.ru";
$mail->SMTPAuth = true;
$mail->Username = 'sasha.bezrukov.bezrukov'; // логин от вашей почты
$mail->Password = '19140394sb'; // пароль от почтового ящика
$mail->SMTPSecure = 'tls';
$mail->Port = '587';

$mail->CharSet = 'UTF-8';
$mail->From = 'sasha.bezrukov.bezrukov@mail.ru'; // адрес почты, с которой идет отправка
$mail->FromName = 'Александр'; // имя отправителя
$mail->addAddress('sosochkiandbulochki@gmail.ru', 'Александр');


$mail->isHTML(true);

$mail->Subject = 'Тема письма';
$mail->Body = 'Привет, мир! <p>Это строка <b>HTML кода</b></p>';
$mail->AltBody = 'Привет, мир! Это альтернативное письмо';
$mail->addAttachment('img/Lighthouse.jpg', 'Картинка Маяк.jpg');
$mail->SMTPDebug = 2;

if( $mail->send() ){
	echo 'Письмо отправлено';
}else{
	echo 'Письмо не может быть отправлено. ';
	echo 'Ошибка: ' . $mail->ErrorInfo;
}
 ?>


