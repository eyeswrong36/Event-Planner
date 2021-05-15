<!DOCTYPE html>
<html lang="en">


<head>
    <title>Create Package</title>
    <?php include "include/header.php"; ?>
    <?php include "include/global.php"; ?>
    <style type="text/css">
        .col-md-2 label{cursor:pointer;}
    </style>
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
                                <h3 class="section-heading">Create Package/Service</h3>
                            </div>
                            <div class="card">
                                <form method="post">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4"><center>
                                                <img src="http://via.placeholder.com/200x150" class="img-fluid mr-3" alt="Responsive image" id="imgtoUp">
                                                <div class="custom-file mb-3" style="margin-top:10px;">
                                                    <input type="file" class="custom-file-input" id="imgFile" name="imgFile">
                                                    <label class="custom-file-label" for="customFile" placeholder="choose file">File Input</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row border-top">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Package Name*</label>
                                                    <input name="PackageName" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Price*</label>
                                                    <input name="Price" type="number" class="form-control" placeholder="Enter Amount">
                                                </div>
                                            </div>
                                            <div class="col-md-6"><br>
                                                <div class="form-group">
                                                    <table>
                                                        <tr>
                                                            <td>Select Unit*&emsp;</td>
                                                            <td>
                                                                <select name="Unit">
                                                                    <option>Pax</option>
                                                                    <option>Day</option>
                                                                    <option>Piece</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Package Description*</label>
                                                    <textarea class="form-control" name="PackageDesc"></textarea>  
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Locations*</label>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <input type="text" name="Street" class="form-control" placeholder="House No./Street"> 
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="Barangay" class="form-control" placeholder="Barangay"> 
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="City" class="form-control" placeholder="City" required> 
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" name="Prov" class="form-control" placeholder="Province" required> 
                                                        </div>

                                                    </div>
                                                    <br>
                                                    <label>Note:If you want your service is in whole <b>City</b> or <b>Province</b> just fill out only the City and Province Field</label>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Availability*</label>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Sun" value="Sunday"> 
                                                            <label>Sunday</label><br>
                                                            <span>From</span>
                                                            <input type="time" name="SunFr" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="SunTo" class="form-control form-control-sm">
                                                        </div>
                                                        
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Mon" value="Monday"> 
                                                            <label>Monday</label>
                                                            <br>
                                                            <span>From</span>
                                                            <input type="time" name="MonFr" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="MonTo" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Tue" value="Tuesday"> 
                                                            <label>Tuesday</label>
                                                            <br>
                                                            <span>From</span>
                                                            <input type="time" name="TueFr" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="TueTo" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Wed" value="Wednesday"> 
                                                            <label>Wednesday</label>
                                                            <br>
                                                            <span>From</span>
                                                            <input type="time" name="WedFr" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="WedTo" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Thu" value="Thursday"> 
                                                            <label>Thursday</label>
                                                            <br>
                                                            <span>From</span>
                                                            <input type="time" name="ThuFr" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="ThuTo" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Fri" value="Friday"> 
                                                            <label>Friday</label>
                                                            <br>
                                                            <span>From</span>
                                                            <input type="time" name="FriFr" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="FriTo" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="col-md-2" style="margin-top:10px;">
                                                            <input type="checkbox" name="Sat" value="Saturday"> 
                                                            <label>Saturday</label>
                                                            <br>
                                                            <span>From</span>
                                                            <input type="time" name="SatFr" class="form-control form-control-sm">
                                                            <span>To</span>
                                                            <input type="time" name="SatTo" class="form-control form-control-sm">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
											<label for="inputText3" class="col-form-label">Package Type*</label>
                                            <div class="col-md-12" style="margin-top:10px;">
												<select class="custom-select mb20" name="prodType">
                                                    <option value="1">Venue</option>
                                                    <option value="2">Couture</option>
                                                    <option value="3">Photography</option>
                                                    <option value="4">Catering</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 border-top">
                                                <center><br>
                                                    <button type="submit" class="btn btn-primary"> Create Package</button>
                                                </center>
                                            </div>

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

    <?php include "include/footer.php"; ?>
    <script src="js/functions/package-form.js"></script>
</body>


</html>