<?php
ob_start();
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from rockstheme.com/rocks/live-resthyip/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jul 2022 13:56:58 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Change password</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-icon css -->
		<link rel="stylesheet" href="css/themify-icons.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">

		<!-- modernizr css -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
    <style>
    body {
             background: url('img/background/slide4.jpg') center;
             background-size:cover;
         }
</style>    
		<body data-spy="scroll" data-target="#navbar-example">

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		

        <!-- Start Slider Area -->
        <div class="login-area area-padding fix">
            <div class="login-overlay"></div>
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12">
                                <div class="login-form">
                                    <h4 class="login-title text-center">Change Password</h4>
                                    <div class="row">
                                        <form id="contactForm" method="POST" class="log-form">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="password" id="name" class="form-control" placeholder="Password " name="txt_pass"required data-error="Please enter your password">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="password" id="name" class="form-control" placeholder="Confirmation Password" name="txt_rpass"required data-error="Please enter your Confirm Password">
                                            </div>
                                           
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <input type="submit" name="btn_submit" class="slide-btn login-btn" value="Change Password" name="btn_sub"/>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                                <div class="clearfix"></div>
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
        <!-- End Slider Area -->
		
		<!-- all js here -->

		<!-- jquery latest version -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Form validator js -->
		<script src="js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
	</body>

<!-- Mirrored from rockstheme.com/rocks/live-resthyip/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jul 2022 13:56:58 GMT -->
</html>
<?php
    include("conn.php");
    $id=$_SESSION['email'];
    if(isset($_POST['btn_submit']))
    {
        $np=$_POST['txt_pass'];
        $cp=$_POST['txt_rpass'];
        if($np==$cp)
        {
            $sql = "update tbl_flatholder set password='$np' where Email='$id'";
            if (mysqli_query($conn, $sql )) 
            {
              echo "<script>";
              echo "alert('New password updeted successfully')";
              echo "</script>";
            }
            else
            {
                echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
            }
        }
        else
        {
          echo "<script>";
          echo "alert('Confirm Password Dosen't match')";
          echo "</script>";
        }
    }
?>
    