<?php
session_start();
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
		<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">-->

<!-- Latest compiled JavaScript 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>-->
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt=""  class="image-1">
				<form method="post" enctype="multipart/form-data">
					<h3>New Account?</h3>
					<?php
					include('conn.php');
					$sql="select * from tbl_admin where email='$id'";
					$res=mysqli_query($conn,$sql);
					if(mysqli_num_rows($res)>0)
					{
						while($row=mysqli_fetch_assoc($res))
						{
							?>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Enter Name" name="txt_name" required>	
							
					</div>

					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="your-email@gmail.com" name="txt_email" requried>
						
					</div>
				
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="number" class="form-control" placeholder="Phone no" name="txt_mn" requried>
						
					</div>
					<div class="form-holder">
						
						<input class="form-control" type="file" name="txt_file" requried>
						
					</div>

					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="your user@id" name="txt_uid" requried>
						
					</div>
					<div class="form-holder">
					<span class="lnr lnr-lock"></span>	
						<input type="password" class="form-control" placeholder="Password" name="txt_pass" requried>
					</div>
					<div class="form-holder">
					<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Confirm Password"  name="txt_rpass" requried>
						
					</div>
					<div class="form-group first">
					Created Date<input type="date" class="form-control" name="txt_cd" requried>
				
                </div>
</br>
                <div class="form-group first">
                Birthdate <input type="date" class="form-control" name="txt_bd" requried>
				
                </div>
				<br/>
                <div class="form-group first">
                  Gender <input type="radio" name="gender" value="male"> Male</t>
                  <input type="radio" name="gender" value="female"> Female</t>
                  <input type="radio" name="gender" value="other"> Other</t>  
				
                </div>
				<?php
			  }
			}?>
				
				<br/>
                <div class="form-group first">
                  Society name:  <select name="sid">
                  <option value="">--- Select ---</option>  
                  <?php
                    $conn=mysqli_connect("localhost","root","","db_ds");
                  
                  ?>  
                  <?php  
                  $list=mysqli_query($conn,"select * from tbl_society order by society_id asc");  
              while($row_list=mysqli_fetch_assoc($list)){  
                  ?> 
               <option value="<?php echo $row_list['Society_ID'];  ?>">
    		     <?php echo $row_list['Name_of_Society'];?>
                    </option>  
                    <?php } ?>

            </select>
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
			include("conn.php");
			if(isset($_POST['btn_sub']))
			{
				$name=$_POST['txt_name'];
				$mail=$_POST['txt_email'];
				$con=$_POST['txt_mn'];
				$uid=$_POST['txt_uid'];
				$pass=$_POST['txt_pass'];
				$cpass=$_POST['txt_rpass'];
				$cdate=$_POST['txt_cd'];
				$bdate=$_POST['txt_bd'];
				$gender=$_POST['gender'];
				$sid=$_POST['sid'];
				$fn=$_FILES['txt_file']['name'];
				$tn=$_FILES['txt_file']['tmp_name'];
				$target="image/".basename($fn);
				move_uploaded_file($tn,$target);
				$sql="insert into tbl_admin values(null,'$name','$mail',$con,'$fn','$uid','$pass','$cdate','$bdate','$gender',$sid)";
				mysqli_query($conn,$sql);
				echo "<script>";
                echo "alert('Record Inserted Successfully..')";
        		echo "</script>";
				header("location:admin_login.php");
				
			}
		?>

	</body>
</html>