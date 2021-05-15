<?php include "../include/global.php";

$userID = genCode(12);
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Contact = $_POST['Contact'];
$Email = $_POST['Email'];
$Pass = $_POST['Pass'];
$CPass = $_POST['CPass'];
$Add = $_POST['Address'];

if($Pass == $CPass){
	$insertAcc = $con->prepare("INSERT INTO tbl_user VALUES (null,'$userID','$Fname','$Lname','$Contact','$Email','$Pass','$Add','','2','0')");
	$insertAcc->execute();
	require_once '../swiftmailer/vendor/autoload.php';

// Create the Transport
	$transport = (new Swift_SmtpTransport('smtp.gmail.com',587,'tls'))
	->setUsername('eventplannercvsu@gmail.com')
	->setPassword('eventplanner36');

// Create the Mailer using your created Transport
	$mailer = new Swift_Mailer($transport);

/// Create a message
	$message = (new Swift_Message('Event Planner Account Verification'))
	->setFrom(['eventplannercvsu@gmail.com' => 'Event Planner Website'])
	->setTo(["$Email"])
	->setBody("<a href='http://localhost/event/email-template/verification.php?verify=$userID'>Please Click this Link to Activate your Account</a>",'text/html');

  // Send the message
	$result = $mailer->send($message);

	echo "E-mail Verification Sent Check your E-mail for Code";
}else{
	echo "Password did not match";
}