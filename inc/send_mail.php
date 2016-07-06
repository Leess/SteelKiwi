<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$subject = 'Сообщение с сайта';

/*switch($type) {
    case '1':
        $subject = 'Запись на тестирование';
        break;
    case '2':
        $subject = 'Запись на тестирование (акция)';
        break;
   case '3':
        $subject = 'Заявка на обратный звонок';
        break;
}*/




$to = 'test <lol_t@bk.ru>';
$from = 'TEST <leess0347@gmail.com>';

$headers = 'From: ' . $from . "\r\n";
$headers .= "Content-type: text/html; charset=\"utf-8\"";

$email_content = '';
if($name) $email_content .= 'Имя: ' . $name . "<br>";
if($email) $email_content .= 'Email: ' . $email . "<br>";
if($phone) $email_content .= 'Телефон: ' . $phone . "<br>";
if($email_content == '') return false;
$result = mail( $to, '=?UTF-8?B?'.base64_encode($subject).'?=', $email_content, $headers );
?>