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
        <?php include "include/dashboard-sidebar.php"; 
        $getSet = $con->prepare("SELECT * FROM tbl_settings WHERE rowID =1");
        $getSet->execute() or die(print_r($getSet->errorInfo(),true));
        $gs = $getSet->fetch();
        ?>
        
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-10 col-md-9 col-sm-12 col-12">
                        <div class="dashboard-page-header">

                            <h3 class="dashboard-page-title">Settings</h3>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary" id="bg1" style="background:url('<?=$gs['Venue']; ?>') center no-repeat;background-size:cover;">
                            <div class="card-body">
                                <div class="float-left">
                                 <h3 style="color:white;text-shadow:3px 3px 3px black;">Venue Image</h3>
                             </div>
                             <br>
                             <br>
                             <br>
                             <br>
                             <br>
                             <br>

                         </div>
                         <form method="post">
                            <input type="hidden" value="1" name="catType">
                            <input type="file" name="bgFile" style="display:none;" id="bgFile1">
                            <div class="card-footer text-center"><a href="#" id="bg-venue">Change</a> 
                            <input type="submit" value="Save" class="btn btn-success" id="save1" style="display:none;"></div>

                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card card-summary" id="bg2" style="background:url('<?=$gs['Couture']; ?>') center no-repeat;background-size:cover;">
                        <div class="card-body">
                            <div class="float-left">
                                <h3 style="color:white;text-shadow:3px 3px 3px black;">Couture Image</h3>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <form method="post">
                            <input type="hidden" value="4" name="catType">
                            <input type="file" name="bgFile" style="display:none;" id="bgFile2">
                            <div class="card-footer text-center"><a href="#" id="bg-couture">Change</a><input type="submit" value="Save" class="btn btn-success" id="save2" style="display:none;"></div>
                            
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card card-summary" id="bg3" style="background:url('<?=$gs['Catering']; ?>') center no-repeat;background-size:cover;">
                        <div class="card-body">
                            <div class="float-left">
                                <h3 style="color:white;text-shadow:3px 3px 3px black;">Catering Image</h3>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <form method="post">
                            <input type="hidden" value="2" name="catType">
                            <input type="file" name="bgFile" style="display:none;" id="bgFile3">
                            <div class="card-footer text-center"><a href="#" id="bg-catering">Change</a><input type="submit" value="Save" class="btn btn-success" id="save3" style="display:none;"></div>
                            
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card card-summary" id="bg4" style="background:url('<?=$gs['Photo']; ?>') center no-repeat;background-size:cover;">
                        <div class="card-body">
                            <div class="float-left">
                                <h3 style="color:white;text-shadow:3px 3px 3px black;">Photography Image</h3>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <form method="post">
                            <input type="hidden" value="3" name="catType">
                            <input type="file" name="bgFile" style="display:none;" id="bgFile4">
                            <div class="card-footer text-center"><a href="#" id="bg-photo">Change</a><input type="submit" value="Save" class="btn btn-success" id="save4" style="display:none;"></div>
                            
                        </form>
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
<script type="text/javascript">
    $('#bgFile1').change(function(e){
        var img = URL.createObjectURL(event.target.files[0]);
        $('#bg1').css('background-image', 'url("' + img + '")');
        $('#save1').css({'display':'inline-block'});
    });
    $('#bgFile2').change(function(e){
        var img = URL.createObjectURL(event.target.files[0]);
        $('#bg2').css('background-image', 'url("' + img + '")');
        $('#save2').css({'display':'inline-block'});
    });
    $('#bgFile3').change(function(e){
        var img = URL.createObjectURL(event.target.files[0]);
        $('#bg3').css('background-image', 'url("' + img + '")');
        $('#save3').css({'display':'inline-block'});
    });
    $('#bgFile4').change(function(e){
        var img = URL.createObjectURL(event.target.files[0]);
        $('#bg4').css('background-image', 'url("' + img + '")');
        $('#save4').css({'display':'inline-block'});
    });

    $('#bg-venue').click(function(){
        $('#bgFile1').trigger("click");

    });
    $('#bg-couture').click(function(){
        $('#bgFile2').trigger("click");
    });
    $('#bg-catering').click(function(){
        $('#bgFile3').trigger("click");
    });
    $('#bg-photo').click(function(){
        $('#bgFile4').trigger("click");
    });
    $('form').submit(function(){
        $.ajax({
            type:"POST",
            url:"ajax/ajax-change-bg.php",
            cache:false,
            data:new FormData(this),
            contentType:false,
            processData:false,
            success:function(res){
                alert(res);
                location.reload(true);
            }
        });
        return false;
    });
</script>
</body>


</html>