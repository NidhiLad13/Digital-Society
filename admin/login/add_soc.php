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

    <title> Admin</title>
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
                <h3 class="text-uppercase">Add Society <strong>My Digital Society</strong></h3>
              </div>
              <form  method="post" class="was-validated" enctype="multipart/form-data" >
                <div class="form-group first">
                  <label for="username">Name Of Society</label>
                  <input type="text" class="form-control" placeholder="name of society" id="username" name="txtSn" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Adress</label>
                  <input type="text" class="form-control" placeholder="Society Address" id="" name="txtA" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Registration Date</label>
                  <input type="Date" class="form-control" placeholder="" id="" name="txtD" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Logo</label>
                  <input type="file" class="form-control" placeholder="" id="" name="txtL" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Logical Address</label>
                  <input type="text" class="form-control" placeholder="" id="" name="txtLa" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Google Link</label>
                  <input type="text" class="form-control" placeholder="" id="" name="txtGa" required>
                  <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                
              

                <input type="submit" value="Add Society" name="btn_sub" class="btn btn-block py-2 btn-primary">

             
                
            
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
        $name=$_POST['txtSn'];
        $add=$_POST['txtA'];
        $date=$_POST['txtD'];
       // $logo=$_POST['txtL'];
       $logo=$_FILES['txtL']['name'];
       $tp=$_FILES['txtL']['tmp_name'];
       $target="image/".basename($logo);
       move_uploaded_file($tp,$target);
        $add_lo=$_POST['txtLa'];
        $gl=$_POST['txtGa'];
        $sql="insert into tbl_society values(null,'$name','$add','$date','$logo','$add_lo','$gl')";
        $res=mysqli_query($conn,$sql);
        header("location:/mds/admin/index.php");
      
    }
?>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>