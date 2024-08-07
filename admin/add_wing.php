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
            echo $name;
            $sql="select Society_ID from tbl_society where Name_of_Society='$name'";
            $res=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($res);
            
            $id=$row['Society_ID'];
           
            ?>
            </h1>      
      </div>
      <div class="panel">
                            <div class="panel-heading">
                                <h3 align="center" class="panel-title">Add Wing <b> To <?php echo $name;?> </b></h3>
                            </div>
                            <div id="demo-custom-toolbar" class="table-toolbar-left">
                          
                            </div>
                            <div class="panel-body">
                                <table id="demo-dt-delete" class="table table-striped table-bordered" align="center">
                                    
                                                 
                                        <form method="post">
                                        <tr>
                                          <td> Name: </td>
                                          <td> <input type="text" name="wn" placeholder="Enter Wing Name"></td>
                                        </tr>
                                        <tr>
                                          <td> No Of Floor </td>
                                          <td> <input type="number" name="nf" placeholder="Enter FLoor Number"></td>
                                        </tr>
                                        <tr>
                                         <td>  No Of Flat </td>
                                          <td> <input type="number" name="n" placeholder="Enter Flat Number om each Floor"></td>
                                        </tr>
                                        <tr>
                                            <td>
</td>
<td> <input type="submit" name="btns">
</tr>
                  <?php
                  if(isset($_POST['btns']))
                  {
                     $name=$_POST['wn'];
                     $fl=$_POST['nf'];
                     $fla=$_POST['n'];
                     $ins="insert into tbl_wing values(null,'$name',$fl,$fla,$id)";
                     $res=mysqli_query($conn,$ins);
                     header("location:wing.php");
                  }
                  ?>                             
                                       
</table>
</body>
</html>