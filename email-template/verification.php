<html lang="en">
<head>
  <?php if (isset($_GET['verify'])) {
    $verify = $_GET['verify'];
    include "../include/global.php";

    //check ID
    $userID = $con->prepare("SELECT * FROM tbl_user WHERE userID = '$verify' ");
    $userID->execute();
    $uID = $userID->fetch();
    if($uID){
      $verifyAcc = $con->prepare("UPDATE tbl_user SET Status = '0' WHERE userID ='$verify' ");
      $verifyAcc->execute();
    }else{
       $verifyAcc = $con->prepare("UPDATE tbl_vendor SET Status = '0' WHERE vendorID ='$verify' ");
       $verifyAcc->execute();
    }
   

  }else{
    header("Location:../index.php");
  }
   
   ?>
  <title>Event Planner Verification Page</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <!-- Favicon icon -->
  <link rel="icon" href="../images/logos/eed.png" type="image/png">

  <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
  <div style="background: #333; height: 300px;"></div>
  <table border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
      <td>&nbsp;</td>
      <td class="container">
        <div class="content">
          <!-- START CENTERED WHITE CONTAINER -->
          <table class="main">
            <!-- START MAIN CONTENT AREA -->
            <tr>
              <td class="wrapper">
                <table border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td>
                      <a href="../index.html" class="template-logo"><img src="../images/logos/eplanner.png" alt=""></a>
                      <p class="lead">Congratulations your account has now activated!
                      </p>
                      <table border="0" cellpadding="0" cellspacing="0" class="">
                        <tbody>
                          <tr>
                            <td align="center" class="mt30 mb30">
                              <table border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td>
                                      <p class="user-text">
                                        You may now Log In! <a href="../log-reg.php">Click Here!</a>
                                      </p>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- END MAIN CONTENT AREA -->
            </table>
            <table class="help-section">
              <!-- START MAIN CONTENT AREA -->
              <!-- <tr>
                <td class="wrapper">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <h2 class="text-center mb0">Need more help?</h2>
                        <a href="#" class="support-link">We're here,ready to here</a>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr> -->
              <!-- END MAIN CONTENT AREA -->
            </table>
            <table>
              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper">
                  <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
                        <!-- <p>You received this email beacuse you just signed up for new account. If it look weird
                          <a href="#" class="default-link">view it in your browser</a></p> -->
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <!-- END MAIN CONTENT AREA -->
              </table>
              <!-- START FOOTER -->
              <div class="footer">
                <table border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="content-block">
                      <p class="text-center">© Copyright 2019. Event Planner</p>
                      </td>
                    </tr>
                  </table>
                </div>
                <!-- END FOOTER -->
                <!-- END CENTERED WHITE CONTAINER -->
              </div>
            </td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      </body>


      <!-- Mirrored from jituchauhan.com/real-wed/realwed/email-template/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Oct 2018 10:48:26 GMT -->
      </html>