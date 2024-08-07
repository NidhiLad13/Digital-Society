<?php
include('conn.php');
$edate="";
$nid="";
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
		<title> Facility Management</title>
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
?>
        <!-- header end -->
         <!-- Start Bottom Header -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline">
                                <h2>Facility</h2>
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
                            <h3> Facility</h3>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="deposite-content">
                            <div class="diposite-box">

                            
                                <div class="deposite-table">
                                
                                    <table>
                                    <form method="post">
                                        <tr>
                                            <th> Id </th>
                                            <th>Name</th>
                                            <th>Starting Date</th>
                                            <th>Expiry Date</th>
                                           
                                        </tr>
                                        <?php
                                       // include_once('conn.php');
                                        $sql="select * from tbl_facility where status=0 and Society_Id = $id" ;
                                        $result=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                           
                                           
                                        ?>
                                        <tr>
                                           <td> <?php $nid= $row['Facility_Id'];
                                           echo $nid;?> </td>
                                          <td><?php echo $row['Faclity_name'];?></td>
                                            <td><?php echo $row['starting_date'];?></td>
                                            <td><?php $edate= $row['expiry_date'];
                                            echo $edate;?></td>
                                        
                                            
                                      <?php  
                                      }
                                      $date=(new DateTime())->format('Y-m-d');
                                     
                                      if($date>$edate)
                                      {
                                          $sql="update tbl_facility set status=0 where Facility_Id='$nid'";
                                          mysqli_query($conn,$sql);    
                                      }
                                      ?>
                                        </tr>
                                       
                                          </form>
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