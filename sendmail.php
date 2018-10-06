<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to      = 'sample@example.com'; //宛先アドレス
$subject = date("Y/m/d").'タイトル'; //本文タイトルが入ります
$message = $body; //メール本文
$headers = 'From: sample@example.com' . "\r\n"; //差出人のアドレス

mb_send_mail($to, $subject, $message, $headers);

?>