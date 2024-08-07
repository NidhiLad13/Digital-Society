<?php
ob_start();
session_start();
$id=$_SESSION['sid'];
echo $id;
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
                
                                    <div class="row">
                                    
                                        <form id="contactForm" method="POST" class="log-form"  enctype="multipart/form-data" id="regiform">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <br>
                                                
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <br>
                                                Title :
                                                <input type="text" name="txt_title" id="name" class="form-control" placeholder="" data-error="Please enter name">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                Description
                                                <input type="text" name="txt_dis" id="add" class="form-control" placeholder="" data-error="Please enter Address">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                Date:
                                                <input type="date" name="txt_d" class="form-control" placeholder="Joining date"  data-error="Please enter date">
        </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                Pdf:
                                                <input type="file" name="txt_filep" class="form-control"  data-error="Please enter your proof">
                                            </div>
                                            
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <button type="submit" name="submit" class="slide-btn login-btn">OKAY</button>
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
              
				$name=$_POST['txt_title'];
                $add=$_POST['txt_dis'];
                $d=$_POST['txt_d'];
                $fp=$_FILES['txt_filep']['name'];
				$tp=$_FILES['txt_filep']['tmp_name'];
                $target="image/".basename($fp);
                $id=$_SESSION['sid'];
               // $fid=$_POST['fid'];
				move_uploaded_file($tp,$target);
               
				$sql="insert into TBL_CIRCULAR  
                values(null,'$name','$add','$d','$id',0,'$fp')";
                echo $sql;
				mysqli_query($conn,$sql);
              header("location:circular.php");
            exit();
			echo("Record inserted Succesfully..");
               
                    
				
			}
		?>
