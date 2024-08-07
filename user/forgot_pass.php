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
		<title>Forgot password</title>
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
                                    <h4 class="login-title text-center">Forgot Password?</h4>
                                    <div class="row">
                                        <form id="contactForm" method="POST" class="log-form">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" id="name" class="form-control" placeholder="Username" name="txt_uname"required data-error="Please enter your name">
                                            </div>
                                           
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <input type="submit" name="btn_submit" class="slide-btn login-btn" value="Send Otp" name="btn_sub"/>
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
    include('conn.php');
    use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['btn_submit'])){
// getting post values
$x=$_POST['txt_uname'];
$sql2="select email from tbl_flatholder where email='$x'";
$res2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($res2)==0)
{
  echo "<script>";
  echo "alert('Invalid Mail')";
  echo "</script>";
}
else{
$otp=rand(1000,9999);
    $_SESSION['session_otp'] = $otp;
 
  
require 'vendor/autoload.php';

$mail = new PHPMailer;
$toemail=$_POST['txt_uname'];	
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'mydigitalsociety1@gmail.com';          // SMTP username
$mail->Password = 'xpwbxdfzweeigvqy'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to
$mail->setFrom('mydigitalsociety1@gmail.com', 'help team ');
$mail->addReplyTo('mydigitalsociety1@gmail.com', 'help team');
$mail->addAddress($t q oemail);   // Add a recipient
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

//$bodyContent=$otp;

//$mail->Subject =$subject;
$bodyContent = 'Dear';
$bodyContent .='<p>'.'Your Confirmation Otp For Reset Password through My digital society. :'. "</br>".$otp .'</p>';
$mail->Body = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  echo "<script>";
  echo "alert('Otp Has Been Sent..')";
  echo "</script>";
$eid=$_POST['txt_uname'];
$_SESSION['email']=$eid;
  
 $sql="insert into tbl_otp values(null,'$otp',0,'$eid','".date("Y-m-d H:i:s")."')";
 mysqli_query($conn,$sql);
$timestamp =  $_SERVER["REQUEST_TIME"];  // generate the timestamp when otp is forwarded to user email/mobile.
        $_SESSION['time'] = $timestamp; 

header("location:otp.php");
}
}
}
?>