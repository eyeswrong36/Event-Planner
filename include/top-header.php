
<!--/.header-top -->
<!-- header -->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
                <!-- header-logo -->
                <div class="header-logo">
                    <a href="index.php"><img src="images/logos/unnamed.png" ></a>
                </div>
                <!-- /.header-logo -->
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
               <!-- navigations -->
               <div id="navigation" class="">
                <ul>
                    <li><a href="index.php" title="Home">Home</a></li>
                    <li><a href="#">Vendors Category</a>
                        <ul>
                            <li><a href="venue.php" title="">Venue</a></li>
                            <li><a href="couture.php" title="">Couture</a></li>
                            <li><a href="photography.php" title="">Photography</a></li>
                            <li><a href="catering.php" title="">Catering</a></li>
                        </ul>
                    </li>
                    <li><a href="about.php">About Us</a></li>
                    <?php if(isset($_SESSION['userID'])){ 
                        $getInfo = $con->prepare("SELECT * FROM tbl_user WHERE userID = '$_SESSION[userID]' ");
                        $getInfo->execute();
                        $gi =$getInfo->fetch();
                        ?>
                        <li><a href="#" >Hello, <?=ucfirst($gi['Fname']); ?></a>
                            <ul>
                                <li><a href="profile.php">My Profile</a></li>
                                <li><a href="notifications.php">Notifications</a></li>
                                <li><a href="availedservices.php">Availed Services</a></li>
                                <li><a href="" id="logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                    <?php if(isset($_SESSION['vendorID'])){ 
                        $getInfo = $con->prepare("SELECT * FROM tbl_vendor WHERE vendorID = '$_SESSION[vendorID]' ");
                        $getInfo->execute();
                        $gi =$getInfo->fetch();
                        ?>
                        <li><a href="#" >Hello, <?=ucfirst($gi['Fname']); ?></a>
                            <ul>
                                <li><a href="profile.php">My Profile</a></li>
                                <li><a href="reservations.php">Reservations</a></li>
                                <li><a href="notifications.php">Notifications</a></li>
                                <li><a href="myservices.php">My Services</a></li>
                                <li><a href="package-form.php">Create Package/Service</a></li>
                                <li><a href="#" id="logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navigations -->
        </div>
        <div class="col-xl-3 col-lg-3 text-right col-md-4  d-none d-xl-block d-lg-block">
            <!-- header-btn -->
            <div class="header-btn">
                <?php if(isset($_SESSION['vendorID']) OR isset($_SESSION['userID'])){ 
                }else{?>
                    <div style="float:left;margin-right:15px;position:relative;box-sizing:border-box;">
                        <a href="user-login.php" id="btn-log" class="btn btn-primary btn-sm">Login</a>
                        <div class="text-left" id="div-log" style="position:absolute;top:37px;background:white;display:none;">
                            <a href="user-login.php" class="btn btn-warning" style="border-bottom:1px solid #ddd;">User</a>
                            <a href="vendor-login.php" class="btn btn-warning">Vendor</a>
                        </div>
                    </div>
                    
                    <div style="position:relative;float:left;">
                        <a href="#" id="btn-reg" class="btn btn-primary btn-sm">Register</a>
                        <div class="text-left" id="div-reg" style="position:absolute;top:37px;background:white;display:none;">
                            <a href="log-reg.php" class="btn btn-warning" style="border-bottom:1px solid #ddd;">User</a>
                            <a href="vendor-form.php" class="btn btn-warning">Vendor</a>
                        </div>
                    </div>
                    
                    
                    
                <?php } ?>

            </div>
            <!-- /.header-btn -->
        </div>
    </div>
</div>
</div> 
<!-- /.header -->


<!-- MODAL -->
<a href="#" id="btn-modal" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="display:none;">
    Launch demo modal
</a>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <p id="modal-p"></p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-secondary" data-dismiss="modal">OK</a>
            </div>
        </div>
    </div>
</div>