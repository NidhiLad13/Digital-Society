<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Forget password</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
                <h3 class="text-uppercase">Forget pass </h3>
              </div>
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">Email Id</label>
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="txt_uname">
                </div>

                <input type="submit" value="Send Otp" name="btn_sub" class="btn btn-block py-2 btn-primary">

                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    <?php
    include('conn.php');
    use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['btn_sub'])){
// getting post values
$x=$_POST['txt_uname'];
$sql2="select email from tbl_admin where email='$x'";
$res2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($res2)==0)
{
  echo "invalid Email";
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
$mail->addAddress($toemail);   // Add a recipient
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


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>