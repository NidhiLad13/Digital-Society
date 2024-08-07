<?php
session_start();
$id=$_SESSION['user'];
include("conn.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/style.scss">
		
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt=""  class="image-1">
				<form method="post" enctype="multipart/form-data">
					<h3>Edit Your Profile</h3>
					<?php
					
					$sql="select * from tbl_admin where login_id='$id'";
					$res=mysqli_query($conn,$sql);
					if(mysqli_num_rows($res)>0)
					{
						while($row=mysqli_fetch_assoc($res))
						{
							?>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input value="<?= $row['Admin_name']?>" type="text" class="form-control" placeholder="Enter Name" name="txtN" >
							
					</div>

					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input  value="<?= $row['Email']?>"type="text" class="form-control" placeholder="your-email@gmail.com" name="txt_email">
						
					</div>
				
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input value="<?= $row['Contact_No']?>" type="number" class="form-control" placeholder="Phone no" name="txt_mn">
						
					</div>
					<div class="form-holder">
						
						
					</div>

					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input value="<?= $row['Login_id']?>"type="text" class="form-control" placeholder="your user@id" name="txt_uid">						
					</div>
					
					
					<div class="form-group first">
					Created Date<input value="<?= $row['Created_Date']?>" type="date" class="form-control" name="txt_cd">
				
                </div>
</br>
                <div class="form-group first">
                Birthdate<input value="<?= $row['Birth_Date']?>" type="date" class="form-control" name="txt_bd">
				
                </div>
				<br/>
                <div class="form-group first">
                  Gender <input type="radio" name="gender" value="male"> Male</t>
				  <?php
				  if($row['Gender']=="male")
				  {
					echo "checked";
				  }
				  ?>
				  > Male</t>
                  <input type="radio" name="gender" value="female"
				  <?php
				  if($row['Gender']=="female")
				  {
					echo "checked";
				  }
				  ?>> Female</t>
                  <input type="radio" name="gender" value="other"
				  <?php
				  if($row['Gender']=="other")
				  {
					echo "checked";
				  }?>> Other</t>  
				
			
                </div>
				<?php
			  }
			}?>
				
				<br/>
                <div class="form-group first">
                  
              </div>
				<button name="btn_sub">
				<span align="center">Register</span>
				</button>
				<div class="d-sm-flex mb-5 align-items-center">
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="/mds/admin/login/admin_login.php">Go To Login Page...</a></span> 
                </div>
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		

		<?php
			
			if(isset($_POST['btn_sub']))
			{
				$name=$_POST['txtN'];
				$mail=$_POST['txt_email'];
				$con=$_POST['txt_mn'];
				$uid=$_POST['txt_uid'];
				//$pass=$_POST['txt_pass'];
				//$cpass=$_POST['txt_rpass'];
				$cdate=$_POST['txt_cd'];
				$bdate=$_POST['txt_bd'];
				$gender=$_POST['gender'];
				//$sid=$_POST['sid'];
				
				//$tn=$_FILES['txt_file']['tmp_name'];
				//target="image/".basename($fn);
			//	move_uploaded_file($tn,$target);
				$sql="update tbl_admin set Admin_name='$name',Email='$mail',Contact_No=$con,Login_id='$uid',Created_Date='$cdate',Birth_Date='$bdate',Gender='$gender'";
				mysqli_query($conn,$sql);
				header("location:profile.php");
				echo("Record inserted Succesfully..");
				
			}
		?>

		</body>
		</html>