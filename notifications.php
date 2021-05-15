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
                                <h3 class="section-heading">Notifications</h3>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="list-group">
                                        <?php 
                                        if(isset($_SESSION['vendorID'])){
                                            $getTrans = $con->prepare("SELECT * FROM tbl_transaction tt JOIN tbl_prod tp ON tt.prodID = tp.prodID WHERE tt.vendorID='$_SESSION[vendorID]' AND tt.TransStatus='1' ORDER BY tt.TransDate DESC");

                                        }else if(isset($_SESSION['userID'])){
                                            $getTrans = $con->prepare("SELECT * FROM tbl_transaction tt JOIN tbl_prod tp ON tt.prodID = tp.prodID WHERE tt.userID='$_SESSION[userID]' AND tt.TransStatus='2' OR tt.TransStatus='3' ORDER BY tt.TransDate DESC");
                                        }

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
                                                            if($gt['TransStatus']==3){
                                                                echo "Rejected";
                                                            }else{
                                                                echo "Approved"; 
                                                            }
                                                            
                                                        } 
                                                        ?>

                                                    </small></p>
                                                    <small>Transaction ID: <b><?=$gt['TransID']; ?></b></small>
                                                </a>
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