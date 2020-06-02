<?php
$emailto = $_POST['emailto'];
$emailfrom = $_POST['emailfrom'];
$subjectmail = $_POST['subject'];
$message = $_POST['message'];
$namefrom = $_POST['namefrom'];

$to = $emailto;
$subject = $subjectmail;
$txt = $message;
$headers = "From: " . $emailfrom . "\r\n" .
    "CC: " . $emailfrom . "\r\n" . 
    "MIME-Version: 1.0 " . "\r\n" . 
    "Content-Type: text/html; charset=UTF-8 " . "\r\n";

mail($to, $subject, $txt, $headers);

header('Location: index.php');
die;
