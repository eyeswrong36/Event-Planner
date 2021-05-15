<!DOCTYPE html>
<html lang="en">


<head>
    <title>Event Planner - Venue Page</title>

    <?php include "include/header.php"; ?>
    <?php include "include/global.php"; ?>
    
</head>

<body>
    <!-- header-top -->
    <?php include "include/top-header.php";
        $getSet = $con->prepare("SELECT * FROM tbl_settings WHERE rowID =1");
        $getSet->execute() or die(print_r($getSet->errorInfo(),true));
        $gs = $getSet->fetch();
    ?>
    <!-- /.header -->
    <!-- page-header -->
    <div class="page-header" style="background:url('<?=$gs['Venue']; ?>')center no-repeat;background-size:cover;">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title" style="text-shadow:3px 3px 3px black;">Venue Packages/Services</h1>
                    </div>
                </div>
                <!-- /.page caption -->
            </div>
        </div>
        <!-- page caption -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Venue</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <div class="filter-form">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <form class="form-row" method="get">
                        <!-- venue-type -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                            <input type="text" name="search" placeholder="Search Location, Package Name" class="form-control">
                        </div>
                        <!-- /.venue-type -->
                        <!-- distance km -->
                        
                        <!-- /.distance km -->
                        <!-- price -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                            <select class="wide" name="filter">
                                <option value="0">Select Filter</option>
                                <option value="1">By Ratings</option>
                                <option value="2">By Highest Price</option>
                                <option value="3">By Lowest Price</option>
                            </select>
                        </div>
                        <!-- /.price -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 ">
                            <button class="btn btn-default btn-block" type="submit">Filter Venue</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php 
                if(isset($_GET['search']) AND isset($_GET['filter'])){
                    $s = $_GET['search'];
                    $f = $_GET['filter'];
                    if($f==0 AND $s!=""){
                        $showInfo = $con->prepare("SELECT * FROM tbl_prod WHERE prodName LIKE '%$s%' OR prodLoc LIKE '%$s%' AND prodType='1' ORDER BY rowID DESC");

                    }else if($f!=0 AND $s==""){
                        if($f==1){
                            $showInfo = $con->prepare("SELECT * FROM tbl_prod WHERE prodType='1' AND prodName LIKE '%$s%' OR prodLoc LIKE '%s%' ORDER BY prodRatings DESC");
                        }else if($f==2){
                            $showInfo = $con->prepare("SELECT * FROM tbl_prod WHERE prodType='1' AND prodName LIKE '%$s%' OR prodLoc LIKE '%s%' ORDER BY prodPrice DESC");
                        }else if($f==3){
                            $showInfo = $con->prepare("SELECT * FROM tbl_prod WHERE prodType='1' AND prodName LIKE '%$s%' OR prodLoc LIKE '%s%' ORDER BY prodPrice ASC");
                        }
                        

                    }else if($f!=0 AND $s!=""){
                        if($f==1){
                            $showInfo = $con->prepare("SELECT * FROM tbl_prod WHERE prodName LIKE '%$s%' OR prodLoc LIKE '%$s%' AND prodType='1' ORDER BY prodRatings DESC");
                        }else if($f==2){
                            $showInfo = $con->prepare("SELECT * FROM tbl_prod WHERE prodName LIKE '%$s%' OR prodLoc LIKE '%$s%' AND prodType='1' ORDER BY prodPrice DESC");
                        }else if($f==3){
                            $showInfo = $con->prepare("SELECT * FROM tbl_prod WHERE prodName LIKE '%$s%' OR prodLoc LIKE '%$s%' AND prodType='1' ORDER BY prodPrice ASC");
                        }
                        
                    }
                }else{
                    $showInfo = $con->prepare("SELECT * FROM tbl_prod WHERE prodType='1' ORDER BY rowID DESC");
                }


                $showInfo->execute();
                

                while ($si= $showInfo->fetch()) {
                    $totalRater = $con->prepare("SELECT COUNT(rowID) as totalRater FROM tbl_ratings WHERE prodID ='$si[prodID]' ");
                    $totalRater->execute();
                    $tr = $totalRater->fetch();


                    $star1 = countRates($con,1,$si['prodID']);
                    $star2 = countRates($con,2,$si['prodID']);
                    $star3 = countRates($con,3,$si['prodID']);
                    $star4 = countRates($con,4,$si['prodID']);
                    $star5 = countRates($con,5,$si['prodID']);
                    $totalRatings = $star1+$star2+$star3+$star4+$star5;
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="vendor-thumbnail">
                            <!-- Vendor thumbnail -->
                            <div class="vendor-img zoomimg" style="height:200px;">
                                <!-- Vendor img -->
                                <a href="item-info.php?prodID=<?=$si['prodID']; ?>"><img src="<?=$si['prodImg']; ?>" alt="" class="img-fluid" style="height:100%;"></a>
                            </div>
                            <!-- /.Vendor img -->
                            <div class="vendor-content">
                                <!-- Vendor Content -->
                                <h2 class="vendor-title"><a href="#" class="title"><?=$si['prodName']; ?></a></h2>
                                <p class="vendor-address"><b>Owner: </b><a href="profile.php?profID=<?=$si['vendorID'];?>"><?=$si['prodOwner']; ?></a></p>
                            </div>
                            <div class="vendor-meta">
                                <div class="vendor-meta-item vendor-meta-item-bordered">
                                    <span class="vendor-price">
                                        <?=$si['prodPrice']; ?>
                                    </span>
                                    <span class="vendor-text">Pesos</span></div>
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-guest">
                                            <?=$si['prodUnit']; ?>
                                        </span>
                                        <span class="vendor-text">Unit</span>
                                    </div>
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="rating-star">
                                            <?php if($totalRatings!=0){ echo $totalRatings/$si['prodRatings']; }else{ echo "0";} ?> of 5 <i class="fa fa-star rated"></i>
                                        </span>
                                        <span class="rating-count vendor-text">(<?=$si['prodRatings'];?>) Star Rates</span>
                                    </div>
                                </div>
                                <!-- /.Vendor Content -->
                            </div>
                            <!-- /.Vendor thumbnail -->
                        </div>
                    <?php } ?>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Suggested Catering Packages</h3>
                    </div>
                    <?php 
                    $showCat = $con->prepare("SELECT * FROM tbl_prod WHERE prodType='4' ORDER BY rowID DESC LIMIT 3");
                    $showCat->execute();
                    while ($sc= $showCat->fetch()) {
                        $totalRater = $con->prepare("SELECT COUNT(rowID) as totalRater FROM tbl_ratings WHERE prodID ='$sc[prodID]' ");
                        $totalRater->execute();
                        $tr = $totalRater->fetch();


                        $star1 = countRates($con,1,$sc['prodID']);
                        $star2 = countRates($con,2,$sc['prodID']);
                        $star3 = countRates($con,3,$sc['prodID']);
                        $star4 = countRates($con,4,$sc['prodID']);
                        $star5 = countRates($con,5,$sc['prodID']);
                        $totalRatings = $star1+$star2+$star3+$star4+$star5;
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="vendor-thumbnail">
                                <!-- Vendor thumbnail -->
                                <div class="vendor-img zoomimg" style="height:200px;">
                                    <!-- Vendor img -->
                                    <a href="item-info.php?prodID=<?=$sc['prodID']; ?>"><img src="<?=$sc['prodImg']; ?>" alt="" class="img-fluid" style="height:100%;"></a>
                                </div>
                                <!-- /.Vendor img -->
                                <div class="vendor-content">
                                    <!-- Vendor Content -->
                                    <h2 class="vendor-title"><a href="#" class="title"><?=$sc['prodName']; ?></a></h2>
                                    <p class="vendor-address"><b>Owner: </b><a href="profile.php?profID=<?=$sc['vendorID'];?>"><?=$sc['prodOwner']; ?></a></p>
                                </div>
                                <div class="vendor-meta">
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-price">
                                            <?=$sc['prodPrice']; ?>
                                        </span>
                                        <span class="vendor-text">Pesos</span></div>
                                        <div class="vendor-meta-item vendor-meta-item-bordered">
                                            <span class="vendor-guest">
                                                <?=$sc['prodUnit']; ?>
                                            </span>
                                            <span class="vendor-text">Unit</span>
                                        </div>
                                        <div class="vendor-meta-item vendor-meta-item-bordered">
                                            <span class="rating-star">
                                                <?php if($totalRatings!=0){ echo $totalRatings/$sc['prodRatings']; }else{ echo "0";} ?> of 5 <i class="fa fa-star rated"></i>
                                            </span>
                                            <span class="rating-count vendor-text">(<?=$sc['prodRatings'];?>) Star Rates</span>
                                        </div>
                                    </div>
                                    <!-- /.Vendor Content -->
                                </div>
                                <!-- /.Vendor thumbnail -->
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <?php include "include/footer.php"; ?>
        </body>


        </html>