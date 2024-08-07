<?php
ob_start();
session_start();
$id=$_SESSION['user'];
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
                                    <?php
					include('conn.php');
					$sql="select * from tbl_flatholder where email='$id'";
					$res=mysqli_query($conn,$sql);
					if(mysqli_num_rows($res)>0)
					{
						while($row=mysqli_fetch_assoc($res))
						{
							?>
                                    <div class="row">
                                        <form id="contactForm" method="POST" class="log-form"  enctype="multipart/form-data" id="regiform">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" value="<?= $row['name']?>" name="txt_name" id="name" class="form-control" placeholder="Your Full Name" data-error="Please enter your name">
                                            </div>
                                         
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="number"  value="<?= $row['contact_no']?>" name="txt_cn" id="number" class="form-control" placeholder="Contact no" data-error="Please enter your Contact">
                                            </div> 
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="email"  value="<?= $row['email']?>" name="txt_email" id="email" class="form-control" placeholder="Your Email" data-error="Please enter your name">
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                Date Of Joining
                                                <input type="date" value="<?= $row['doj'] ?>" name="txt_doj" class="form-control" placeholder="Joining date"  data-error="Please enter date">
                                            </div>
                                            
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                            Role type id:
                                          <select name="rid" class="form-control"  >
                  <option value="">--- Select ---</option>  
                  <?php
                    $conn=mysqli_connect("localhost","root","","db_ds");
                  
                  ?>  
                  <?php  
                  $list=mysqli_query($conn,"select * from tbl_roletype order by roletype_id asc");  
              while($row_list=mysqli_fetch_assoc($list)){  
                  ?> 
               <option value="<?php echo $row_list['roletype_id'];  ?>">
    		     <?php echo $row_list['role'];?>
                    </option>  
                    <?php } ?>
              </select>
                                            </div>
                                            <?php
                        }
                    }
                    ?>
                                           
                                           
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <button type="submit" name="submit" class="slide-btn login-btn">Update Info</button>
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
           
			if(isset($_POST['submit']))
			{
				$name=$_POST['txt_name'];
                $con=$_POST['txt_cn'];
				$mail=$_POST['txt_email'];
				$doj=$_POST['txt_doj'];
                $rid=$_POST['rid'];	
               
				$sql="update tbl_flatholder set name= '$name',contact_no=$con,email='$mail',roletype_id=$rid where user_name='$id'";
                echo $sql;
				mysqli_query($conn,$sql);
                
                header("location:user_account.php");
                exit();
				echo("Record updated Succesfully..");
               
			}
		?>
