<?php include "../include/global.php";

$acc = $_POST['ID'];
$userType=$_POST['uType'];


if($userType=="user"){
	$getStat = $con->prepare("SELECT * FROM tbl_user WHERE userID='$acc'");
	$getStat->execute();
	$gs = $getStat->fetch();
	$status = $gs['Status'];
	if($status==0){
		$block = $con->prepare("UPDATE tbl_user SET Status='1' WHERE userID='$acc' ");
		$block->execute();
		echo "Blocking Success!";
	}else{
		$block = $con->prepare("UPDATE tbl_user SET Status='0' WHERE userID='$acc' ");
		$block->execute();
		echo "unBlocking Success!";
	}

}else{
	$getStat = $con->prepare("SELECT * FROM tbl_vendor WHERE vendorID='$acc'");
	$getStat->execute();
	$gs = $getStat->fetch();
	$status = $gs['Status'];
	if($status==0){
		$block = $con->prepare("UPDATE tbl_vendor SET Status='1' WHERE vendorID='$acc' ");
		$block->execute();
		echo "Blocking Success!";
	}else{
		$block = $con->prepare("UPDATE tbl_vendor SET Status='0' WHERE vendorID='$acc' ");
		$block->execute();
		echo "unBlocking Success!";
	}

}

