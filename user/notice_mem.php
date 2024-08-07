<?php
include('conn.php');
session_start();
ob_start();
$id=$_SESSION['sid'];
$fid=$_SESSION['flat'];

//$fid=$_SESSION['flat'];
?>
<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from rockstheme.com/rocks/live-resthyip/investment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jul 2022 13:57:00 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Notice Management</title>
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
                                <h2>Notice</h2>
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
                            <h3>Current Notice</h3>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="deposite-content">
                            <div class="diposite-box">
                                <h3>Notice</h3>
                                
                                <div class="deposite-table">
                                
                                    <table>
                                    <form method="post">
                                        <tr>
                                            <th> Number </th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Date Of Creating</th>
                                            <th>Flat Number</th>
                                            <th>Pdf</th>
                                            
                                            
                                        </tr>
                                        <?php
                                        include_once('conn.php');
                                        $sql="select * from tbl_flat as n
                                        join tbl_notice as f 
                                        on n.Flat_Id=f.Flat_Id join 
                                        tbl_wing as w on n.Wing_Id=w.Wing_Id 
                                        where f.status=0 and w.Society_Id = $id and n.Flat_Id=$fid" ;
                                        $result=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                           
                                        
                                        ?>
                                        <tr>
                                           <td> <?php $nid= $row['notice_id'];
                                           echo $nid;?> </td>
                                          <td><?php echo $row['title'];?></td>
                                            <td><?php echo $row['description'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['Flat_Number'];?></td>
                                            <td> <a href="viewpdf.php?pdf=<?php echo $row['pdf'];?>">View pdf</a></td>
                                                            <?php  
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