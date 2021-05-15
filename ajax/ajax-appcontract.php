<?php include "../include/global.php";

$transID = $_POST['transID'];
$vendorID = $_SESSION['vendorID'];
$Email = $_POST['Email'];

$getDays = $con->prepare("SELECT * FROM tbl_transaction WHERE TransID ='$transID' ");
$getDays->execute();
$gd = $getDays->fetch();
$prodID = $gd['prodID'];
$sched = json_decode($gd['SchedDays']);

foreach ($sched as $key => $value) {
	$insertReservation = $con->prepare("INSERT INTO tbl_reserved VALUES (null,'$vendorID','$transID','$prodID','$value')");
	$insertReservation->execute();
}


$update = $con->prepare("UPDATE tbl_transaction SET TransStatus = '2', TransDate='$now' WHERE TransID = '$transID'");
$update->execute();


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
	->setBody("Your Contract is approved! Please save this Transaction ID ($transID) and show it to your vendor. Thank you! ",'text/html');

  // Send the message
	$result = $mailer->send($message);

echo "Contract Approved!";