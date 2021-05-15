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
                                <h3 class="section-heading">My Current Services</h3>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="st-tab">
                                        <!-- st-tabs -->
                                        <ul class="nav nav-tabs" id="Mytabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab-1" aria-selected="true">Waiting for Approval</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab-2" aria-selected="false">Approved</a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                                <div class="list-group">
                                                    <?php 
                                                    $getTrans = $con->prepare("SELECT * FROM tbl_transaction tt JOIN tbl_prod tp ON tt.prodID = tp.prodID WHERE tt.userID='$_SESSION[userID]' AND tt.TransStatus='1' ");
                                                    $getTrans->execute() or die(print_r($getTrans->errorInfo(),true));
                                                    while ($gt = $getTrans->fetch()) {

                                                        ?>
                                                        <a href="transactioninfo.php?transID=<?=$gt['TransID']; ?>" class="list-group-item list-group-item-action flex-column align-items-start active">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <h5 class="mb-1 text-white"><?=$gt['prodName']; ?></h5>
                                                                <small><?php echo date("M d Y h:i A",$gt['TransDate']); ?></small>
                                                            </div>
                                                            <p class="mb-1">
                                                                <small>
                                                                    <?php if(isset($_SESSION['vendorID'])){ 
                                                                        echo "Requesting for Approval"; 
                                                                    }else if(isset($_SESSION['userID'])){
                                                                        echo "Waiting for Approval"; 
                                                                    } 
                                                                    ?>

                                                                </small></p>
                                                                <small>Transaction ID: <b><?=$gt['TransID']; ?></b></small>
                                                            </a>
                                                        <?php } ?>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                                    <div class="list-group">
                                                        <?php 
                                                        $getTrans = $con->prepare("SELECT * FROM tbl_transaction tt JOIN tbl_prod tp ON tt.prodID = tp.prodID WHERE tt.userID='$_SESSION[userID]' AND tt.TransStatus='2' ");
                                                        $getTrans->execute() or die(print_r($getTrans->errorInfo(),true));
                                                        while ($gt = $getTrans->fetch()) {

                                                            ?>
                                                            <a href="transactioninfo.php?transID=<?=$gt['TransID']; ?>" class="list-group-item list-group-item-action flex-column align-items-start active">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <h5 class="mb-1 text-white"><?=$gt['prodName']; ?></h5>
                                                                    <small><?php echo date("M d Y h:i A",$gt['TransDate']); ?></small>
                                                                </div>
                                                                <p class="mb-1">
                                                                    <small>
                                                                        Approved

                                                                    </small></p>
                                                                    <small>Transaction ID: <b><?=$gt['TransID']; ?></b></small>
                                                                </a>
                                                            <?php } ?>
                                                        </div>
                                                        <hr>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.st-tabs -->
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