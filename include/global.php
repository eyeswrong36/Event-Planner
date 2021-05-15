<?php 
//connections
session_start();
$con = new PDO("mysql:host=localhost;dbname=eplanner","root","admin");

function genCode($count){
	$RandCode = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"), 0,$count);
	return $RandCode;
}


//date and time
date_default_timezone_set("Asia/Manila");
$now = strtotime("now");

function timeAgo($time){
	$ago = strtotime("now")-strtotime($time);
	if($ago<=0){
		echo "Invalid Time";
		die();
	}
	$min = floor($ago/60);
	$hr = floor($ago/3600);
	$day = floor($ago/86400);
	$wk = floor($ago/604800);
	$mnth = floor($ago/2592000);
	$year = floor($ago/31536000);
	if($min>59){
		$output= $hr." hours ago";
		if($hr>23){
			$output= $day." days ago";
			if($day>6){
				$output= $wk." weeks ago";
				if($wk>3){
					$output= $mnth." months ago";
					if($mnth>11){
						$output= $year." years ago";
					}
				}
			}
		}
	}else{
		$output = $min." minutes ago";
	}
	if($output==1){
		echo str_replace("s", "", $output);
	}else{
		echo $output;
	}
	
}

//security 
if(!isset($_SESSION['userID'])){
	$currentURL = $_SERVER['SCRIPT_NAME'];
	//insert URL (signin to access)
	$URLs = array("/event/asd.php");
	//check URLs
	for ($i=0; $i < sizeof($URLs) ; $i++) { 
		if($URLs[$i]==$currentURL){
			header("Location:index.php");
		}
	}
}
function countRates($con,$rate,$prodID){
                    $getRate = $con->prepare("SELECT COUNT(rowID) as rate FROM tbl_ratings WHERE starRate = '$rate' AND prodID = '$prodID' ");
                    $getRate->execute() or die(print_r($getRate->errorInfo(),true));
                    $gr = $getRate->fetch();
                    $total = $gr['rate']*$rate;  
                    return $total; 
                }




?>