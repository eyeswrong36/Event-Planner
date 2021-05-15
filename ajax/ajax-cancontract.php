<?php include "../include/global.php";

$transID = $_POST['transID'];

$update = $con->prepare("DELETE FROM tbl_transaction WHERE TransID = '$transID'");
$update->execute();

echo "Contract Canceled!";