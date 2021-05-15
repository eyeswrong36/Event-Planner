<?php include "../include/global.php";

$vendorID = $_SESSION['vendorID'];
$ReTrans = $_POST['ReTrans'];
$ReDate = $_POST['ReDate'];
$ReLoc = $_POST['ReLoc'];
$ReDesc = $_POST['ReDesc'];

$insert = $con->prepare("INSERT INTO tbl_reserved VALUES (null,'$vendorID','$ReTrans','$ReDate','$ReLoc','$ReDesc')");
$insert->execute();

echo "Reservation Success!";