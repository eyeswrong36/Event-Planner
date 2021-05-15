<!DOCTYPE html>
<html lang="en">


<head>
    <title>Admin Page</title>
    <?php include "include/header.php"; ?>
    <?php include "include/global.php"; ?>
</head>

<body class="body-bg">
    <?php include "include/dashboard-header.php"; ?>
    
    <div class="dashboard-wrapper">
        <?php include "include/dashboard-sidebar.php"; ?>
        
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-10 col-md-9 col-sm-12 col-12">
                        <div class="dashboard-page-header">

                            <h3 class="dashboard-page-title">Statistics Overview</h3>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                <div class="summary-count">6</div>
                                <p>Total User Accounts</p>
                            </div>
                                  <div class="summary-icon"><i class="fa fa-user"></i></div>

                            </div>
                              <div class="card-footer text-center"><a href="#">View All</a></div>
                           
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                <div class="summary-count">2</div>
                                <p>Total Vendor Account</p>
                            </div>
                                  <div class="summary-icon"><i class="fa fa-building"></i></div>
                            </div>
                            <div class="card-footer text-center"><a href="#">View All</a></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                <div class="summary-count">1</div>
                                <p>Total Transaction Success</p>

                            </div>
                              <div class="summary-icon"><i class="icon-004-chat"></i></div>
                            </div>
                            <div class="card-footer text-center"><a href="#">View All</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/offcanvas.js"></script>
    
</body>


</html>