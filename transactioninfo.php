<!DOCTYPE html>
<html lang="en">


<head>
    <title>My Profile</title>
    <?php include "include/header.php"; ?>
    <?php include "include/global.php"; ?>
</head>

<body>
    <?php include "include/top-header.php"; ?>
    <?php 
    if(!isset($_GET['transID'])){
        include "error-404.html"; die();
    }else{
        $transID = $_GET['transID'];
        $getInfo = $con->prepare("SELECT * FROM tbl_transaction WHERE TransID = '$transID' ");
        $getInfo->execute();
        $gi = $getInfo->fetch();
        if(!$gi){
            include "error-404.html"; die();
        }else{
            //get vendor Info
            $vendorInfo = $con->prepare("SELECT * FROM tbl_vendor WHERE vendorID='$gi[vendorID]' ");
            $vendorInfo->execute();
            $vi = $vendorInfo->fetch();

            //get user Info
            $userInfo = $con->prepare("SELECT * FROM tbl_user WHERE userID='$gi[userID]' ");
            $userInfo->execute();
            $ui = $userInfo->fetch();

            //get prod Info
            $prodInfo = $con->prepare("SELECT * FROM tbl_prod WHERE prodID='$gi[prodID]' ");
            $prodInfo->execute();
            $pi = $prodInfo->fetch();


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
                                <h3 class="section-heading">Transaction ID : <b id="tID"><?=$gi['TransID']; ?></b> <label>
                                    <?php if($gi['TransStatus']=="2"){echo "(Approved)"; } ?></label></h3>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Vendor Info</h3>
                                        <hr>
                                        <table width="100%">
                                            <tr>
                                                <td>Vendor Name</td>
                                                <td style="text-align:right;"><?=ucfirst($vi['Fname'])." ".ucfirst($vi['Lname']); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Contact</td>
                                                <td style="text-align:right;"><?=$vi['Contact']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>E-mail Address</td>
                                                <td style="text-align:right;"><?=$vi['Email']; ?></td>
                                            </tr>
                                        </table>
                                        <hr>
                                        <h3 class="card-title">Service Info</h3>
                                        <hr>
                                        <table width="100%">
                                            <tr>
                                                <td>Package Name</td>
                                                <td style="text-align:right;"><?=$pi['prodName']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Price/Unit</td>
                                                <td style="text-align:right;"><?=$pi['prodPrice']."/".$pi['prodUnit'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Product Description</td>
                                                <td style="text-align:right;"><?=$pi['prodDesc'];?></td>
                                            </tr>
                                            <tr style="border-top:1px solid #ddd;border-bottom:1px solid #ddd;">
                                                <td>Picked Days</td>
                                                <td style="text-align:right;">
                                                    <?php 
                                                    $days = json_decode($gi['SchedDays']);
                                                    foreach ($days as $key => $value) {
                                                        echo $value."<br>";
                                                    }
                                                    ?>

                                                </td>
                                            </tr>
                                        </table>
                                        <hr>
                                        <h3 class="card-title">User Info</h3>
                                        <hr>
                                        <table width="100%">
                                            <tr>
                                                <td>Buyer Name</td>
                                                <td style="text-align:right;"><?=ucfirst($ui['Fname'])." ".ucfirst($ui['Lname']); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td style="text-align:right;"><?=$ui['Address']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Contact</td>
                                                <td style="text-align:right;"><?=$ui['Contact']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>E-mail Address</td>
                                                <td style="text-align:right;" id="uEmail"><?=$ui['Email']; ?></td>
                                            </tr>
                                        </table>
                                        <div class="row">
                                            <div class="col-md-12 border-top">
                                                <center>
                                                    <br>
                                                    <?php if(isset($_SESSION['vendorID'])){ 
                                                        if($gi['TransStatus']=="1"){
                                                            ?>
                                                            <button class="btn btn-success" id="appContract"> Approve this Contract</button>
                                                            <button class="btn btn-danger" id="rejContract"> Reject this Contract</button>
                                                        <?php }else{ ?>

                                                        <?php } ?>
                                                    <?php }else if(isset($_SESSION['userID'])){ 
                                                        if($gi['TransStatus']=="1"){
                                                            ?>
                                                            <button class="btn btn-danger" id="canContract"> Cancel this Contract</button>
                                                        <?php }else{ ?>

                                                        <?php  }
                                                    } ?>
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
        <script src="js/functions/transaction.js"></script>
    </body>


    </html>