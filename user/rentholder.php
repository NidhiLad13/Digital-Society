<?php
ob_start();
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from rockstheme.com/rocks/live-resthyip/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jul 2022 13:57:13 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Signup</title>
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
        <!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <!-- <script src="js/jquery.validate.js"></script>-->
      
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
        <script src="signup-form.js"></script> 

	</head>
    <style>
    body {
             background-image: url('img/background/slide4.jpg');
         }
</style>    
		<body data-spy="scroll" data-target="#navbar-example">

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		
          
        <!-- Start Slider Area -->
    <div class="bg-wrapper">
    <!--<img src="img/background/slide-bg2.png" alt="">-->

        <div class="login-area area-padding fix">
            <div class="login-overlay"></div>
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12">
                                <div class="login-form signup-form">
                                    <h4 class="login-title text-center">REGISTER</h4>
                                    <ul class="nav nav-pills" id="pills-tab">
                                   <div class="col-md-2"></div>     
                  <li class="active"><a href="register.php">Flat Holder</a></li>
                  <div class="col-md-3"></div>
                  <li class="active"><a href="">Rent Folder</a></li>
                                    <div class="row">
                                    
                                        <form id="contactForm" method="POST" class="log-form"  enctype="multipart/form-data" id="regiform">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <br>
                                                <input type="text" name="txt_name" id="name" class="form-control" placeholder="Your Full Name" data-error="Please enter your name">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" name="txt_uname" id="uname" class="form-control" placeholder="Your login id" data-error="Please enter your name">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="number" name="txt_cn" id="number" class="form-control" placeholder="Contact no" data-error="Please enter your Contact">
                                            </div> 
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="email" name="txt_email" id="email" class="form-control" placeholder="Your Email" data-error="Please enter your name">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="password" name="txt_pass"  id="password" class="form-control" placeholder="Password"  data-error="Please enter your message subject">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="password" name="txt_rpass" id="confirm" class="form-control" placeholder="Confirm Password"  data-error="Please enter your message subject">
                                            </div>
                                            
                                            
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="file" name="txt_file" class="form-control"  data-error="Please enter your profile">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="file" name="txt_filep" class="form-control"  data-error="Please enter your proof">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="check-group flexbox">
                                                    <label class="check-box">
                                                        <input type="checkbox" class="check-box-input" id="check" checked>
                                                        <span class="remember-text">I agree terms & conditions</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <button type="submit" name="submit" class="slide-btn login-btn">Signup</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="clear"></div>
                                                <div class="separetor text-center"><span>Or with signup</span></div>
                                                <div class="sign-icon">
                                                 
                                                    <div class="acc-not">have an account?  <a href="login.html">Login</a></div>
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

<!-- Mirrored from rockstheme.com/rocks/live-resthyip/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jul 2022 13:57:13 GMT -->
</html>
<?php
			include("conn.php");
            $msg="";
			if(isset($_POST['submit']))
			{
				$name=$_POST['txt_name'];
                $uname=$_POST['txt_uname'];
                $con=$_POST['txt_cn'];
				$mail=$_POST['txt_email'];
				$pass=$_POST['txt_pass'];
				$cpass=$_POST['txt_rpass'];
				$fn=$_FILES['txt_file']['name'];
				$tn=$_FILES['txt_file']['tmp_name'];
                $fp=$_FILES['txt_filep']['name'];
				$tp=$_FILES['txt_filep']['tmp_name'];
				$target="image/".basename($fn);
                $target="image/".basename($fp);
				move_uploaded_file($tn,$target);
                move_uploaded_file($tp,$target);
                if($pass==$cpass)
                {
				$sql="insert into tbl_rentholder values(null,null,'$name','$uname',$con,'$mail','$pass','$fn','$fp','1')";
                $ins="insert into tbl_flatmember values(null,null,'$name','$mail',$con,'$fn','$fp','0')";
                mysqli_query($conn,$ins);
				mysqli_query($conn,$sql);
                header("location:user_login.php");
                exit();
				echo("Record inserted Succesfully..");
                }
                else
                {
                    echo "Confirm Password Dose Not Match:";
                }
				
			}
		?>
