<?php
include('conn.php');
session_start();
ob_start();
$id=$_SESSION['sid'];

//$fid=$_SESSION['flat'];
?>
<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from rockstheme.com/rocks/live-resthyip/investment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jul 2022 13:57:00 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>User Management</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/logo2.png">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
       <!-- Animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="css/magnific.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">

		<!-- modernizr css -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <?php
include_once('sec_header.php');
?> <!-- header end -->
         <!-- Start Bottom Header -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline">
                                <h2>User</h2>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
                <!-- Start Invest area -->
       
        <!-- End Invest area -->
        <!--Start payment-history area -->
        <div class="payment-history-area bg-color fix area-padding-2">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>User In Your Society</h3>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="deposite-content">
                            <div class="diposite-box">
                                <h3>Society Member</h3>
                                <span><a class="support-images" href="register.php"><i class="fa fa-user"></i></a></span>
                                <div class="deposite-table">
                                <table>
<thead>
    <tr>
        <th>Number</th>
        <th>User Name</th>
        <th class="min-tablet">Email</th>
        <th> flat </th>
        <th> Contact No </th>
        <th> Status </th>
        <th> Action </th>
        <?php
        echo "0 for Flat Member
        1 for Flat Holder
        -1 for Rent Holder";
           include("conn.php");
                $query="Select * 
    from tbl_flatmember  
    ";
                $resu=mysqli_query($conn,$query);
                while($row=mysqli_fetch_Assoc($resu))
                {
            ?>
    </tr>
</thead>
<tbody>
    <form method="post">
    <tr>
        <td><?php $fid=$row['flat_member_id'];
        echo $fid;
        ?>
        <td> <?php echo $row['member_name']
        ?></td>
        <td> <?php echo $row['email'] ?> </td>
        <td> <?php  $n=$row['flat_id'];
        if($n==null)
        {
            echo "No Member";
        } 
        else
        {
            echo "Member";
        }?> </td>
        <td> <?php echo $row['contact_no'] ?> </td>
        <td> <?php echo $row['status'] ?> </td>
        <td> <a class="btn btn-success" href="regi.php?fid=<?php echo $fid;?>">Add member</a>                       
      </td>
    </tr>
    <?php
                }
    ?>
    </form>
</tbody>

<?php
           echo $id;
                $sql="select * from tbl_flatholder";
                $res=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_Assoc($res))
                {
            ?>
   
<tbody>
    <form method="post">
    <tr>
        <td><?php $hid=$row['flatholder_id'];
        echo $hid;
        ?>
        <td> <?php echo $row['name']
        ?></td>
        <td> <?php echo $row['email'] ?> </td>
        <td> <?php $n=$row['flat_id'];
        if($n==null)
        {
            echo "No Member";
        } 
        else
        {
            echo "Member";
        }?> </td>
        <td> <?php echo $row['contact_no'] ?> </td>
        <td> <?php echo $row['status'] ?> </td>
        <td> <a class="btn btn-success" href="regifh.php?fhid=<?php echo $hid; ?>">Add member</a>                       
      </td>
    </tr>
    <?php
                }
    ?>

     <?php
           
           $sql1="select * from tbl_rentholder 
          ";
           $re=mysqli_query($conn,$sql1);
           while($row=mysqli_fetch_Assoc($re))
           {
       ?>

<tbody>
<form method="post">
<tr>
   <td><?php $rid=$row['rentholder_id'];
   echo $rid;
   ?>
   <td> <?php echo $row['name']
   ?></td>
   <td> <?php echo $row['email'] ?> </td>
   <td> <?php $n=$row['flat_id'];
        if($n==null)
        {
            echo "No Member";
        } 
        else
        {
            echo "Member";
        }?>  </td>
   <td> <?php echo $row['mobile_no'] ?> </td>
   <td> <?php echo $row['status'] ?> </td>
   <td> <a class="btn btn-success" href="regirh.php?rhid=<?php echo $rid; ?>">Add member</a>     
                  
 </td>
</tr>
<?php
           }
?>
    </form>
</tbody>
</table>

                                   </div> 
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
      
        <!-- End payment-history area -->
        <!-- Start Footer Area -->
        <footer class="footer1">
              <?php
            include_once('footer.php');
            ?>
        </footer>
        <!-- End Footer area -->
		
		<!-- all js here -->

		<?php
        include_once('down_link.php');
        ?>
	</body>

<!-- Mirrored from rockstheme.com/rocks/live-resthyip/investment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jul 2022 13:57:00 GMT -->
</html>