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
		<title>Login</title>
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
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">-->

<!-- Latest compiled JavaScript -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>-->
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
                                    <h4 class="login-title text-center">LOGIN</h4>
                                    <div class="row">
                                        <form id="contactForm" method="POST" class="log-form"  class="was-validated">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                           <!-- <span class>(requried,at least 4 charcters)</span>-->
                                                <input type="text" id="name" class="form-control" placeholder="Username" minlength="4" name="txt_uname" required data-error="Please enter your name" requried>                                               
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="password" id="msg_subject" class="form-control" placeholder="Password"name="txt_pass" required data-error="Please enter your message subject">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="radio" name="login" value="flat"> Flat Holder
                                                <div class="col-md-6">
        </t>
                                                <input type="radio" name="login" value="rent"> Rent Holder
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="check-group flexbox">
                                                    <label class="check-box">
                                                        <input type="checkbox" class="check-box-input" checked>
                                                        <span class="remember-text">Remember me</span>
                                                    </label>

                                                    <a class="text-muted" href="forgot_pass.php">Forgot password?</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <input type="submit" id="submit" class="slide-btn login-btn" value="Login" name="btn_sub"/>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="clear"></div>
                                               
                                                <div class="sign-icon">
                                                   
                                                    <div class="acc-not">Don't have an account?  <a href="register.php">Sign up</a></div>
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
   
    include('conn.php');
    
    if(isset($_POST['btn_sub']))
    {
        $user=$_POST['txt_uname'];
        $pass=$_POST['txt_pass'];
        $b=$_POST['login'];
        $_SESSION['user']=$user;
        if (isset($b) && $b=="flat")
        {
        $sql="select * from tbl_flatholder where user_name='$user'";
        $res=mysqli_query($conn,$sql);
        $record=mysqli_num_rows($res);
        if($record==0)
        {
            echo "Invalid user name";
        }
        else
        {
            $sql1="select * from tbl_flatholder where user_name='$user'";
           
            $res1=mysqli_query($conn,$sql1);
    
            $record1=mysqli_fetch_assoc($res1);
            $reco=$record1['roletype_id'];
            $r=$record1['password'];
            $reco1=$record1['flat_id'];
            $fid=$record1['flatholder_id'];
           echo $r;
           echo $reco1;
            echo "<script>";
           echo "alert(".$reco1.")";
         echo "</script>";
            
            if($pass==$r)
            {
                if($reco==2)
                {
                    $_SESSION['flat']=$reco1;
                    $_SESSION['user']=$user;
                    $_SESSION['fhid']=$fid;
                    echo $reco1;
                header("location:index_sec.php");
                    exit();
                }
                else
                {
                    $_SESSION['flat']=$reco1;
                    echo $reco1;
                    $_SESSION['user']=$user;
                 header("location:index2.php");
                //exit();
                }
  
            }
        else{
            echo "invlaid";
        } 
        }
    }
        else
        {
        $sql2="select * from tbl_rentholder where login_id='$user'";
        
        $res3=mysqli_query($conn,$sql2);

       
        $record2=mysqli_num_rows($res3);
        if($record2==0)
        {
            echo "Invalid user name";
        }
        else{
             $sql3="select * from tbl_rentholder where login_id ='$user'";
            $res4=mysqli_query($conn,$sql3);
            $record3=mysqli_fetch_assoc($res4);
            $res5=$record3['password'];
            $reco1=$record3['flat_id'];
            $rid=$record3['rentholder_id'];
            echo $reco1;
            if($pass==$res5)
            {
                 $_SESSION['flat']=$reco1;
                $_SESSION['user']=$user;
                $_SESSION['rhid']=$rid;
               header("location:index2.php");
                exit();
  
            }
        else{
            echo "invlaid";
        } 
        }
            }
       
    }
    
?>