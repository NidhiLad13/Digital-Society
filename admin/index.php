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
        <title> Admin Page </title>
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
                                            <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="19" role="progressbar" class="progress-bar"> <span class="sr-only">19% Complete</span> </div>
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
                                <a id="demo-dt-delete-btn" href="login/add_soc.php" class="btn btn-pink">Add Society</a>
                            </div>
                            <div class="panel-body">
                                <table id="demo-dt-delete" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Society Name</th>
                                            
                                            <th> Action </th>
                                            <?php
                                                include("conn.php");
                                                    $query="select * from tbl_society";
                                                    $resu=mysqli_query($conn,$query);
                                                    while($row=mysqli_fetch_Assoc($resu))
                                                    {
                                                ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form method="post">
                                        <tr>
                                            <td><?php $id=$row['Society_ID'];
                                            echo $id;
                                            ?>
                                            <td> <?php echo $row['Name_of_Society']
                                            ?></td>
                                          
                                            <td> <a class="btn btn-success" href="index_soc.php?sid=<?php echo $id; ?>">View Society </a>                       
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
                                            <a href="index.php">
                                            <i class="fa fa-home"></i>
                                            <span class="menu-title">Dashboard</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="index.html"><i class="fa fa-caret-right"></i> Homepage V1</a></li>
                                                <li><a href="dashboard-v2.html"><i class="fa fa-caret-right"></i> Homepage V2</a></li>
                                                <li><a href="dashboard-v3.html"><i class="fa fa-caret-right"></i> Homepage V3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="user.php">
                                            <i class="fa fa-user"></i>
                                            <span class="menu-title">User</span>
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
