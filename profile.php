<!DOCTYPE html>
<html lang="en">


<head>
    <title>My Profile</title>
    <?php include "include/header.php"; ?>
    <?php include "include/global.php"; ?>
</head>

<body>
    <?php include "include/top-header.php";
    $BusiName =0; 
    if(isset($_GET['profID'])){

        $profID = $_GET['profID'];
        //check
        $getInfo = $con->prepare("SELECT * FROM tbl_user WHERE userID = '$profID' ");
        $getInfo->execute();
        $gi = $getInfo->fetch();
        if($gi){

        }else{
            $getInfo = $con->prepare("SELECT * FROM tbl_vendor WHERE vendorID = '$profID' ");
            $getInfo->execute();
            $gi = $getInfo->fetch();
            $BusiName=1;
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
                                <h3 class="section-heading">My Profile</h3>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?=$gi['imgProfile'];?>" class="rounded-circle mr-3" alt="Responsive image" style="max-width:300px;">
                                    <?=ucfirst($gi['Fname'])." ".ucfirst($gi['Lname']); ?> 

                                </div>
                                <div class="card-body border-top">
                                    <div class="st-tab">
                                        <!-- st-tabs -->
                                        <ul class="nav nav-tabs" id="Mytabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab-1" aria-selected="true">About Me</a>
                                            </li>
                                            <?php if(isset($gi['BusinessName']) OR $BusiName==1):?>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab-2" aria-selected="false">My Services</a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade active show" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                                <ul style="list-style:none;">
                                                    <?php if(isset($_SESSION['vendorID'])){ 
                                                        if(isset($_GET['profID']) AND $BusiName==1){ ?>
                                                            <li><i class="fa fa-building fa-fw"></i><?=strtoupper($gi['BusinessName']); ?></li>
                                                        <?php }

                                                        if(!isset($_GET['profID'])){ ?>
                                                            <li><i class="fa fa-building fa-fw"></i><?=strtoupper($gi['BusinessName']); ?></li>
                                                        <?php }
                                                    } ?>
                                                    <li><i class="fa fa-map-marker-alt fa-fw"></i><?=strtoupper($gi['Address']); ?></li>
                                                    <li><i class="fa fa-at fa-fw"></i><?=strtolower($gi['Email']); ?></li>
                                                    
                                                    <li><i class="fa fa-phone fa-fw"></i><?=$gi['Contact']; ?></li>
                                                </ul>
                                                <?php if(!isset($_GET['profID'])){ ?>
                                                    <a href="editprofile.php" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i> Edit Profile</a>
                                                <?php } ?>
                                            </div>
                                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                                <div class="row">



                                                    <?php 
                                                    if(isset($_GET['profID'])){
                                                        $showServices = $con->prepare("SELECT * FROM tbl_prod WHERE vendorID = '$_GET[profID]' ORDER BY rowID DESC");
                                                    }else{
                                                        $showServices = $con->prepare("SELECT * FROM tbl_prod WHERE vendorID='$_SESSION[vendorID]' ORDER BY rowID DESC");
                                                    }
                                                    $showServices->execute();
                                                    
                                                    while($ss = $showServices->fetch()){

                                                        $totalRater = $con->prepare("SELECT COUNT(rowID) as totalRater FROM tbl_ratings WHERE prodID ='$ss[prodID]' ");
                                                        $totalRater->execute();
                                                        $tr = $totalRater->fetch();


                                                        $star1 = countRates($con,1,$ss['prodID']);
                                                        $star2 = countRates($con,2,$ss['prodID']);
                                                        $star3 = countRates($con,3,$ss['prodID']);
                                                        $star4 = countRates($con,4,$ss['prodID']);
                                                        $star5 = countRates($con,5,$ss['prodID']);
                                                        $totalRatings = $star1+$star2+$star3+$star4+$star5;
                                                        ?>
                                                        <div class="col-md-4">
                                                            <div class="vendor-thumbnail">
                                                                <!-- Vendor thumbnail -->
                                                                <div class="vendor-img zoomimg" style="height:200px;overflow:hidden;">
                                                                    <!-- Vendor img -->
                                                                    <a href="item-info.php?prodID=<?=$ss['prodID'];?>"><img src="<?=$ss['prodImg'];?>" alt="" class="img-fluid" style="height:100%;"></a>

                                                                </div>
                                                                <!-- /.Vendor img -->
                                                                <div class="vendor-content">
                                                                    <!-- Vendor Content -->
                                                                    <h2 class="vendor-title"><a href="#" class="title"><?=$ss['prodName'];?></a></h2>

                                                                </div>
                                                                <!-- /.Vendor Content -->
                                                                <div class="vendor-meta">
                                                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                                                        <span class="vendor-price">
                                                                            <?=$ss['prodPrice'];?>
                                                                        </span>
                                                                        <span class="vendor-text">Pesos</span></div>
                                                                        <div class="vendor-meta-item vendor-meta-item-bordered">
                                                                            <span class="vendor-guest">
                                                                                <?=$ss['prodUnit'];?>
                                                                            </span>
                                                                            <span class="vendor-text">Unit</span>
                                                                        </div>
                                                                        <div class="vendor-meta-item vendor-meta-item-bordered">
                                                                            <span class="rating-star">
                                            <?php if($totalRatings!=0){ echo $totalRatings/$ss['prodRatings']; }else{ echo "0";} ?> of 5 <i class="fa fa-star rated"></i>
                                        </span>
                                        <span class="rating-count vendor-text">(<?=$ss['prodRatings'];?>) Star Rates
                                        </span></div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.Vendor thumbnail -->
                                                                </div>
                                                            <?php } ?>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <i class="fa fa-exclamation-triangle"></i> Reports <?=$gi['Reports']; ?>
                                            <?php if(isset($_GET['profID'])){ ?>
                                                <button class="btn btn-danger btn-sm" id="btn-report" style="float:right;"><i class="fa fa-exclamation-triangle fa-fw" ></i> Report</button>
                                            <?php } ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include "include/footer.php"; ?>
            <?php if(isset($_GET['profID'])){ ?>
                <script type="text/javascript">
                    $('#btn-report').click(function(){
                        $('.btn-secondary').show();
                        $('#btn-modal').trigger("click");
                        $('.modal-title').html("Result");
                        $('#modal-p').html("<h3>Reason</h3><textarea class='form-control' id='Reason'></textarea>");

                        
                    });
                    $('.btn-secondary').click(function(){
                        var r = $('#Reason').val();
                        $.ajax({
                            type:"POST",
                            url:"ajax/ajax-report.php",
                            cache:false,
                            data:{'profID':'<?=$_GET['profID'];?>','Reason':r},
                            success:function(res){
                                setTimeout(function(){
                                    $('#btn-modal').trigger("click");
                                    $('.btn-secondary').hide();
                                },1000)
                                $('#modal-p').html(res);
                            }
                        });
                    });
                </script>
            <?php } ?>
        </body>


        </html>