<?php include "../include/global.php";

$reportID = $_POST['profID'];

$reason = $_POST['Reason'];

//check if already reported
if(isset($_SESSION['userID'])){
	$reporter = $_SESSION['userID'];
}else{
	$reporter = $_SESSION['vendorID'];
}

$checkReport = $con->prepare("SELECT * FROM tbl_reports WHERE Reporter='$reporter' AND Reported = '$reportID' ");
	$checkReport->execute();
	$cr = $checkReport->fetch();
	if($cr){
		echo "You already reported this Profile";
		die();
	}


//check table
$report = $con->prepare("SELECT * FROM tbl_user WHERE userID='$reportID' ");
$report->execute();
$re = $report->fetch();
if($re){
	
	
	$reported = $re['Reports'];
	$addRep = $reported+1;
	
	$updateRep = $con->prepare("UPDATE tbl_user SET Reports='$addRep' WHERE userID='$reportID' ");
	$updateRep->execute();

	//insert report
	

}else{	
	
	
	
	$rep = $con->prepare("SELECT * FROM tbl_vendor WHERE vendorID='$reportID' ");
	$rep->execute();
	$red = $rep->fetch();
	$reported = $red['Reports'];
	$addRep = $reported+1;
	$updateRep = $con->prepare("UPDATE tbl_vendor SET Reports='$addRep' WHERE vendorID='$reportID' ");
	$updateRep->execute();

	//innsert report

}

$insertRep = $con->prepare("INSERT INTO tbl_reports VALUES (null,'$reporter','$reportID','$reason','$now')");
$insertRep->execute();

echo "Reported!";