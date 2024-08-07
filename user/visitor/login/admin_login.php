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
                <h3 class="text-uppercase">Login to <strong>My Digital Society</strong></h3>
              </div>
              <form  method="post" class="was-validated">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username" name="txt_uname" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Your Password" id="password" name="txt_pass" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="forgot_pass.php" class="forgot-pass">Forgot Password</a></span> 
                </div>

                <input type="submit" value="Log In" name="btn_sub" class="btn btn-block py-2 btn-primary">

                <span class="text-center my-3 d-block">or</span>
                
                
                <div class="">
                <a href="#" class="btn btn-block py-2 btn-facebook">
                  <span class="icon-facebook mr-3"></span> Login with facebook
                </a>
                <a href="#" class="btn btn-block py-2 btn-google"><span class="icon-google mr-3"></span> Login with Google</a>
                </div>
                <div class="d-sm-flex mb-5 align-items-center">
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="admin_regi.php">New User Click Here....</a></span> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
  <?php
    $msg1="";
    $msg="";
    $msg2="";
   
    include('conn.php');
    if(isset($_POST['btn_sub']))
    {
        $user=$_POST['txt_uname'];
        $pass=$_POST['txt_pass'];
        $_SESSION['user']=$user;
        $sql="select * from tbl_admin where login_id='$user'";
        $res=mysqli_query($conn,$sql);
        $record=mysqli_num_rows($res);
        if($record==0)
        { 
          echo "<script>";
          echo alert('Invalid user name');
          echo "</script>";
        }
        else
        {
            $sql1="select password from tbl_admin where login_id='$user'";
            $res1=mysqli_query($conn,$sql1);
            $record1=mysqli_fetch_assoc($res1);
            $res2=$record1['password'];
            if($pass==$res2)
            {
         
         
           
            //  $_SESSION['name']=$name;
              $_SESSION['user']=$user;
              header("location:/mds/admin/index_login.php");
                
                echo "<script>";
                echo alert('Login success');
                echo "</script>";
            }
            else
            {
              echo "<script>";
                echo "alert('invalid password')";
        echo "</script>";
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