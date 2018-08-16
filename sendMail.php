<?php
require_once 'vendor/autoload.php';
set_time_limit(-1);
// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.office365.com', 587, 'tls'))
  ->setUsername('fromEmail@domain.com')
  ->setPassword('password')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Swift Mailer'))
  ->setFrom(['fromEmail@domain.com' => 'FirstName LastName'])
  ->setTo(['toEmail@domain.com'])
  ->setBody('This is sample swift mail.')
  ;

// Send the message
$result = $mailer->send($message);

print_r($result);

?>