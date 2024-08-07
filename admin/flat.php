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
            echo $name."'s Flats";
            //$_SESSION['soc']=$row['Name_of_Society'];
            ?>
            </h1>      
      </div>
      <div class="panel">
                           
                            <h4> Owner status: 0-Free,
1-Owner,
2-Rent
</br>
flat status :0-NormalFlat,
1-PantHouse
</br>
status : 0-Free Flat,
1-Allocate
</h4>
<div class="panel-heading">
                            <a href="add_flat.php"class="panel-title">Add Flat</a>
                           
                            </div>
                            <div id="demo-custom-toolbar" class="table-toolbar-left">
                             
                            </div>
                            <div class="panel-body">
                                <table id="demo-dt-delete" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Flat Number</th>
                                            <th> status of flat </th>
                                            <th> owner status</th>
                                            <th> Wing </th>
                                           
                                            <?php
                                                include("conn.php");
                                                    $query="select * from tbl_flat as f join tbl_wing as w
                                                    on f.Wing_Id =w.Wing_Id join
                                                    tbl_Society as s 
                                                    on s.Society_Id =w.Society_Id where name_of_society='$name'";
                                                    $resu=mysqli_query($conn,$query);
                                                    while($row=mysqli_fetch_Assoc($resu))
                                                    {
                                                ?>
                                                 <tbody>
                                        <form method="post">
                                        <tr>
                                            <td><?php $id=$row['Flat_Id'];
                                            echo $id;
                                            ?>
                                            <td> <?php echo $row['Flat_Number']
                                            ?></td>
                                            <td> <?php echo $row['Flat_Status'] ?> </td>
                                            <td> <?php echo $row['Owner_status'] ?> </td>
                                            <td> <?php echo $row['Wing_name']?> </td>
                                            
                                        </tr>
                                                <?php
                                                    }
                                                    ?>
                                        </tr>
                                    </thead>
</body>
</html>