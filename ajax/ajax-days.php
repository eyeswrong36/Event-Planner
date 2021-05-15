<?php include "../include/global.php";


$mnth = $_POST['mnth'];
$day = $_POST['day'];
$prodID = $_POST['prodID'];

function allDays($month,$day,$con,$prodID){
		//check if greater than month
		$m1 = date("m",strtotime($month));
		$m2 = date("m",strtotime("now"));
		$year = "";
		if($m2>$m1){
			
			$year = date("Y",strtotime("now +1 year"));
		}

        $last = strtotime("last $day of $month $year");
        $first = strtotime("first $day of $month $year");
        $week = 0;
        for ($i=$first; $i < $last; ) {
            $i=strtotime("first $day of $month $year +$week week");
            $ed = date("D M d Y",$i);
            $checkReserved = $con->prepare("SELECT * FROM tbl_reserved WHERE prodID ='$prodID' AND EventDate = '$ed' ");
            $checkReserved->execute();
            $cr = $checkReserved->fetch(); 
            if(!$cr){
                if(strtotime("now") >= strtotime(date("M d Y",$i))){
                    echo "<option>".date("M d Y",strtotime(date("M d Y",$i)." +1 year"))."</option>";
                }else{
                    echo "<option>".date("M d Y",$i)."</option>";
                }
                
            }
            
            $week++;
        }
    }

    allDays($mnth,$day,$con,$prodID);