<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    <?php include "include/header.php"; ?>
    <?php include "include/global.php"; ?>
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

                            <h3 class="dashboard-page-title">User Accounts</h3>
                            
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
                                            <td>Full Name</td>
                                            <td>Contact</td>
                                            <td>Address</td>
                                            <td>Reports</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $showUsers = $con->prepare("SELECT * FROM tbl_vendor");
                                        $showUsers->execute();
                                        while($su=$showUsers->fetch()){
                                            ?>
                                            <tr>
                                                <td><?=ucfirst($su['Fname'])." ".ucfirst($su['Lname']);?></td>
                                                <td><?=$su['Contact'];?></td>
                                                <td><?=$su['Address'];?></td>
                                                <td><?=$su['Reports'];?></td>
                                                <?php if($su['Status']==0){ ?>
                                                    <td>
                                                        <a href="reports.php?uID=<?=$su['vendorID']; ?>" class="btn btn-primary"><i class="fa fa-file-alt fa-fw"></i> View Reports</a>
                                                        <button type="button" class="btn btn-danger" data-id="<?=$su['vendorID']; ?>" id="btn-block"><i class="fa fa-ban fa-fw"></i> Block</button></td>
                                                <?php }else if($su['Status']==1){ ?>
                                                    <td>
                                                        <a href="reports.php?uID=<?=$su['vendorID']; ?>" class="btn btn-primary"><i class="fa fa-file-alt fa-fw"></i> View Reports</a>
                                                        <button type="button" class="btn btn-danger" data-id="<?=$su['vendorID']; ?>" id="btn-block"><i class="fa fa-circle fa-fw"></i> unBlock</button></td>
                                                <?php } ?>
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

    <script type="text/javascript">

        $('#btn-block').click(function(){
           
            var accID = $(this).attr("data-id");

            $.ajax({
                type:"POST",
                url:"ajax/ajax-block.php",
                cache:false,
                data:{'uType':'vendor','ID':accID},
                success:function(res){
                    alert(res);
                        location.reload(true);
                }
            });
        });
    </script>
    
</body>


</html>