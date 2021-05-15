<!DOCTYPE html>
<html lang="en">


<head>
    <title> E-Planner: An Online Event Organizer </title>
    <?php include "include/header.php"; ?>
    <?php include "include/global.php"; ?>
</head>

<body>

    <!-- header -->
    <?php include "include/top-header.php"; 
    $getSet = $con->prepare("SELECT * FROM tbl_settings WHERE rowID =1");
    $getSet->execute() or die(print_r($getSet->errorInfo(),true));
    $gs = $getSet->fetch();

    ?>

    <!-- /.header -->
    <!-- hero-section -->
    <div class="hero-section" style="background:url(<?=$gs['Venue'];?>) center no-repeat;background-attachment:fixed;background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="">
                        <div class="text-center search-head" style="background:rgba(0,0,0,0.7);box-shadow:0px 0px 3px black;text-shadow:3px 3px 3px black;">
                            <h1 class="search-head-title">VENUES</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Browse the best event venue in different area.</p>
                        </div>
                        <!-- /.search-block -->
                        <!-- search-form -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-section" style="background:url('<?=$gs['Catering'];?>') center no-repeat;background-attachment:fixed;background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="">
                        <div class="text-center search-head" style="background:rgba(0,0,0,0.7);box-shadow:0px 0px 3px black;text-shadow:3px 3px 3px black;">
                            <h1 class="search-head-title">CATERING</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Choose your ideal package or service for catering to cater your event.</p>
                        </div>
                        <!-- /.search-block -->
                        <!-- search-form -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-section" style="background:url('<?=$gs['Couture'];?>') center no-repeat;background-attachment:fixed;background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="">
                        <div class="text-center search-head" style="background:rgba(0,0,0,0.7);box-shadow:0px 0px 3px black;text-shadow:3px 3px 3px black;">
                            <h1 class="search-head-title">COUTURE</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Find a suit that will complete your perfect outfit for the event.</p>
                        </div>
                        <!-- /.search-block -->
                        <!-- search-form -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-section" style="background:url('<?=$gs['Photo'];?>') center no-repeat;background-attachment:fixed;background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="">
                        <div class="text-center search-head" style="background:rgba(0,0,0,0.7);box-shadow:0px 0px 3px black;text-shadow:3px 3px 3px black;">
                            <h1 class="search-head-title">PHOTOGRAPHY</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Hire a photography vendor to capture the moments on your event.</p>
                        </div>
                        <!-- /.search-block -->
                        <!-- search-form -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.hero-section -->

    
    

    
    <?php include "include/footer.php"; ?>
    </body>

    </html>