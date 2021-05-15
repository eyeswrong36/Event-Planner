<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    <?php include "include/header.php"; ?>
    <?php include "include/global.php"; if(!isset($_GET['uID'])){ header("Location:vendor-accounts.php"); } ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
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

                            <h3 class="dashboard-page-title">Vendor Accounts</h3>
                            
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">


                        <div class="row">
                            <div class="col-md-12">
                                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                                    <thead>
                                        <tr>
                                            
                                            <td>Reasons</td>
                                            <td>Report Date</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $showReport = $con->prepare("SELECT * FROM tbl_reports WHERE Reported = '$_GET[uID] ' ORDER BY rowID DESC");
                                        $showReport->execute();
                                        while($sr=$showReport->fetch()){
                                            ?>
                                            <tr>
                                                <td><?=$sr['Reason'];?></td>
                                                <td><?=date("h:i A - M d Y",$sr['ReportDate']);?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>

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

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();

        } );
    </script>
    
</body>


</html>