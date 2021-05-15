<!DOCTYPE html>
<html lang="en">


<head>
    <title>Edit Package</title>
    <?php include "include/header.php"; ?>
    <?php include "include/global.php"; ?>
    <style type="text/css">
        .col-md-2 label{cursor:pointer;}
    </style>
</head>

<body>
    <?php include "include/top-header.php"; 
    if(!isset($_GET['itemID'])){
        include "error-404.html"; die();
        
    }else{
        if(empty($_GET['itemID'])){
            include "error-404.html"; die();
        }else{
            $itemInfo = $con->prepare("SELECT * FROM tbl_prod WHERE prodID ='$_GET[itemID]'");
            $itemInfo->execute();
            $ii = $itemInfo->fetch();
        }
    }
    ?>
    <div class="content">
        <div class="container" id="top">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="buttons">
                                <h3 class="section-heading">Edit Package/Service</h3>
                            </div>
                            <div class="card">
                                <form method="post">
                                    <input type="hidden" name="origImg" value="<?=$ii['prodImg'];?>">
                                    <input type="hidden" name="prodID" value="<?=$ii['prodID'];?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4"><center>
                                                <img src="<?=$ii['prodImg']; ?>" class="img-fluid mr-3" alt="Responsive image" id="imgtoUp">
                                                <div class="custom-file mb-3" style="margin-top:10px;">
                                                    <input type="file" class="custom-file-input" id="imgFile" name="imgFile">
                                                    <label class="custom-file-label" for="customFile" placeholder="choose file">File Input</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row border-top">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Package Name</label>
                                                    <input name="PackageName" value="<?=$ii['prodName'];?>" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Price</label>
                                                    <input name="Price" value="<?=$ii['prodPrice'];?>" type="number" class="form-control" placeholder="Enter Amount">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Unit</label>
                                                    <input name="Unit" value="<?=$ii['prodUnit'];?>" type="text" class="form-control" placeholder="Ex: Pax/Piece/Day/Package">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Package Description</label>
                                                    <textarea class="form-control" name="PackageDesc"><?=$ii['prodDesc'];?></textarea>  
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Locations</label>
                                                    <hr>
                                                    <div class="row">
                                                        <?php 
                                                        $loc=explode(" ",$ii['prodLoc']);

                                                        ?>
                                                        <div class="col-md-3">
                                                            <input type="text" name="Street" class="form-control" placeholder="House No./Street" value="<?=$loc[0];?>" > 
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="Barangay" class="form-control" placeholder="Barangay" value="<?=$loc[1];?>"> 
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="City" class="form-control" placeholder="City" required value="<?=$loc[2];?>"> 
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="Prov" class="form-control" placeholder="Province" required value="<?=$loc[3];?>"> 
                                                        </div>

                                                    </div>
                                                    <br>
                                                    <label>Note:If you want your service is in whole <b>City</b> or <b>Province</b> just fill out only the City and Province Field</label>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Availability</label>
                                                    <hr>
                                                    <div class="row">
                                                        <?php 
                                                            $sun = "";
                                                            $sun1 = "";
                                                            $sun2 = "";
                                                            $mon = "";
                                                            $mon1 = "";
                                                            $mon2 = "";
                                                            $tue = "";
                                                            $tue1 = "";
                                                            $tue2 = "";
                                                            $wed = "";
                                                            $wed1 = "";
                                                            $wed2 = "";
                                                            $thu = "";
                                                            $thu1 = "";
                                                            $thu2 = "";
                                                            $fri = "";
                                                            $fri1 = "";
                                                            $fri2 = "";
                                                            $sat = "";
                                                            $sat1 = "";
                                                            $sat2 = "";

                                                            $day = json_decode($ii['prodDays']);
                                                            
                                                            foreach ($day as $key => $value) {

                                                                $getDay = substr($value,0,3);
                                                                $time = explode("-",$value);
                                                                $getTime = explode("~",$time[1]);
                                                                
                                                                if($getDay=="Sun"){
                                                                    $sun="checked";
                                                                    $sun1=date("H:i",strtotime($getTime[0]));
                                                                    $sun2=date("H:i",strtotime($getTime[1]));
                                                                }
                                                                if($getDay=="Mon"){
                                                                    $mon="checked";
                                                                    $mon1=date("H:i",strtotime($getTime[0]));
                                                                    $mon2=date("H:i",strtotime($getTime[1]));
                                                                }
                                                                if($getDay=="Tue"){
                                                                    $tue="checked";
                                                                    $tue1=date("H:i",strtotime($getTime[0]));
                                                                    $tue2=date("H:i",strtotime($getTime[1]));
                                                                }
                                                                if($getDay=="Wed"){
                                                                    $wed="checked";
                                                                    $wed1=date("H:i",strtotime($getTime[0]));
                                                                    $wed2=date("H:i",strtotime($getTime[1]));
                                                                }
                                                                if($getDay=="Thu"){
                                                                    $thu="checked";
                                                                    $thu1=date("H:i",strtotime($getTime[0]));
                                                                    $thu2=date("H:i",strtotime($getTime[1]));
                                                                }
                                                                if($getDay=="Fri"){
                                                                    $fri="checked";
                                                                    $fri1=date("H:i",strtotime($getTime[0]));
                                                                    $fri2=date("H:i",strtotime($getTime[1]));
                                                                }
                                                                if($getDay=="Sat"){
                                                                    $sat="checked";
                                                                    $sat1=date("H:i",strtotime($getTime[0]));
                                                                    $sat2=date("H:i",strtotime($getTime[1]));
                                                                }

                                                            }
                                                            


                                                            
                                                        ?>

                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Sun" value="Sunday"  <?=$sun;?>> 
                                                            <label>Sunday</label><br>
                                                            <span>From</span>
                                                            <input type="time" name="SunFr" value="<?=$sun1?>" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="SunTo" value="<?=$sun2?>" class="form-control form-control-sm">
                                                        </div>
                                                        
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Mon" value="Monday" <?=$mon;?>> 
                                                            <label>Monday</label>
                                                            <br>
                                                            <span>From</span>
                                                            <input type="time" name="MonFr" value="<?=$mon1?>" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="MonTo" value="<?=$mon2?>" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Tue" value="Tuesday" <?=$tue;?>> 
                                                            <label>Tuesday</label>
                                                            <br>
                                                            <span>From</span>
                                                            <input type="time" name="TueFr" value="<?=$tue1;?>" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="TueTo" value="<?=$tue2;?>" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Wed" value="Wednesday" <?=$wed;?>> 
                                                            <label>Wednesday</label>
                                                            <br>
                                                            <span>From</span>
                                                            <input type="time" name="WedFr" value="<?=$wed1?>" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="WedTo" value="<?=$wed2?>" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Thu" value="Thursday" <?=$thu;?>> 
                                                            <label>Thursday</label>
                                                            <br>
                                                            <span>From</span>
                                                            <input type="time" name="ThuFr" value="<?=$thu1?>" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="ThuTo" value="<?=$thu2?>" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Fri" value="Friday" <?=$fri;?>> 
                                                            <label>Friday</label>
                                                            <br>
                                                            <span>From</span>
                                                            <input type="time" name="FriFr" value="<?=$fri1?>" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="FriTo" value="<?=$fri2?>" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Sat" value="Saturday" <?=$sat;?>> 
                                                            <label>Saturday</label>
                                                            <br>
                                                            <span>From</span>
                                                            <input type="time" name="SatFr" value="<?=$sat1?>" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="SatTo" value="<?=$sat2?>" class="form-control form-control-sm">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top:10px;">
                                                <select class="custom-select mb20" name="prodType">
                                                    <option value="1">Venue</option>
                                                    <option value="2">Couture</option>
                                                    <option value="3">Photography</option>
                                                    <option value="4">Catering</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 border-top">
                                                <center><br>
                                                    <button type="submit" class="btn btn-primary"> Save Package</button>
                                                </center>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "include/footer.php"; ?>
    <script src="js/functions/edit-item.js"></script>
    <script type="text/javascript">
        $("[name='prodType']").val("<?=$ii['prodType']; ?>");
    </script>
</body>


</html>