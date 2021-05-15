<?php include "../include/global.php";
$Email = $_POST['Email'];
$Pass = $_POST['Pass'];

if($Email=="eventplannercvsu@gmail.com" AND $Pass=="admin"){
	echo "<script>window.location='user-accounts.php'</script>";
	die();
}
 
if($_POST['LogType']==1){

	$checkAcc = $con->prepare("SELECT * FROM tbl_vendor WHERE Email='$Email' AND Pass='$Pass' ");
	$checkAcc->execute();
	$ca = $checkAcc->fetch();
	if($ca){
		if($ca['Status']=="1"){
			echo "Your Account is Currently Blocked";
		}else if($ca['Status']=="2"){
			echo "Please Check your Email and Verify your Account to Login";
		}else{
			$_SESSION['vendorID'] = $ca['vendorID'];
			$_SESSION['BusiName'] = $ca['BusinessName'];
			$_SESSION['Fname'] = $ca['Fname'];
			echo "00";
		}
		
	}else{
		echo "Invalid Username Or Password";
	}

}else{
	$checkAcc = $con->prepare("SELECT * FROM tbl_user WHERE Email='$Email' AND Pass='$Pass' ");
	$checkAcc->execute();
	$ca = $checkAcc->fetch();
	if($ca){
		if($ca['Status']=="1"){
			echo "Your Account is Currently Blocked";
		}else if($ca['Status']=="2"){
			echo "Please Check your Email and Verify your Account to Login";
		}else{
			$_SESSION['userID'] = $ca['userID'];
			$_SESSION['Email'] = $ca['Email'];
			$_SESSION['Fname'] = $ca['Fname'];
			echo "00";
		}
	}else{
		echo "Invalid Username Or Password";
	}
}