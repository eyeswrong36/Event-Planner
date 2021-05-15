<?php include "../include/global.php";

$transID = $_POST['transID'];
$Email = $_POST['Email'];

$reject = $con->prepare("UPDATE tbl_transaction SET TransStatus='3' WHERE TransID='$transID' ");
$reject->execute();

require_once '../swiftmailer/vendor/autoload.php';

// Create the Transport
	$transport = (new Swift_SmtpTransport('smtp.gmail.com',587,'tls'))
	->setUsername('eventplannercvsu@gmail.com')
	->setPassword('eventplanner36');

// Create the Mailer using your created Transport
	$mailer = new Swift_Mailer($transport);

/// Create a message
	$message = (new Swift_Message('Event Planner Contract Result'))
	->setFrom(['eventplannercvsu@gmail.com' => 'Event Planner Website'])
	->setTo(["$Email"])
	->setBody("Your Contract ($transID) is Rejected! Please try another Schedule. Thank you! ",'text/html');

  // Send the message
	$result = $mailer->send($message);

echo "Contract Rejected!";
