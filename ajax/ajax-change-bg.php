<?php include "../include/global.php";


$tmp_name = $_FILES['bgFile']['tmp_name'];
$target = "../images/index/".genCode(20).".jpg";
move_uploaded_file($tmp_name, $target);

$newBg = substr($target, 3);
$catType = $_POST['catType'];

if($catType==1){
	$col = "Venue";
}else if($catType==2){
	$col = "Catering";
}else if($catType==3){
	$col = "Photo";
}else if($catType==4){
	$col = "Couture";
}
$updateBG = $con->prepare("UPDATE tbl_settings SET $col = '$newBg' WHERE rowID =1");
$updateBG->execute();

echo "Changing Background Success!";