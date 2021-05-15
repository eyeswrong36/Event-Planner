<!DOCTYPE html>
<html lang="en">


<head>
    <title>Login/Register Form</title>
    <?php include "include/header.php"; ?>
</head>
<!-- couple-sign up -->

<body>
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

    <div class="couple-form">
        <div class="container">
            <div class="row ">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12  ">
                    <!-- couple-head -->
                    <div class="couple-head">
                        <a href="index.php"><img src="images/logos/unnamed.png" ></a>
                    </div>
                    <!-- /.couple-head -->
                    <!-- st-tab -->
                    <div class="st-tab">
                        <ul class="nav nav-tabs nav-justified" id="Mytabs" role="tablist">
                           
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab-2" aria-selected="false">User/Vendor Login</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            
                            <!-- /.register-form -->
                            <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                <div class="container">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

                                        <!-- login-form-->
                                        <form method="post" id="user-login">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <select class="form-control" name="LogType">
                                                            <option value="0">User</option>
                                                            <option value="1">Vendor</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        
                                                        <label class="control-label sr-only" for="username"></label>
                                                        <input id="username" type="email" name="Email" placeholder="E-mail Address" class="form-control" required>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <div class="form-group service-form-group">
                                                        <label class="control-label sr-only" for="passwordlogin"></label>
                                                        <input id="passwordlogin" type="password" name="Pass" placeholder="Password" class="form-control" required>
                                                    </div>
                                                </div>
                                                <!--  Buttons -->
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <button type="submit" name="singlebutton" class="btn btn-default">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                         
                                        <!-- /.login-form -->
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /.login-form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.couple-sign up -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jquery-ui -->
    <script src="js/jquery-ui.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/functions/log-reg.js"></script>
    <script type="text/javascript">
        $('#tab-2').trigger("click");
    </script>
</body>


</html>