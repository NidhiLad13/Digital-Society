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

    <title>Change password</title>
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
                <h3 class="text-uppercase">Change pass </h3>
              </div>
              <form action="#" method="post">
                <div class="form-group last mb-3">
                  <label for="password">New Password</label>
                  <input type="password" class="form-control" placeholder="Your New Password" id="password" name="txt_npass">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Confirm New Password</label>
                  <input type="password" class="form-control" placeholder="Your New Password" id="password" name="txt_rpass">
                </div>
                

                <input type="submit" value="Change Password" name="btn_sub" class="btn btn-block py-2 btn-primary">

                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
 
  <?php
    session_start();
    $msg1="";
    $msg="";
    $msg2="";
    include("conn.php");
    $id=$_SESSION['email'];
    if(isset($_POST['btn_sub']))
    {
        $np=$_POST['txt_npass'];
        $cp=$_POST['txt_rpass'];
        if($np==$cp)
        {
            $sql = "update tbl_admin set password='$np' where Email='$id'";
            if (mysqli_query($conn, $sql )) 
            {
              echo "<script>";
              echo "alert('New password updeted successfully')";
              echo "</script>";
            }
            else
            {
                echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
            }
        }
        else
        {
          echo "<script>";
          echo "alert('Confirm Password Dosen't match')";
          echo "</script>";
        }
    }
?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
