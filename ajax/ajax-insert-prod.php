<?php include "../include/global.php";

$tmp_name = $_FILES['imgFile']['tmp_name'];
if(!$tmp_name){
	echo "Please Insert Image"; die();
}



if(!isset($_POST['Sun']) AND !isset($_POST['Mon']) AND !isset($_POST['Tue']) AND !isset($_POST['Wed']) AND !isset($_POST['Thu']) AND !isset($_POST['Fri']) AND !isset($_POST['Sat'])){
	echo "Please check Availability Days";
	die();
}

$prodLoc = $_POST['Street']." ".$_POST['Barangay']." ".$_POST['City']." ".$_POST['Prov'];





function setFormat($time){
	$newFormat =  date("h:i A",strtotime($time));
	return $newFormat;
}

$prodDays = array();
if(isset($_POST['Sun'])){
	if(!isset($_POST['SunFr']) OR !isset($_POST['SunTo'])){
		echo "Please Insert Time"; die();
	}
	array_push($prodDays,$_POST['Sun']." - ".$_POST['SunFr']." ~ ".$_POST['SunTo']);
}
if(isset($_POST['Mon'])){
	if(!isset($_POST['MonFr']) OR !isset($_POST['MonTo'])){
		echo "Please Insert Time"; die();
	}
	array_push($prodDays,$_POST['Mon']." - ".setFormat($_POST['MonFr'])." ~ ".setFormat($_POST['MonTo']));
}
if(isset($_POST['Tue'])){
	if(!isset($_POST['TueFr']) OR !isset($_POST['TueTo'])){
		echo "Please Insert Time"; die();
	}
	array_push($prodDays,$_POST['Tue']." - ".setFormat($_POST['TueFr'])." ~ ".setFormat($_POST['TueTo']));
}
if(isset($_POST['Wed'])){
	if(!isset($_POST['WedFr']) OR !isset($_POST['WedTo'])){
		echo "Please Insert Time"; die();
	}
	array_push($prodDays,$_POST['Wed']." - ".setFormat($_POST['WedFr'])." ~ ".setFormat($_POST['WedTo']));
}
if(isset($_POST['Thu'])){
	if(!isset($_POST['ThuFr']) OR !isset($_POST['ThuTo'])){
		echo "Please Insert Time"; die();
	}
	array_push($prodDays,$_POST['Thu']." - ".setFormat($_POST['ThuFr'])." ~ ".setFormat($_POST['ThuTo']));
}
if(isset($_POST['Fri'])){
	if(!isset($_POST['FriFr']) OR !isset($_POST['FriTo'])){
		echo "Please Insert Time"; die();
	}
	array_push($prodDays,$_POST['Fri']." - ".setFormat($_POST['FriFr'])." ~ ".setFormat($_POST['FriTo']));
}
if(isset($_POST['Sat'])){
	if(!isset($_POST['SatFr']) OR !isset($_POST['SatTo'])){
		echo "Please Insert Time"; die();
	}
	array_push($prodDays,$_POST['Sat']." - ".setFormat($_POST['SatFr'])." ~ ".setFormat($_POST['SatTo']));
}
$encodedDays = json_encode($prodDays);
$encodedLoc = json_encode($prodLoc);
$Owner = $_SESSION['BusiName'];
$vendorID = $_SESSION['vendorID'];
$prodName = $_POST['PackageName'];
$Price = $_POST['Price'];
$Unit = $_POST['Unit'];
$PackageDesc = $_POST['PackageDesc'];
$prodType = $_POST['prodType'];

$newFileName = "../images/prod/".genCode(20).".jpg";
move_uploaded_file($tmp_name,$newFileName);
$path = substr($newFileName,3);
$prodID = genCode(22);
$insertPackage = $con->prepare("INSERT INTO tbl_prod VALUES (null,'$prodID','$Owner','$vendorID','$prodName','$Unit','$Price','$PackageDesc','$encodedLoc','$encodedDays','$path','$prodType','$now','0')");
$insertPackage->execute();
echo "Inserting Package Success!";
