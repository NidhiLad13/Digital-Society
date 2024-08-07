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

        <div id="preloader"></div>
        <header class="header-one">
          <!-- Start top bar -->
<div class="topbar-area">
    <div class="container">
        <div class="row">
            <div class=" col-md-8 col-sm-8 col-xs-12">
                <div class="topbar-left">
                    <ul>
                        <li><a href="#"><i class="fa fa-envelope"></i> mydigitalsociety1@gmail.com</a></li>
                        <li><a href="#"><i class="fa fa-clock-o"></i> Live support</a></li>
                    </ul>  
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="topbar-right">
                    <ul>
                       
                        <li><a href="user_account.php"><img src="img/icon/login.png" alt="">My Account</a></li>
                        <li> <div class="pages"><i class="fa fa-phone" ><span> +91 </span></i></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End top bar -->
<!-- header-area start -->
<div id="sticker" class="header-area hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <!-- logo start -->
                    <div class="col-md-3 col-sm-3">
                        <div class="logo">
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll" href="index2.php">
                                <img src="img/logo/logo2.jpg" style="width:200px;height:100px;" alt="">
                            </a>
                        </div>
                        <!-- logo end -->
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="header-right-link">
                            <!-- search option end -->
                            <a href="user_regi.php" class="btn btn-primary">Add Member</a>
                        </div>
                        <!-- mainmenu start -->
                        <nav class="navbar navbar-default">
                            <div class="collapse navbar-collapse" id="navbar-example">
                                <div class="main-menu">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a class="pages" href="index2.php">Home</a>
                                           
                                        </li>
                                        <li><a href="about-us.php">About us</a></li>
                                     
                                        <li><a class="pages">Pages</a>
                                            <ul class="sub-menu">
                                                
                                                <li><a href="user_login.php">Login</a></li>
                                                <li><a href="register.php">Register</a></li>
                                            </ul>
                                        </li>
                                        </ul>
                                       
                                   
                                </div>
                            </div>
                        </nav>
                        <!-- mainmenu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header-area end -->
<!-- mobile-menu-area start -->

<!-- mobile-menu-area end -->		
            
        </header>
        <!-- header end -->
        <!-- Start Slider Area -->
        <div class="intro-area">
        <?php
        include_once('body_content.php');
        ?>
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