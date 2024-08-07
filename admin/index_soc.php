<?php
session_start();
$id=$_GET['sid'];
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
                <div class="container">
  <div class="jumbotron">
    <h1 align="center"><?php 
            include('conn.php');
            $sql="select Name_of_Society from tbl_society where Society_ID=$id";
            $resu=mysqli_query($conn,$sql);
            $row=mysqli_fetch_Assoc($resu);
            echo $row['Name_of_Society'];
            $_SESSION['soc']=$row['Name_of_Society'];
            ?>
            </h1>      
      </div>
                    
                <div class="row">
                <div class="col-md-1 col-sm-6 col-xs-14">
</div>
                         
                           <div class="col-md-3 col-sm-6 col-xs-14">
                            <div class="panel widget">
                            <div class="panel-body">
                            <div class="row">
                            <div class="col-md-9 col-sm-9 col-xs-10" href="wing.php" > 
                                            <?php
                                                include("conn.php");
                                                    $sql2="select * from tbl_wing where Society_Id=$id";
                                                    $res2=mysqli_query($conn,$sql2);
                                                    $rec2=mysqli_num_rows($res2);
                                                ?>
                                                <h3 class="mar-no"> <span class="counter"><?php echo $rec2 ?></span></h3>
                                                <p class="mar-ver-5"> Total Wing </p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-building-o fa-3x text-success"></i> </div>
                                        </div>
                                        <div class="progress progress-striped progress-xs">
                                            <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-success"> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                        <p> 4% higher than last month </p>
                                        <a href="wing.php"> Show Wings </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-14">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-14">
                                                <?php
                                                include("conn.php");
                                                    $sql="select * from tbl_flat where wing_id in(select wing_id from tbl_wing where Society_Id=$id)";
                                                    $res=mysqli_query($conn,$sql);
                                                    $rec=mysqli_num_rows($res);
                                                ?>
                                                <h3 class="mar-no"> <span class="counter"><?php echo $rec?></span></h3>
                                                <p class="mar-ver-5"> No Of flat </p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fas fa-home fa-3x text-primary"  style='font-size:40px'></i> </div>
                                        </div>
                                        <div class="progress progress-striped progress-xs">
                                            <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar"> <span class="sr-only">1% Complete</span> </div>
                                        </div>
                                        <p> 4% higher than last month </p>
                                        <a href="flat.php"> Show Flat </a>
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
                                                    $sqli="select * from tbl_flatmember where flat_id in(select flat_id from tbl_flat where wing_id in(select wing_id from tbl_wing where Society_id=$id))";
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
                                        <a href="flat_member.php"> Show Flat Member </a>
                                    </div>
                                </div>
                            </div>
                       
</div>
</div>
<div>
<div class="panel">
    
                          <!--  <div class="panel-heading">
                                <h3 class="panel-title">Row selection and deletion (multiple rows)</h3>
                            </div>
                            <div id="demo-custom-toolbar" class="table-toolbar-left">
                                <button id="demo-dt-delete-btn" class="btn btn-pink">Delete</button>
                            </div>
                            <div class="panel-body">
                                <table id="demo-dt-delete" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Society Name</th>
                                            <th class="min-tablet">Logo</th>
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
                                            $_SESSION['id']=$id;
                                            ?>
                                            <td> <?php echo $row['Name_of_Society']
                                            ?></td>
                                            <td> <?php echo $row['Logo'] ?> </td>
                                            <td></td>
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
