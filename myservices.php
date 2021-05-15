<!DOCTYPE html>
<html lang="en">


<head>
    <title>My Profile</title>
    <?php include "include/header.php"; ?>
    <?php include "include/global.php"; ?>
</head>

<body>
    <?php include "include/top-header.php"; ?>
    <div class="content">
        <div class="container" id="top">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="buttons">
                                <h3 class="section-heading">My Services</h3>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Search Package Name">
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <?php 
                                            $showMyProd = $con->prepare("SELECT * FROM tbl_prod WHERE vendorID = '$_SESSION[vendorID]' ");
                                            $showMyProd->execute();
                                            while($smp = $showMyProd->fetch()){
                                        ?>
                                        <div class="col-md-4">
                                            <div class="vendor-thumbnail">
                                                <!-- Vendor thumbnail -->
                                                <div class="vendor-img zoomimg" style="height:200px;overflow:hidden;">
                                                    <!-- Vendor img -->
                                                    <a href="item-info.php?prodID=<?=$smp['prodID'];?>"><img src="<?=$smp['prodImg'];?>" alt="" class="img-fluid" style="height:100%;"></a>
                                                    
                                                </div>
                                                <!-- /.Vendor img -->
                                                <div class="vendor-content">
                                                    <!-- Vendor Content -->
                                                    <h2 class="vendor-title"><a href="#" class="title"><?=$smp['prodName'];?></a></h2>
                                                    
                                                </div>
                                                <!-- /.Vendor Content -->
                                                <div class="vendor-meta">
                                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                                        <span class="vendor-price">
                                                            <?=$smp['prodPrice'];?>
                                                        </span>
                                                        <span class="vendor-text">Pesos</span></div>
                                                        <div class="vendor-meta-item vendor-meta-item-bordered">
                                                            <span class="vendor-guest">
                                                                <?=$smp['prodUnit'];?>
                                                            </span>
                                                            <span class="vendor-text">Unit</span>
                                                        </div>
                                                        <div class="vendor-meta-item vendor-meta-item-bordered">
                                                            <span class="rating-star">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rate-mute"></i> 
                                                            </span>
                                                            <span class="rating-count vendor-text">(20) Star Rates</span></div>
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
                        </div>
                    </div>
                </div>
            </div>

            <?php include "include/footer.php"; ?>
        </body>


        </html>