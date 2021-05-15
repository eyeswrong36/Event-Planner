<!DOCTYPE html>
<html lang="en">


<head>
    <title>My Profile</title>
    <?php include "include/header.php"; ?>
    <?php include "include/global.php"; ?>
</head>

<body>
    <?php include "include/top-header.php"; 

    ?>
    
    <div class="content">
        <div class="container" id="top">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="buttons">
                                <h3 class="section-heading">Edit Profile</h3>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <center>

                                        <img src="<?=$gi['imgProfile']; ?>" id="imgtoUp" class="rounded-circle mr-3" alt="Insert image" style="max-width:300px;">
                                        
                                    </center>
                                    <div class="custom-file mb-3 col-md-4">

                                    </div>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="custom-file mb-3 col-md-4">
                                            <input type="file" class="custom-file-input" name="cFile" id="customFile">
                                            <label class="custom-file-label" for="customFile" placeholder="choose file">Choose Image</label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-body">

                                            <?php if(isset($_SESSION['vendorID'])){ ?>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Business Name</label>
                                                    <input id="inputText3" name="BusiName" type="text" value="<?=$gi['BusinessName']; ?>" class="form-control">
                                                </div>
                                            <?php } ?>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">First Name</label>
                                                <input id="inputText3" name="Fname" type="text" value="<?=$gi['Fname']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Last Name</label>
                                                <input id="inputText3" name="Lname" type="text" value="<?=$gi['Lname']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Contact</label>
                                                <input id="inputText3" name="Contact" type="text" value="<?=$gi['Contact']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Address</label>
                                                <input id="inputText3" name="Address" type="text" value="<?=$gi['Address']; ?>" class="form-control">
                                            </div>
                                            <button class="btn btn-primary" type="button" id="change">Change Password?</button>
                                            <div id="ChangePass" style="display:none;">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Current Password</label>
                                                    <input id="inputText3" name="CurPass" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">New Password</label>
                                                    <input id="inputText3" type="text" name="NewPass" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Confirm Password</label>
                                                    <input id="inputText3" type="text" name="ConPass" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group border-top"><br>
                                                <button type="submit" class="btn btn-default"><i class="fa fa-check fa-fw"></i> Save</button>
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
    </div>

    <?php include "include/footer.php"; ?>
    <script type="text/javascript">
        $('#customFile').change(function(e){
            var img = URL.createObjectURL(event.target.files[0]);
            $('#imgtoUp').attr("src",img);
        });
        $('#change').click(function(){
            $('#ChangePass').slideDown();
        });
        $('form').submit(function(){
            var data = new FormData(this);
            var file = document.getElementById("customFile").files[0];
            data.append('imgFile',file);
            $.ajax({
                type:"POST",
                url:"ajax/ajax-change-prof.php",
                cache:false,
                data:data,
                contentType:false,
                processData:false,
                success:function(res){
                    alert(res);
                    window.location='profile.php';
                }
            });
            return false;
        });
    </script>
</body>


</html>