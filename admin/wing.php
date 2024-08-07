<?php
session_start();
$name=$_SESSION['soc'];
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
    <body>
<div class="jumbotron">
    <h1 align="center"><?php 
            include('conn.php');
           // $sql="select Name_of_Society from tbl_society where Society_ID=$id";
            //$resu=mysqli_query($conn,$sql);
            //$row=mysqli_fetch_Assoc($resu);
            echo $name."'s Wings";
            //$_SESSION['soc']=$row['Name_of_Society'];
            ?>
            </h1>      
      </div>
      <div class="panel">
                            <div class="panel-heading">
                                <a href="add_wing.php"class="panel-title">Add Wing</a>
                            </div>
                            <div id="demo-custom-toolbar" class="table-toolbar-left">
                          
                            </div>
                            <div class="panel-body">
                                <table id="demo-dt-delete" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Wing Name</th>
                                            <th> No Of Floor </th>
                                            <th> No Of Flat </th>
                                           
                                            <?php
                                                include("conn.php");
                                                    $query="select * from tbl_wing where Society_Id in(select Society_Id from tbl_Society where name_of_society='$name')";
                                                    $resu=mysqli_query($conn,$query);
                                                    while($row=mysqli_fetch_Assoc($resu))
                                                    {
                                                ?>
                                                 <tbody>
                                        <form method="post">
                                        <tr>
                                            <td><?php $id=$row['Wing_Id'];
                                            echo $id;
                                            ?>
                                            <td> <?php echo $row['Wing_name']
                                            ?></td>
                                            <td> <?php echo $row['No_Of_Floors'] ?> </td>
                                            <td> <?php echo $row['No_Of_Flats'] ?> </td>
                                            
                                        </tr>
                                                <?php
                                                    }
                                                    ?>
                                        </tr>
                                    </thead>
</body>
</html>