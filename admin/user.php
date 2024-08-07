<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
<!-- Mirrored from www.designbudy.com/nyasa/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 May 2018 05:59:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin_user </title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <?php include_once("up_link.php");?>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
            <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
            <div id="navbar-container" class="boxed">
                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="" class="navbar-brand">
                            <i class="fa fa-cube brand-icon"></i>
                            <div class="brand-title">
                                <span class="brand-text">Nyasa</span>
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->
                    <!--Navbar Dropdown-->
                    <!--================================-->
                    <div class="navbar-content clearfix">
                        <ul class="nav navbar-top-links pull-left">
                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="tgl-menu-btn">
                                <a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Navigation toogle button-->
                            <!--Profile toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li id="profilebtn" class="hidden-xs">
                                <a href="JavaScript:void(0);"> <i class="fa fa-user fa-lg"></i> </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Profile toogle button-->
                            <!--Messages Dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-envelope fa-lg"></i> <span class="badge badge-header badge-warning">9</span> 
                                </a>
                                <!--Message dropdown menu-->
                                <div class="dropdown-menu dropdown-menu-md with-arrow">
                                    <div class="pad-all bord-btm">
                                        <div class="h4 text-muted text-thin mar-no">You have 3 messages.</div>
                                    </div>
                                    <div class="nano scrollable">
                                        <div class="nano-content">
                                            <ul class="head-list">
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <img src="img/av2.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Andy sent you a message</div>
                                                            <small class="text-muted">15 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <img src="img/av4.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Lucy sent you a message</div>
                                                            <small class="text-muted">30 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <img src="img/av3.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Jackson sent you a message</div>
                                                            <small class="text-muted">40 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <img src="img/av6.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Donna sent you a message</div>
                                                            <small class="text-muted">5 hours ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                               
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                   
                                                        <div class="media-body">
                                                            
                                                            <div class="text-nowrap">Jackson sent you a message</div>
                                                            <small class="text-muted">Yesterday</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Dropdown footer-->
                                    <div class="pad-all bord-top">
                                        <a href="#" class="btn-link text-dark box-block"> <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Messages </a>
                                    </div>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End message dropdown-->
                            <!--Notification dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-bell fa-lg"></i> <span class="badge badge-header badge-danger">5</span> </a>
                                <!--Notification dropdown menu-->
                                <div class="dropdown-menu dropdown-menu-md with-arrow">
                                    <div class="pad-all bord-btm">
                                        <div class="h4 text-muted text-thin mar-no"> Notification </div>
                                    </div>
                                    <div class="nano scrollable">
                                        <div class="nano-content">
                                            <ul class="head-list">
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-primary"> <i class="fa fa-comment fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">New comments waiting approval</div>
                                                            <small class="text-muted">15 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <span class="badge badge-success pull-right">90%</span>
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-danger"> <i class="fa fa-hdd-o fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">HDD is full</div>
                                                            <small class="text-muted">50 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-info"> <i class="fa fa-file-word-o fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Write a news article</div>
                                                            <small class="text-muted">Last Update 8 hours ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <span class="label label-danger pull-right">New</span>
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-purple"> <i class="fa fa-comment fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Comment Sorting</div>
                                                            <small class="text-muted">Last Update 8 hours ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-success"> <i class="fa fa-user fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">New User Registered</div>
                                                            <small class="text-muted">4 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Dropdown footer-->
                                    <div class="pad-all bord-top">
                                        <a href="#" class="btn-link text-dark box-block"> <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications </a>
                                    </div>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End notifications dropdown-->
                        </ul>
                        
                        <ul class="nav navbar-top-links pull-right">
                            <!--Fullscreen toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="hidden-xs" id="toggleFullscreen">
                                <a class="fa fa-expand" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                                </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Fullscreen toogle button-->
                            <!--User dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li id="dropdown-user" class="dropdown">
                            <?php
					include('conn.php');
                    $id=$_SESSION['user'];
					$sql="select * from tbl_admin where login_id='$id'";
					$res=mysqli_query($conn,$sql);
					if(mysqli_num_rows($res)>0)
					{
						while($row=mysqli_fetch_assoc($res))
						{
							?>
                   
 
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="pull-right"> <img class="img-circle img-user media-object" src="image/<?php $pic=$row['Profile_pic']; echo $pic;?>" alt="Profile Picture"> </span>
                                                        <?php 
                                                        }
                    }
                    
                    ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right with-arrow">
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="login/profile.php"> <i class="fa fa-user fa-fw"></i> Profile </a>
                                        </li>
                                        <li>
                                            <a href="#">  <i class="fa fa-envelope fa-fw"></i> Messages </a>
                                        </li>
                                        <li>
                                            <a href="#">  <i class="fa fa-gear fa-fw"></i> Settings </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user dropdown-->
                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            
                            <li class="hidden-xs">
                                <a id="demo-toggle-aside" href="#">
                                <i class="fa fa-navicon fa-lg"></i>
                                </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Navigation toogle button-->
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End Navbar Dropdown-->
                </div>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
            <div id="content-container">
                   <!-- <div id="profilebody">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="page-content">
                    
                <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-10">
                                                <?php
                                                include("conn.php");
                                                    $sql="select * from tbl_society";
                                                    $res=mysqli_query($conn,$sql);
                                                    $rec=mysqli_num_rows($res);
                                                ?>
                                                <h3 class="mar-no"> <span class="counter"><?php echo $rec?></span></h3>
                                                <p class="mar-ver-5"> No Of Society </p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fas fa-city fa-3x text-primary"  style='font-size:40px'></i> </div>
                                        </div>
                                        <div class="progress progress-striped progress-xs">
                                            <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar"> <span class="sr-only">1% Complete</span> </div>
                                        </div>
                                        <p> 4% higher than last month </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-10">
                                            <?php
                                                include("conn.php");
                                                    $sql1="select * from tbl_wing";
                                                    $res1=mysqli_query($conn,$sql1);
                                                    $rec1=mysqli_num_rows($res1);
                                                ?>
                                                <h3 class="mar-no"> <span class="counter"><?php echo $rec1?></span></h3>
                                                <p class="mar-ver-5">Number Of Wing</p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-building-o fa-3x text-danger"></i> </div>
                                        </div>
                                        <div class="progress progress-striped progress-xs">
                                            <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-danger"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <p> 4% higher than last month </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="panel widget">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-10">
                                            <?php
                                                include("conn.php");
                                                    $sql2="select * from tbl_flat";
                                                    $res2=mysqli_query($conn,$sql2);
                                                    $rec2=mysqli_num_rows($res2);
                                                ?>
                                                <h3 class="mar-no"> <span class="counter"><?php echo $rec2 ?></span></h3>
                                                <p class="mar-ver-5"> Total Flat </p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fas fa-home fa-3x text-success"></i> </div>
                                        </div>
                                        <div class="progress progress-striped progress-xs">
                                            <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-success"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <p> 4% higher than last month </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="panel widget">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-10">
                                            <?php
                                                include("conn.php");
                                                    $sqli="select * from tbl_flatmember";
                                                    $result=mysqli_query($conn,$sqli);
                                                    $record=mysqli_num_rows($result);
                                                ?>
                                                <h3 class="mar-no"> <span class="counter"><?php echo $record ?></span></h3>
                                                <p class="mar-ver-5"> Total User </p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-users fa-3x text-warning"></i> </div>
                                        </div>
                                        <div class="progress progress-striped progress-xs">
                                            <div style="width: 10%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <p> 4% higher than last month </p>
                                    </div>
                                </div>
                            </div>
                       
</div>
</div>
<div>
<div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Row selection and deletion (multiple rows)</h3>
                            </div>
                            <div id="demo-custom-toolbar" class="table-toolbar-left">
                                
                            </div>
                            <div class="panel-body">
                                <table id="demo-dt-delete" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>User Name</th>
                                            <th class="min-tablet">Email</th>
                                            <th> flat </th>
                                            <th> Contact No </th>
                                            <th> Status </th>
                                          
                                            <?php
                                                include("conn.php");
                                                    $query="Select * 
                                        from tbl_flatmember as f
                                        join tbl_flat as s 
                                        on f.flat_id=s.Flat_Id ";
                                                    $resu=mysqli_query($conn,$query);
                                                    while($row=mysqli_fetch_Assoc($resu))
                                                    {
                                                ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form method="post">
                                        <tr>
                                            <td><?php $id=$row['flat_member_id'];
                                            echo $id;
                                            ?>
                                            <td> <?php echo $row['member_name']
                                            ?></td>
                                            <td> <?php echo $row['email'] ?> </td>
                                            <td> <?php echo $row['Flat_Number'] ?> </td>
                                            <td> <?php echo $row['contact_no'] ?> </td>
                                            <td> <?php echo $row['status'] ?> </td>
                                           
                                          </td>
                                        </tr>
                                        <?php
                                                    }
                                        ?>
                                        </form>
                                    </tbody>
                               
                                <?php
                                               
                                                    $sql="select * from tbl_flatholder as f
                                                    join tbl_flat as s 
                                                    on f.flat_id=s.Flat_Id";
                                                    $res=mysqli_query($conn,$sql);
                                                    while($row=mysqli_fetch_Assoc($res))
                                                    {
                                                ?>
                                       
                                    <tbody>
                                        <form method="post">
                                        <tr>
                                            <td><?php $id=$row['flatholder_id'];
                                            echo $id;
                                            ?>
                                            <td> <?php echo $row['name']
                                            ?></td>
                                            <td> <?php echo $row['email'] ?> </td>
                                            <td> <?php echo $row['Flat_Number'] ?> </td>
                                            <td> <?php echo $row['contact_no'] ?> </td>
                                            <td> <?php echo $row['status'] ?> </td>
                                            
                                        </tr>
                                        <?php
                                                    }
                                        ?>
                                    
                                         <?php
                                               
                                               $sql1="select * from tbl_rentholder as f
                                               join tbl_flat as s 
                                               on f.flat_id=s.Flat_Id";
                                               $re=mysqli_query($conn,$sql1);
                                               while($row=mysqli_fetch_Assoc($re))
                                               {
                                           ?>
                                  
                               <tbody>
                                   <form method="post">
                                   <tr>
                                       <td><?php $id=$row['rentholder_id'];
                                       echo $id;
                                       ?>
                                       <td> <?php echo $row['name']
                                       ?></td>
                                       <td> <?php echo $row['email'] ?> </td>
                                       <td> <?php echo $row['Flat_Number'] ?> </td>
                                       <td> <?php echo $row['mobile_no'] ?> </td>
                                       <td> <?php echo $row['status'] ?> </td>
                                       
                                                      
                                     </td>
                                   </tr>
                                   <?php
                                               }
                                   ?>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                <?php include_once("nav.php");?>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
                <!--ASIDE--> 
                <!--===================================================-->
                
                <!--===================================================--> 
                <!--END ASIDE-->
                <!--RIGHT CHAT MESSANGER--> 
                <!--===================================================-->
                
                <!--END RIGHT CHAT MESSANGER--> 
                <!--===================================================-->
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <!-- Visible when footer positions are fixed -->
                <?php include_once("footer.php");?>
            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <?php include_once("down_link.php");?>
    </body>

<!-- Mirrored from www.designbudy.com/nyasa/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 May 2018 06:00:37 GMT -->
</html>
