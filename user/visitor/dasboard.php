<?php
session_start();
ob_start();
include('conn.php');
$id="";
$conn=mysqli_connect("localhost","root","","db_ds");
$gid=$_GET['id'];
$soc=$_SESSION['sid'];
?>
    
<!DOCTYPE html>
<html lang="en">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
<!-- Mirrored from www.designbudy.com/nyasa/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 May 2018 05:59:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Visitor </title>
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
            <?php include_once("header.php");?>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
            <div id="content-container">
                   <!-- <div id="profilebody">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="page-content">
                    <form method="post">
                <input type="submit" name="btn" value="Add Visitor" class="btn btn-primary">
</form>
                <?php
                if(isset($_POST['btn']))
                {
                    header("location:visitor.php");
                    
                }
                ?>
            
                               
                                   
                                     
            </div>                         
    
 

        <!--        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-10">
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
</div>-->
<div>
<div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Current Visitor</h3>
                            </div>
                            <div id="demo-custom-toolbar" class="table-toolbar-left">
                            </div>
                            <div class="panel-body">
                                <table id="demo-dt-delete" class="table table-striped table-bordered">
                                    <thead>
                                       
                                        <tr>
                                            <th>Number</th>
                                            <th>Visitor Name</th>
                                            <th class="min-tablet">Mobile NO</th>
                                            <th> Code </th>
                                            <th> Check IN Time</th>
                                            <th> Check Out</th>
                                          
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <form method="post">
                                        <tr>
                                        <?php
                                        $sql="select * from tbl_visitorhistory as h join
                                        tbl_visitorinfo as i on
                                        h.visitor_code=i.visitor_code
                                        join tbl_flat as f
                                        on f.Flat_ID = h.flat_id 
                                        join tbl_wing as w 
                                        on w.Wing_Id=f.Wing_Id
                                        join tbl_society as s 
                                        where i.status=1 and s.Society_ID=$soc 
                                        and h.exit_time is null";
                                        $res=mysqli_query($conn,$sql);
                                        While($row=mysqli_fetch_assoc($res))
                                        {
                                            
                                        ?>
                                            <td> <?php $hid=$row['visitorhistory_id']; echo $hid?></td>
                                            <td> <?php echo $row['visitor_name']?></td>
                                            <td> <?php echo $row['mobile_no']?></td>
                                            <td> <?php echo $row['visitor_code']?></td>
                                            <td> <?php echo $row['date_nd_time']?></td>
                                            <td> <a href="dasboard_del.php?vid=<?php echo $hid?>" class="btn btn-success"><i class="fa fa-times"></i> </a></td>
                                          

                                        </tr>
                                        </form>
                                        </tbody>
                                        <?php
                                        }
                                        
                                        ?>
                                        
                                     
                                </table>
                            </div>
                        </div>                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                <div id="mainnav">
                        <!--Menu-->
                        <!--================================-->
                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">
                                    <ul id="mainnav-menu" class="list-group">
                                        <!--Category name-->
                                        <li class="list-header">Navigation</li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="today.php">
                                            <i class="fa fa-home"></i>
                                            <span class="menu-title">Today Visitor</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                           
                                        </li>
                                        <li>
                                            <a href="vi.php">
                                            <i class="fa fa-user"></i>
                                            <span class="menu-title">Visitor History</span>
                                            <i class="arrow"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--================================-->
                        <!--End menu-->
                    </div>
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
