<!DOCTYPE html>
<html lang="en">


<head>
    <title>My Profile</title>
    <?php include "include/header.php"; ?>
    <?php include "include/global.php"; ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
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
                                <h3 class="section-heading">Reserved Packages</h3>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#addReservatin" style="display:none;"><i class="fa fa-plus fa-fw" ></i> Add Package Reservation</button>
                                    <hr>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <td>Transaction ID</td>
                                                <td>Date</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $showReserved = $con->prepare("SELECT * FROM tbl_reserved WHERE vendorID='$_SESSION[vendorID]' ORDER BY rowID DESC");
                                        $showReserved->execute();
                                        while ($sr = $showReserved->fetch()) {
                                        ?>
                                        
                                            <tr>
                                                <td><?=$sr['TransID'];?></td>
                                                <td><?=date("M d Y - D",strtotime($sr['EventDate']));?></td>
                                                <td><a href="transactioninfo.php?transID=<?=$sr['TransID'];?>" class="btn btn-success"><i class="fa fa-eye fa-fw"></i> View Transaction</a></td>
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
    </div>

    <?php include "include/footer.php"; ?>
    
    <div class="modal fade" id="addReservatin" tabindex="-1" role="dialog" aria-labelledby="addReservatin" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <form method="post" id="reservedForm">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Transaction ID</label>

                            <input type="text" name="ReTrans" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Date of event</label>
                            <input type="date" name="ReDate" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" name="ReLoc" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="ReDesc"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-check fa-fw"></i> Reserve</button>
                        <a href="#" id="canCel" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script src="js/functions/reservations.js"></script>
</body>


</html>