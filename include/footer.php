<!-- footer-section -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <!-- footer-widget -->
                <div class="footer-widget">
                    <a href="#"><img src="images/logos/eplanner.png" alt="" class="mb20"></a>
                    <p class="mb10">E-Planner mission is to bring people in the party more intimate with unforgettable experiences and exceeded satisfaction from our services presentations and decors.</p>
                </div>
            </div>
            <!-- /.footer-widget -->
            <!-- footer-widget -->
            
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            About Company
                        </h3>
                        <ul class="listnone">
                            <li><a href="#">About us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- /.footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            List you Business
                        </h3>
                        <p>Are you vendor ? List your venue and service get more from listing business.</p>
                        <a href="vendor-form.php" class="btn btn-default">List your Business</a>
                    </div>
                </div>
                <!-- /.footer-widget -->
            </div>
        </div>
    </div>
    <!-- tiny-footer-section -->
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                    <p><a href="https://www.templatespoint.net" target="_blank">Templates Point</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.tiny-footer-section -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/return-to-top.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script>
        $('.sidebar-nav-fixed a')
        // Remove links that don't actually link to anything

        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
                ) {
                // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 40
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            };
            $('.sidebar-nav-fixed a').each(function() {
                $(this).removeClass('active');
            })
            $(this).addClass('active');



        });
    </script>
    <script>
        $('[data-toggle="tooltip"]').tooltip()
    </script>
    <script>
        $('[data-toggle="popover"]').popover()
    </script>
    <script type="text/javascript">
        
    $('#logout').click(function(){
        $.ajax({
            type:"POST",
            url:"ajax/ajax-logout.php",
            success:function(){
                window.location='index.php';
            }
        });
    });
</script>
<script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/return-to-top.js"></script>
    <script type="text/javascript">
        var c = 0;
        var d = 0;
        // $('#btn-log').click(function(){
        //     if(c==0){
        //         $('#div-log').slideDown();
        //         c=1;
        //     }else{
        //         $('#div-log').slideUp();
        //         c=0;
        //     }
            
        // });

        $('#btn-reg').click(function(){
            if(d==0){
                $('#div-reg').slideDown();
                d=1;
            }else{
                $('#div-reg').slideUp();
                d=0;
            }
            
        });
    </script>