<!DOCTYPE html>
<html lang="en">

<head>
    <title>Event Planner - Vendor Login</title>
    <?php include "include/header.php"; ?>
</head>
<!-- vendor-form -->
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
<body class="vendor-bg-image" style="background:#ddd;">
    <!-- sign up -->
    <div class=" vendor-form">
        <div class="container">
            <div class="row ">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12  ">
                    <!-- vendor head -->
                    <div class="vendor-head">
                        <a href="index.php"><img src="images/logos/unnamed.png" alt="Wedding Vendor & Supplier Directory HTML Template "></a>
                    </div>
                    <!-- /.vendor head -->
                    <div class="st-tab">
                        <ul class="nav nav-tabs nav-justified" id="Mytabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab-1" aria-selected="true">Login as Vendor</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- vendor title -->
                                    <div class="vendor-form-title">
                                        <h3 class="mb-2"></h3>
                                        
                                    </div>
                                    <!-- /.vendor title -->
                                    <!-- vendor-login -->
                            <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="vendor-form-title">
                                        <!--vendor-title -->
                                        
                                    </div>
                                    <!--/.vendor-title -->
                                    <form method="post" id="vendor-login">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                              <!-- Text input-->
                                                <div class="form-group">
                                                    <input type="hidden" value="vendor" name="LogType">
                                                    <label class="control-label sr-only" for="username"></label>
                                                    <input id="username" type="text" name="Email" placeholder="User Name" class="form-control" required>
                                                </div>
                                            </div>
                                           <!-- Text input-->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="passwordlogin"></label>
                                                    <input id="passwordlogin" type="password" name="Pass" placeholder="Password" class="form-control" required>
                                                </div>
                                            </div>
                                            <!--buttons -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="singlebutton" class="btn btn-default">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="mt-2"> Login as User?<a href="user-login.php" class="wizard-form-small-text"> Click here</a></p>
                                </div>
                            </div>
                            <!-- /.vendor-login -->
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.vendor-form -->
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
   <script src="js/custom-script.js"></script>
   <script src="js/functions/vendor-form.js"></script>
   <script type="text/javascript">
        $('#tab-2').trigger("click");
    </script>
 
</body>


</html>