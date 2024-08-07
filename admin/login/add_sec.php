<?php
session_start();
include('conn.php');
ob_start();
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

    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">-->

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
                <h3 class="text-uppercase">Add Sectretary <strong>My Digital Society</strong></h3>
              </div>
              <form  method="post" class="was-validated"  enctype="multipart/form-data">
                <div class="form-group first">
                  <label for="username">Name</label>
                  <input type="text" class="form-control" placeholder="Name" id="username" name="txtn" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="username">User name</label>
                  <input type="text" class="form-control" placeholder="User Name" id="" name="txtun" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="cn">Contact No</label>
                  <input type="text" class="form-control" placeholder="Contact No" id="" name="txtcn" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" placeholder="Email" id="" name="txte" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password" id="" name="txtp" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="flat">flat</label>
                  <select  name="fid" class="form-control">
                  <option value="">--- Select ---</option>  
                  
                  <?php  
                  $list=mysqli_query($conn,"select * from tbl_flat as f
                   join tbl_wing as w 
                  on f.Wing_id=w.Wing_id order by f.Flat_Id asc");  
              while($row_list=mysqli_fetch_assoc($list)){  
                  ?> 
               <option value="<?php echo $row_list['Flat_Id'];  ?>">
    		     <?php echo $row_list['Flat_Number'];?>
                    </option>  
                    <?php } ?>
              </select>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="doj">Date Of Joinning</label>
                  <input type="date" class="form-control" placeholder="" id="" name="txtdoj" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="photo">Photo</label>
                  <input type="file" class="form-control" placeholder="" id="" name="txtph" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="proof">Proof</label>
                  <input type="file" class="form-control" placeholder="" id="" name="txtp" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
              

                <input type="submit" value="Submit" name="btn_sub" class="btn btn-block py-2 btn-primary">

                
                
            
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
  <?php
   
   
    include('conn.php');
    if(isset($_POST['btn_sub']))
    {
        $name=$_POST['txtn'];
        $un=$_POST['txtun'];
        $cn=$_POST['txtcn'];
       
        $email=$_POST['txte'];
        $pass=$_POST['txtp'];
        $fid=$_POST['fid'];
        $doj=$_POST['txtdoj'];
        $logo=$_FILES['txtph']['name'];
        $tp=$_FILES['txtph']['tmp_name'];
        $target="image/".basename($logo);
        $logo1=$_FILES['txtp']['name'];
        $tp1=$_FILES['txtp']['tmp_name'];
        $target1="image/".basename($logo1);
        $sql="insert into tbl_flatholder values(null,'$name','$un',$cn,'$email','$pass',$fid,'$doj',2,'$logo','$logo1',-1)";
        echo $sql;
        $res=mysqli_query($conn,$sql);
        header("location:/mds/admin/sec.php");
        exit();
      
    }
?>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>