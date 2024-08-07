<?php
ob_start();
session_start();
$fid=$_SESSION['flat'];
echo $fid;
$cod="";

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
                                    <h4 class="login-title text-center">REGISTER Complain</h4>
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
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                Complain Type:
                                          <select name="cid" class="form-control"  >
                  <option value="">--- Select ---</option>  
                  <?php
                   include('conn.php');
                  
                  ?>  
                  <?php  
                  $list=mysqli_query($conn,"select * from tbl_complaintype");  
              while($row_list=mysqli_fetch_assoc($list)){  
                  ?> 
               <option value="<?php echo $row_list['complaintype_id'];  ?>">
    		     <?php echo $row_list['complaintype'];?>
                    </option>  
                    <?php } ?>
              </select>
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
           use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
           
          
			if(isset($_POST['submit']))
			{
                $cod=rand(1000,9999);
				$name=$_POST['txt_title'];
                $add=$_POST['txt_dis'];
                $d=$_POST['txt_d'];
                $type=$_POST['cid'];
                $fp=$_FILES['txt_filep']['name'];
				$tp=$_FILES['txt_filep']['tmp_name'];
                $target="image/".basename($fp);
				move_uploaded_file($tp,$target);
				$sql="insert into tbl_complaininfo
                (complain_id, complaintype_id, complain_code, complain_title, description, date, photo, flat_id, status)
                values(null,'$type','$cod','$name','$add','$d','$fp','$fid',1)";
                echo $sql;
                  mysqli_query($conn,$sql);
                $id = mysqli_insert_id($conn);
                $query="insert into tbl_complainstatus values(null,'$id',null,1)";
                echo $code;
               mysqli_query($conn,$query);
               header("location:complain.php");
            
			echo("Record inserted Succesfully..");
            $sql2="select email from tbl_flatmember where flat_id='$fid'";
            $res2=mysqli_query($conn,$sql2);
            $row=mysqli_fetch_assoc($res2);
            $email=$row['email'];
            if(mysqli_num_rows($res2)==0)
            {
              echo "invalid Email";
            }
            else{
            
            require 'vendor/autoload.php';

            $mail = new PHPMailer;
            $toemail=$email;	
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
            $to_email=$email;
            $subject ='Your Complain Has Been Register Succesfully..';
          
            $msg = "Your Complain Code is ".$cod." For Your future refrence..";
            //echo $msg;
            //exit();
            $mail->Body=$msg;
            
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
              echo "<script>";
              echo "alert('Email Has Been Sent..')";
              echo "</script>";
             
				
			}
            exit();
        }
    }
		?>
