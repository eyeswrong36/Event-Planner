<?php include "../include/global.php";

$storage = json_decode($_POST['store']);

$sched = array();
foreach ($storage as $key => $val) {
	if($_POST['selDay'.$val]==""){
		echo "Please Select Month if you check the Day";
		die();
		
	}else{
		array_push($sched,$_POST['check'.$val]." ".$_POST['selDay'.$val]);
	}
	
	
}

sort($sched);

$sd = json_encode($sched);
$transID = genCode(4).genCode(4).genCode(3);
$userID = $_SESSION['userID'];
$Email = $_SESSION['Email'];
$vendorID = $_POST['vendorID'];
$prodID = $_POST['prodID'];

$insert = $con->prepare("INSERT INTO tbl_transaction VALUES (null,'$transID','$userID','$vendorID','$prodID','$sd','$now','0') ");
$insert->execute();

require_once '../swiftmailer/vendor/autoload.php';

// Create the Transport
	$transport = (new Swift_SmtpTransport('smtp.gmail.com',587,'tls'))
	->setUsername('eventplannercvsu@gmail.com')
	->setPassword('eventplanner36');

// Create the Mailer using your created Transport
	$mailer = new Swift_Mailer($transport);

/// Create a message
	$message = (new Swift_Message('Event Planner Reserve Verification'))
	->setFrom(['eventplannercvsu@gmail.com' => 'Event Planner Website'])
	->setTo(["$Email"])
	->setBody("<a href='http://localhost/event/email-template/package-request.php?transID=$transID'>Please Click this Link to send your request package for reservation</a>",'text/html');

  // Send the message
	$result = $mailer->send($message);

echo "Request Link has been sent to your E-mail. Please check";
