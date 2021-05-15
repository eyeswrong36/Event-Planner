<?php include "../include/global.php";



if(isset($_FILES['imgFile']['tmp_name'])){
	if($_FILES['imgFile']['tmp_name']){
		$tmp_name = $_FILES['imgFile']['tmp_name'];
		$target = "../images/".genCode(20).".jpg";
		move_uploaded_file($tmp_name, $target);
		$newImage = substr($target, 3);
	}
}




$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Contact = $_POST['Contact'];
$Address = $_POST['Address'];
$CurPass = $_POST['CurPass'];
$NewPass = $_POST['NewPass'];
$ConPass = $_POST['ConPass'];

if(isset($_SESSION['vendorID'])){
	$checkPass = $con->prepare("SELECT * FROM tbl_vendor WHERE vendorID = '$_SESSION[vendorID]'");

}else if(isset($_SESSION['userID'])){
	$checkPass = $con->prepare("SELECT * FROM tbl_user WHERE userID = '$_SESSION[userID]'");
}
$checkPass->execute();
$cp = $checkPass->fetch();

if(!isset($_FILES['imgFile']['tmp_name'])){
	$newImage = $cp['imgProfile'];
}

if($CurPass!=null){
	//check pass
	
	if($cp['Pass']==$CurPass){
		if($NewPass!=$ConPass){
			echo "Password did not match"; die();
		}else{
			$NewPass=$_POST['NewPass'];
		}
	}else{
		echo "Invalid Password"; die();
	}
	
}else{

	$NewPass=$cp['Pass'];
}



if(isset($_SESSION['vendorID'])){

	$BusiName = $_POST['BusiName'];
	$update = $con->prepare("UPDATE tbl_vendor SET BusinessName='$BusiName', Fname='$Fname', Lname='$Lname', Contact='$Contact', Address='$Address', Pass='$NewPass', imgProfile = '$newImage' WHERE vendorID='$_SESSION[vendorID]' ");
	$update->execute();
	echo "Changing Profile Success!";
}else{
	$update = $con->prepare("UPDATE tbl_user SET  Fname='$Fname', Lname='$Lname', Contact='$Contact', Address='$Address', Pass='$NewPass', imgProfile = '$newImage' WHERE userID='$_SESSION[userID]' ");
	$update->execute();
	echo "Changing Profile Success!";
}




