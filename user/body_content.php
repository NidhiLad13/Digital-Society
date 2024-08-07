<?php
session_start();
include('conn.php');
$id=$_SESSION['flat'];
if($id==null)
{
    echo "<script>";
    echo "alert('You Are Not Registerd Please Contact Your Society Secretary..')";
    echo "</script>";
}
?>
<div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
                         
                        
                         $sql="select * from tbl_society as s 
                         join tbl_wing as w 
                         on s.Society_ID=w.Society_Id
                         join tbl_flat as f
                         on w.Wing_Id=f.Wing_Id where Flat_ID=$id " ;

                         $result=mysqli_query($conn,$sql);
                        
                         while($row=mysqli_fetch_assoc($result))
                         {
                            $sid=$row['Society_Id'];
                            $_SESSION['sid']=$sid;
                           ?>
            	<img src="img/background/slide10.jpg" alt="">
            </div>
			<div class="intro-content">
				<div class="slider-content">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="slide-all-text">
								    <!-- layer 1 -->
                                    <div class="layer-1 wow fadeInUp" data-wow-delay="0.3s">
                                        <h2 class="title2" style="color:white;">Best Society Management Plan For Worldwide</h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-2 wow fadeInUp" data-wow-delay="0.5s">
                                        <p style="color:white;">We develop effective plans to move your customers behaviour.</p>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-3 wow fadeInUp" data-wow-delay="0.7s">
                                       
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Count area -->
        <?php
    $query="select * from tbl_wing where Society_Id=$sid";
       $res=mysqli_query($conn,$query);
        $rec=mysqli_num_rows($res);
        ?>
        <div class="counter-area fix bg-color area-padding-2">
            <div class="container">
                <!-- Start counter Area -->
                 <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-fun">
                            <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                            <div class="fun-text">
                                <span class="counter"><?php echo $rec ?></span>
                                <h4>Total Wings</h4>
                            </div>
                        </div>
                    </div>
                    <?php
    $q="select * from tbl_flat where wing_id in(select wing_id from tbl_wing where Society_Id=$sid)";
       $r=mysqli_query($conn,$q);
        $re=mysqli_num_rows($r);
        ?>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-fun">
                            <span class="counter-icon"><i class="flaticon-016-graph"></i></span>
                            <div class="fun-text">
                                <span class="counter"><?php echo $re;?></span>
                                <h4>Total Flat</h4>
                            </div>
                        </div>
                    </div>
                  
                    <?php
   $Sq="select * from tbl_flatmember where 
    flat_id in(select Flat_Id from tbl_flat
     where wing_id in(select wing_id from
      tbl_wing where Society_Id=$sid))";
       $Re=mysqli_query($conn,$Sq);
        $R=mysqli_num_rows($Re);
        ?>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-fun">
                            <span class="counter-icon"><i class="flaticon-043-world"></i></span>
                            <div class="fun-text"> 
                                <span class="counter"><?php echo $R; ?></span>
                                <h4>Total Member</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Count area -->
        <!-- about-area start -->
      
                           
                         
        <div class="about-area bg-color2 area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <iframe src="<?php echo $row['Google_link']?>" height="350" width="500" ></iframe>
                     </div>
                    <!-- column end -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content">
                      
                            
                          
                           <h1> <?php $name=$row['Name_of_Society']; echo $name; ?> </h1>
                          <?php } ?>                            
                            <p class="hidden-sm"></p>
                            <div class="about-details">
                                <div class="single-about">
                                    <a href="fac.php"><i class="flaticon-009-certificate"></i></a>
                                    <h3> Facility Of Your Society</h3>
                                    <div class="icon-text">
                                        
                                    </div>
                                </div>

                            </div>
                            <div class="about-details">
                                <div class="single-about">
                                    <a href="Complain.php"><i class="fa fa-comments"></i></a>
                                    <h3> Add Your Complain </h3>
                                    <div class="icon-text">
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area end -->
        <!-- Start Invest area -->
      
        <!-- End Invest area -->
        <!-- Start Support-service Area -->
        <div class="support-service-area bg-color2 area-padding-2">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Why choose us</h3>
                          
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="support-all">
                        <!-- Start About -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="support-services ">
                                <span class="top-icon"><i class="fa fa-users"></i></span>
                                <a class="support-images" href="visitor/visitor.php"><i class="fa fa-users"></i></a>
                                <div class="support-content">
                                    <h4>Visitor Managment</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <!-- Start About -->
                       <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="support-services ">
                                <span class="top-icon"><i class="fa fa-car"></i></span>
                                <a class="support-images" href="parking/parking.php"><i class="fa fa-motorcycle"></i></a>
                                <div class="support-content">
                                    <h4>Parking Managment</h4>
                                    </div>
                            </div>
                        </div>
                         </div>
                         Start services 
                        <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="support-services ">
                                <span class="top-icon"><i class="fa fa-angellist"></i></span>
                                <a class="support-images" href="event/event.php"><i class="fa fa-angellist"></i></a>
                                <div class="support-content">
                                    <h4>Event Managment</h4>
                                    </div>
                            </div>
                        
                        </div>
                         Start services
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="support-services">
                               <span class="top-icon"><i class="flaticon-042-house"></i></span>
                                <a class="support-images" href="#"><i class="fa fa-home"></i></a>
                                <div class="support-content">
                                    <h4>Club House Booking</h4>
                                 
                                </div>
                            </div>
                        </div>
                         Start services -->
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- End Support-service Area -->
        <!--Start payment-history area -->
        <div class="payment-history-area bg-color fix area-padding-2">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Society Member</h3>
                            <p></p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="deposite-content">
                            <div class="diposite-box">
                                <h3>Your Neighbours</h3>
                                <span><i class="fa fa-user"></i></span>
                                <div class="deposite-table">
                                    <table>
                                        <tr>
                                            <th>Name</th>
                                            <th>Flat N0</th>
                                            
                                        </tr>
                                        <?php
                         
                        
                         $sql="select * from tbl_flatholder as m 
                         join tbl_flat as f on m.flat_id =f.Flat_Id  
                         join tbl_wing as w on f.Wing_Id =w.Wing_Id join
                         tbl_society as s on w.Society_Id=s.Society_ID where Name_of_Society='$name'" ;
                         $result=mysqli_query($conn,$sql);
                         while($row=mysqli_fetch_assoc($result))
                         {
                           ?>
                          
                                        <tr>
                                            <td><?php echo $row['name']?></td>
                                            <td><?php echo $row['Flat_Number']?></td>
                                            <?php } ?>
                                        </tr>
                                  
                                        <?php
                         
                        
                         $sql="select * from tbl_flatmember as m 
                         join tbl_flat as f on m.flat_id =f.Flat_Id  
                         join tbl_wing as w on f.Wing_Id =w.Wing_Id join
                         tbl_society as s on w.Society_Id=s.Society_ID where Name_of_Society='$name'" ;
                         $result=mysqli_query($conn,$sql);
                         while($row=mysqli_fetch_assoc($result))
                         {
                           ?>
                          
                                        <tr>
                                            <td><?php echo $row['member_name']?></td>
                                            <td><?php echo $row['Flat_Number']?></td>
                                            <?php } ?>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End payment-history area -->
        <!-- Start Affiliate Area -->
        <div class="work-proses fix bg-color2 area-padding-2">
			<div class="container">
			    <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Latest Update</h3>
                            <p></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="work-proses-inner text-center">
							    <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-proses">
                                        <div class="proses-content">
                                            <div class="proses-icon point-orange">
                                                <span class="point-view"></span>
                                                <a href="notice_mem.php"><i class="ti-receipt"></i></a>
                                            </div>
                                            <div class="proses-text">
                                                <h4>Notice</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End column -->
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-proses">
                                        <div class="proses-content">
                                            <div class="proses-icon point-blue">
                                               <span class="point-view"></span>
                                                <a href="meeting_mem.php"><i class="fa fa-handshake-o"></i></a>
                                            </div>
                                            <div class="proses-text">
                                                <h4>Meeting</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End column -->
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-proses last-item">
                                        <div class="proses-content">
                                            <div class="proses-icon point-green">
                                               <span class="point-view"></span>
                                                <a href="cir_mem.php"><i class="ti-pencil-alt"></i></a>
                                            </div>
                                            <div class="proses-text">
                                                <h4>Circular</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End column -->
							</div>
						</div>
                    </div>
				</div>
			</div>
		</div>
        <!-- End Affiliate Area -->
        <!-- Start Overview Area -->
        <div class="overview-area bg-color fix area-padding">
            <div class="container">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-image">
                            <img src="img/about/ab.jpg" alt="">
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="overview-content">
                            <div class="overview-images">
                                <a><img src="" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="overview-text">
                            <h3> Maintainance Details</h3>
                            <ul>
                               <li><a href="#">Pay Your Maintainance Safely</a></li>
                               
                                <li><a href="#">Safe secure services for you online email account</a></li>
                                <li><a href="exe.php">View Your Society Expense </a></li>
                            </ul>
                            <a class="overview-btn" href="main_mem.php">Your Maintainance</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Overview Area -->
        <!-- Start Blog area -->
        
        <!-- End Blog area -->
        <!-- Start Subscribe area -->
       
                <!-- Start counter Area -->
              