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
                                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab-1" aria-selected="true">Vendor Registration</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- vendor title -->
                                    <div class="vendor-form-title">
                                        <h3 class="mb-2">Business Register</h3>
                                        
                                    </div>
                                    <!-- /.vendor title -->
                                    <form method="post" id="vendor-reg">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                               <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="bussinessname"></label>
                                                    <input id="bussinessname" type="text" name="BusinessName" placeholder="Bussiness Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="username"></label>
                                                    <input id="username" type="text" name="Fname" placeholder="First Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="username"></label>
                                                    <input id="username" type="text" name="Lname" placeholder="Last Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="control-label sr-only" for="name"></label>
                                                        <input id="name" type="text" name="Contact" placeholder="Contact (Ex:0912 345 6789 / (046) 123-4567)" class="form-control" required>
                                                    </div>
                                                </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                               <!-- Text input-->
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="email"></label>
                                                    <input id="email" name="Email" type="email" placeholder="Email" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                              <!-- Text input-->
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="passwordregister"></label>
                                                    <input id="passwordregister" type="password" name="Pass" placeholder="Password" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                              <!-- Text input-->
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="passwordregister"></label>
                                                    <input id="passwordregister" type="password" name="CPass" placeholder="Confirm Password" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                              <!-- Text input-->
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="passwordregister"></label>
                                                    <input id="passwordregister" type="text" name="OAdd" placeholder="Office Address" class="form-control" required>
                                                </div>
                                            </div>
                                            <!-- buttons -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="singlebutton" class="btn btn-default">Sign up</button>
                                                <button id="clearFields" type="reset" style="display:none;">reset</button>
                                            </div>
                                        </div>
                                    </form>
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