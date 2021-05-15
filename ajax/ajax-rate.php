<?php include "../include/global.php";

if(isset($_SESSION['userID'])){
	$myID = $_SESSION['userID'];
}else{
	$myID = $_SESSION['vendorID'];
}

$prodID = $_POST['pID'];
$rate = $_POST['rate'];

//check rate 
$checkRate = $con->prepare("SELECT * FROM tbl_ratings WHERE userID ='$myID' AND prodID='$prodID' ");
$checkRate->execute();
$cr = $checkRate->fetch();

if($cr){
	$updateRate = $con->prepare("UPDATE tbl_ratings SET starRate = '$rate' WHERE userID ='$myID' AND prodID='$prodID' ");
	$updateRate->execute();
	echo "Thank you for Rating!";
	die();

}

//select rate

$rates = $con->prepare("SELECT * FROM tbl_prod WHERE prodID ='$prodID' ");
$rates->execute();
$r = $rates->fetch();

$CurRate = intval($r['prodRatings'])+1;

$updateRate = $con->prepare("UPDATE tbl_prod SET prodRatings = '$CurRate' WHERE prodID='$prodID' ");
$updateRate->execute();
$inserRater = $con->prepare("INSERT INTO tbl_ratings VALUES (null,'$myID','$prodID','$rate','$now')");
$inserRater->execute();

echo "Thank you for Rating!";