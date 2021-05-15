<!DOCTYPE html>
<html lang="en">


<head>
    <title>Package Info</title>
    <?php include "include/header.php"; ?>
    <?php include "include/global.php";  ?>
    <?php
    function allDays($month,$day,$con,$prodID){

        $last = strtotime("last $day of $month");
        $first = strtotime("first $day of $month");
        $week = 0;
        for ($i=$first; $i < $last; ) {
            $i=strtotime("first $day of $month +$week week");
            $ed = date("D M d Y",$i);
            $checkReserved = $con->prepare("SELECT * FROM tbl_reserved WHERE prodID ='$prodID' AND EventDate = '$ed' ");
            $checkReserved->execute();
            $cr = $checkReserved->fetch();
            if($cr){

            }else{
                echo date("M d Y",$i)."<br>";
            }
            
            $week++;
        }
    }

    
    $totalRater = $con->prepare("SELECT COUNT(rowID) as totalRater FROM tbl_ratings WHERE prodID ='$_GET[prodID]' ");
    $totalRater->execute();
    $tr = $totalRater->fetch();


    $star1 = countRates($con,1,$_GET['prodID']);
    $star2 = countRates($con,2,$_GET['prodID']);
    $star3 = countRates($con,3,$_GET['prodID']);
    $star4 = countRates($con,4,$_GET['prodID']);
    $star5 = countRates($con,5,$_GET['prodID']);
    $totalRatings = $star1+$star2+$star3+$star4+$star5;

    ?>
    <style type="text/css">

        .nice-select{display:none !important;}
    </style>
</head>

<body>
    <?php include "include/top-header.php"; ?>
    <?php if(!isset($_GET['prodID'])){
        include "error-404.html"; die();
    }else{
        $prodID = $_GET['prodID'];
        $getInfo = $con->prepare("SELECT * FROM tbl_prod WHERE prodID='$prodID' ");
        $getInfo->execute();
        $gi = $getInfo->fetch();
        if(!$gi){
            include "error-404.html"; die();
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
                                <h3 class="section-heading">Service/Package Information</h3>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4" >
                                            <img src="<?=$gi['prodImg'];?>"><br><br>
                                            <center>
                                                <input type="hidden" value="<?=$_GET['prodID']; ?>" id="pID">
                                                <?php if(isset($_SESSION['userID']) OR isset($_SESSION['vendorID'])){ ?>
                                                    <div id="divstar" style="width:43%;">
                                                        <i class="fa fa-star fa-lg" id="star1"></i>
                                                        <i class="fa fa-star fa-lg" id="star2"></i>
                                                        <i class="fa fa-star fa-lg" id="star3"></i>
                                                        <i class="fa fa-star fa-lg" id="star4"></i>
                                                        <i class="fa fa-star fa-lg" id="star5"></i>
                                                    </div>
                                                <?php } ?>
                                            </center>
                                            
                                        </div>
                                        <div class="col-md-5">
                                            <ul style="list-style:none;">
                                                <li style="font-size:25px;"><?=$gi['prodName']; ?></li>
                                                <li>By <a href="profile.php?profID=<?=$gi['vendorID']; ?>" ><label style="cursor:pointer;"><?=$gi['prodOwner']; ?></label></a></li>
                                                <li>Price/Unit: <label><?=$gi['prodPrice'];?> per <?=$gi['prodUnit']; ?></label></li>
                                                <li>Locations:<br>
                                                   <label><?=$gi['prodLoc'];?></label>
                                               </li>
                                               <li>Description<br>
                                                <label><?=$gi['prodDesc'] ?></label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Schedules</b><br>
                                        <?php $loc = json_decode($gi['prodDays']);
                                        foreach ($loc as $key => $value) {
                                            echo "<label>".str_replace("-"," ",substr($value,0,9))."</label><br>";
                                        }
                                        ?>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body border-top">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Ratings</h2>
                                        <center>
                                            <?php if($totalRatings!=0){ ?>
                                                <p><?=$totalRatings/$tr['totalRater']; ?> of 5</p>
                                            <?php } ?>
                                        </center>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-group list-group-flush">
                                            <?php 
                                            $getRaters = $con->prepare("SELECT * FROM tbl_ratings WHERE prodID='$_GET[prodID]' ORDER BY rowID DESC");
                                            $getRaters->execute();
                                            while ($gr = $getRaters->fetch()) {
                                                $userID = $gr['userID'];
                                                //check userID
                                                $getName = $con->prepare("SELECT * FROM tbl_user WHERE userID='$userID' ");
                                                $getName->execute();
                                                $gn =$getName->fetch();
                                                if($gn){ ?>
                                                    <li class="list-group-item"><?=ucfirst($gn['Fname'])." ".ucfirst($gn['Lname']);?> <?=$gr['starRate'];?> Stars <br>
                                                        <small><?=date("M d Y",$gr['RatedDate']); ?></small></li>
                                                    <?php }else{ 
                                                        $getName = $con->prepare("SELECT * FROM tbl_vendor WHERE vendorID='$userID' ");
                                                        $getName->execute();
                                                        $gn =$getName->fetch();
                                                        ?>
                                                        <li class="list-group-item"><?=ucfirst($gn['Fname'])." ".ucfirst($gn['Lname']);?> <?=$gr['starRate'];?> Stars <br>
                                                            <small><?=date("M d Y",$gr['RatedDate']); ?></small></li>
                                                        <?php  }
                                                        ?>

                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row border-top">
                                            <div class="col-md-12">
                                                <br>
                                                <center>
                                                    <?php if(isset($_SESSION['vendorID'])){ ?>
                                                        <a class="btn btn-primary" href="edit-item.php?itemID=<?=$gi['prodID']?>"><i class="fa fa-edit fa-fw"></i> Edit this package</a>
                                                    <?php }else if(isset($_SESSION['userID'])){ ?>
                                                        <button class="btn btn-warning" id="sendReq"><i class="fa fa-paper-plane fa-fw"></i> Send Request</button>
                                                    <?php }else{ ?>
                                                        <a href="user-login.php" class="btn btn-success">Login to Reserve this package</a>
                                                    <?php }?>
                                                </center>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "include/footer.php"; ?>





        <a href="#" id="setSched" class="btn btn-primary" data-toggle="modal" data-target="#setSchedule" style="display:none;">
            Launch demo modal
        </a>
        <div class="modal fade" id="setSchedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Choose Schedule</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <form method="post" id="schedForm">
                        <div class="modal-body">
                            <div class="row">
                                <input type="hidden" id="storage">
                                <input type="hidden" id="vendorID" value="<?=$gi['vendorID'];?>">
                                <input type="hidden" id="prodID" value="<?=$gi['prodID'];?>">

                                <?php 
                                foreach ($loc as $key => $value) { ?>
                                    <div class="col-md-4">
                                        <input type="checkbox" name="check<?=$key?>" id="day<?=$key?>" class="day" value="<?=substr($value,0,3)?>"> <?=substr($value,0,3)?><br>
                                        <select name="mnth<?=$key?>" class="mnths" id="mnth<?=$key?>">
                                            <option>Select Month</option>
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                            <option>April</option>
                                            <option>May</option>
                                            <option>June</option>
                                            <option>July</option>
                                            <option>August</option>
                                            <option>September</option>
                                            <option>October</option>
                                            <option>November</option>
                                            <option>December</option>
                                        </select>
                                        <select class="selDay<?=$key?>" name="selDay<?=$key?>">
                                            <option>Select Day</option>
                                        </select>
                                    </div>
                                    
                                <?php }
                                ?>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning"><i class="fa fa-paper-plane fa-fw"></i> Send</button>

                            <a href="#" id="cancel" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-fw"></i> Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/functions/item-info.js"></script>
        <script type="text/javascript">
            var store = [];
            $('#schedForm').submit(function(){
                $('#cancel').trigger("click");
                $('#btn-modal').trigger("click");
                $('.modal-title').html("Result");
                var datas = {};
                var storage = $('#storage').val();

                $.each(store,function(i,val){
                    var a = $("[name='check"+val+"']").val();
                    var b = $("[name='selDay"+val+"']").val();
                    datas["check"+val] = a;
                    datas["selDay"+val] = b;
                });

                datas["store"] = storage;
                datas["vendorID"] = $('#vendorID').val();
                datas["prodID"] = $('#prodID').val();
                $.ajax({
                    type:"POST",
                    url:"ajax/ajax-sched-req.php",
                    cache:false,
                    data:datas,
                    success:function(res){
                        $('#modal-p').html(res);
                    }
                })
                return false;
            });

            $('.mnths').change(function(){
                var n = $(this).attr("id").slice(-1);
                var m = $(this).val();
                var d = $('#day'+n).val();
                var pID = "<?=$_GET['prodID']; ?>";
                $.ajax({
                    type:"POST",
                    url:"ajax/ajax-days.php",
                    cache:false,
                    data:{'mnth':m,'day':d,'prodID':pID},
                    success:function(res){
                        $('.selDay'+n).css({'display':'block'});
                        $('.selDay'+n).html(res);
                        
                    }
                });
                
            });
            
            $('.day').click(function(){
                var n = $(this).attr("id").slice(-1);
                
                if($(this).is(":checked")){
                    $('#mnth'+n).css({'display':'block'});
                    store.push(n);
                }else{
                    $('#mnth'+n).css({'display':'none'});
                    $('.selDay'+n).css({'display':'none'});
                    
                    var index = store.indexOf(n);
                    if (index > -1) {
                        store.splice(index, 1);
                    }
                }
                
                var str = JSON.stringify(store);
                $('#storage').val(str);
            });
        </script>
    </body>


    </html>