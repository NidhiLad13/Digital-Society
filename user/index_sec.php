<?php
session_start();
$id=$_SESSION['flat'];
?>
<!doctype html>
<html class="no-js" lang="en">
	
<!-- Mirrored from rockstheme.com/rocks/live-resthyip/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jul 2022 13:55:49 GMT -->
<?php
include_once('up_link.php');
?>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
        <?php
        include_once('sec_header.php');
        ?>
        <!-- header end -->
        <!-- Start Slider Area -->
        <div class="intro-area">
            
        <?php
        include_once('body_content.php');
        ?>
        
          <div class="invest-area bg-color area-padding-2">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3> Some Unique Functionality </h3>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="pricing-content">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="pri_table_list">
                                <div class="top-price-inner">
                                   <h3>Staff</h3>
                                   <div class="rates">
                                        <span class="users">Add Or View Your Staff</span>
                                    </div>
                                </div>
                                
                                <div class="">
                                <a class="btn btn-primary" href="staff.php">View Staff</a>
                            </div>
</div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="pri_table_list">
                                <div class="top-price-inner">
                                  <h3>Notice</h3>
                                   <div class="rates">
                                        <span class="users">Add Or View Notice</span>
                                    </div>
                                </div>
                              
                                <div class="">
                                <a class="btn btn-primary" href="notice.php">Notice</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="pri_table_list">
                                <div class="top-price-inner">
                                  <h3>Meeting</h3>
                                  
                                   <div class="rates">
                                      <span class="users">Host Or View Meeting</span>
                                    </div>
                                </div>
                                
                                <div class="">
                                <a class="btn btn-primary" href="meeting.php">Meeting</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="pri_table_list">
                                <div class="top-price-inner">
                                  <h3>Circular</h3>
                                  
                                   <div class="rates">
                                      <span class="users">Add Or View Circular</span>
                                    </div>
                                </div>
                                
                                <div class="">
                                <a class="btn btn-primary" href="circular.php">Circular</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="pri_table_list">
                                <div class="top-price-inner">
                                  <h3>Society Member</h3>
                                  
                                   <div class="rates">
                                      <span class="users">Add Or View Society Member</span>
                                    </div>
                                </div>
                                
                                <div class="">
                                <a class="btn btn-primary" href="user.php">Member</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="pri_table_list">
                                <div class="top-price-inner">
                                  <h3>Maintainance</h3>
                                  
                                   <div class="rates">
                                      <span class="users">Maintainance</span>
                                    </div>
                                </div>
                                
                                <div class="">
                                <a class="btn btn-primary" href="maintain.php">Click</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="pri_table_list">
                                <div class="top-price-inner">
                                  <h3>Complaint</h3>
                                  
                                   <div class="rates">
                                      <span class="users">Complaint</span>
                                    </div>
                                </div>
                                
                                <div class="">
                                <a class="btn btn-primary" href="complain2.php">Click</a>
                                </div>
                            </div>
                        </div>
                     
                        
                       
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- End Subscribe area -->
        <!-- Start Footer Area -->
        <footer class="footer1">
            <?php
            include_once('footer.php');
            ?>
        </footer>
        <!-- End Footer area -->
		
		<!-- all js here -->

		<!-- jquery latest version -->
		<?php
        include_once('down_link.php');
        ?>
	</body>

<!-- Mirrored from rockstheme.com/rocks/live-resthyip/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jul 2022 13:56:34 GMT -->
</html>