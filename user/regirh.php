<?php
$id=$_GET['rhid'];
session_start();
$sid=$_SESSION['sid'];
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.designbudy.com/nyasa/default/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 May 2018 06:01:07 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Register page | Nyasa - Responsive admin template.</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="css/style.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="css/demo/jasmine.css" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="plugins/pace/pace.min.css" rel="stylesheet">
        <script src="plugins/pace/pace.min.js"></script>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="cls-container">
            <!-- REGISTRATION FORM -->
            <!--===================================================-->
            <div class="lock-wrapper">
                <div class="panel lock-box">
                    <div class="center"> <img alt="" src="img/user.png" class="img-circle"/> </div>
                    <h4> Hello User !</h4>
                    <p class="text-center">Login to Access your Account</p>
                    <div class="row">
                        <form  class="form-inline" method="post">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div id="demo-error-container"></div>
                            </div>
                            <?php
					include('conn.php');
					$sql="select * from tbl_rentholder where rentholder_id='$id'";
					$res=mysqli_query($conn,$sql);
					if(mysqli_num_rows($res)>0)
					{
						while($row=mysqli_fetch_assoc($res))
						{
							?>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left">
                                    <label for="Name" class="control-label">Full Name</label>
                                    <input id="Name" value="<?= $row['name']?>" type="text" placeholder="Enter Full Name" class="form-control" name="Name" />
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left">
                                    <label for="Email" class="control-label">Email Address</label>
                                    <input id="Email" value="<?=$row['email']?>" type="email" placeholder="Enter Email Address" class="form-control" name="email" />
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left">
                                    <label for="signupInputContact" class="control-label">Contact no</label>
                                    <input id="signupInputContact" type="text" value="<?=$row['mobile_no']?>" placeholder="" class="form-control" name="cono" />
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left">
                                <label for="signupInputFlat" class="control-label">Flat</label>
                            <select id="signupInputFlat" name="fid" class="form-control">
                  <option value="">--- Select ---</option>  
                  <?php
                    $conn=mysqli_connect("localhost","root","","db_ds");
                  
                  ?>  
                  <?php  
                  $list=mysqli_query($conn,"select * from tbl_flat as f
                  join tbl_wing as w 
                 on f.Wing_id=w.Wing_id where w.Society_Id=$sid order by f.Flat_Id asc");  
              while($row_list=mysqli_fetch_assoc($list)){  
                  ?> 
               <option value="<?php echo $row_list['Flat_Id'];  ?>">
    		     <?php echo $row_list['Flat_Number'];?>
                    </option>  
                    <?php } ?>
              </select>
              </div>
              </div>
                          <?php
                        }
                    }?>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left pad-btm">
                                    <label for="checkboxtickmark" class="form-checkbox form-icon control-label">
                                    <input id="checkboxtickmark" type="checkbox" name="agree" value="agree" >
                                    Agree with the terms and conditions 
                                    </label>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-block btn-primary" name="btn_submit" value="Update">
                          
                            
                        </form>
                    </div>
                </div>
                <!--<div class="registration"> Already registered! <a href="#"> <span class="text-primary"> Please Login Here </span> </a> </div>-->
            </div>
            <!--===================================================-->
            <!-- REGISTRATION FORM -->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="js/jquery-2.1.1.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="plugins/fast-click/fastclick.min.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="plugins/switchery/switchery.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src="js/demo/pages-register.js"></script>
    </body>

<!-- Mirrored from www.designbudy.com/nyasa/default/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 May 2018 06:01:07 GMT -->
</html>

<?php
			include("conn.php");
            
			if(isset($_POST['btn_submit']))
			{
			echo "Hello";
                $fid=$_POST['fid'];
             
				
               
				$sql="update tbl_rentholder set flat_id= '$fid' where rentholder_id=$id";
				mysqli_query($conn,$sql);
                header("location:user.php");
                exit();
				echo("Record inserted Succesfully..");
				
			}
		?>
