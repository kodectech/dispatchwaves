<?php

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);


$to = "info@cargoforcelines.com";
$mainSubject = $subject;
         
$mainMessage = "Client's Information  ";
$mainMessage .= "Name: " . $name;
$mainMessage .= "  Email: " . $email;
$mainMessage .= "  Message: " . $message;
         
$header = "From:" . $email . "\r\n";
//If i want another email to receive a copy (Carbon copy)
//$header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

mail ($to, $mainSubject, $mainMessage, $header);
         
