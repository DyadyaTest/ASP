<?php
ini_set('display_errors','On');
error_reporting('E_ALL');
$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);
echo $email;
mail("ogarsanya@gmail.com", "Заявка с сайта", ". E-mail: ".$email ,"From: info@asp.com \r\n");
if (mail("ogarsanya@gmail.com", "Заявка с сайта", ". E-mail: ".$email ,"From: info@asp.com \r\n")) {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>