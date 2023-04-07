<?php
$headers = 'From: apprakash2002@gmail.com' . "\r\n" . 
           'MIME-Version: 1.0' . "\r\n" .
           'Content-Type: text/html; charset=utf-8';

$result = mail("cs201114063@bhc.edu.in","Hello World","This is email body",$headers);
var_dump($result);
?>