<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com',587,'tls'))
  ->setUsername('jericmacalawa0928@gmail.com')
  ->setPassword('09368733182');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

/// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['jericmacalawa0928@gmail.com' => 'Jeric Macalawa'])
  ->setTo(['jericmacalawa1996@gmail.com'])
  ->setBody('<b>Hello</b> World!','text/html');

  // Send the message
$result = $mailer->send($message);