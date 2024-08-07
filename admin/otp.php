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

    <title>OTP</title>
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
                <h3 class="text-uppercase">Confirm Your OTP</h3>
              </div>
              <form action="#" method="post">
                <div class="form-group first">
                <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                                   <!-- <input class="m-2 text-center form-control rounded" type="text" id="first"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="text" id="second"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="text" id="third"
                                        maxlength="1" />
                                    <input class="m-2 text-center form-control rounded" type="text" id="fourth"
                                        maxlength="1" />-->
                                        <input class="m-2 text-center form-control rounded" type="text" name="otp" required>
                                </div>
                </div>
                <div class="form-group last mb-3">
                  
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Resend OTP</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                </div>

                <input type="submit" value="Confirm" name="btn_sub" class="btn btn-block py-2 btn-primary">

                
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
  <?php
  session_start();
  if(isset($_POST['btn_sub']))
  {
  $otp = $_POST['otp'];  //receives the otp entered by the user
  $timestamp =  $_SERVER["REQUEST_TIME"];  // record the current time stamp 
  if(($timestamp - $_SESSION['time']) > 300 )  // 300 refers to 300 seconds
  {
    include("conn.php");
    $sql="update tbl_otp set exp_otp=1 where created_otp = $otp";
    $res=mysqli_query($conn,$sql);
    echo ("expired");
    
    //  echo json_encode(array("type"=>"error", "message"=>"OTP expired. Pls. try again."));
  }
  else{
      if ($otp == $_SESSION['session_otp']) 
      {
          unset($_SESSION['session_otp']);
         echo("success");
          //echo json_encode(array("type"=>"success", "message"=>"Your Email is verified!"));
          header("location:change_pass.php");
      } 
      else {
        echo("failed");
          //echo json_encode(array("type"=>"error", "message"=>"Email verification failed"));
      }
  }
}
  ?>
    

