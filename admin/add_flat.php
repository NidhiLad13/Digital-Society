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
                                <h3 align="center" class="panel-title">Add Flat  <b> To <?php echo $name;?> </b></h3>
                            </div>
                            <div id="demo-custom-toolbar" class="table-toolbar-left">
                          
                            </div>
                            <div class="panel-body">
                                <table id="demo-dt-delete" class="table table-striped table-bordered" align="center">
                                    
                                                 
                                        <form method="post">
                                        <tr>
                                          <td> Flat Number: </td>
                                          <td> <input type="text" name="fn" placeholder="Enter Flat Number"></td>
                                        </tr>
                                        <tr>
                                          <td> Wing </td>
                                          <td>
                                         <select name="wing">
                                         <?php 
                                            $sql="select * from tbl_wing where society_id=$id";
                                            $res=mysqli_query($conn,$sql);
                                            while($rec=mysqli_fetch_assoc($res)){?>
                                            <option value="<?php echo $rec['Wing_Id'];?>" >
                                        <?php echo $rec['Wing_name']?></option>
                                        <?php
                                            }
                                            ?>
                                            </select>
                                        </td>
                                        </tr>
                                        <tr>
                                         <td> Flat Status: </td>
                                         <td>
                                          <select name="fs">
                                            <option value="0">Normal Flat</option>
                                            <option value="1">PantHouse</option>
                                            
                                            </select>
                                        </td>
                                        </tr>
                                        <tr>
                                         <td> Owner Status: </td>
                                         <td>
                                          <select name="os">
                                            <option value="0">Free</option>
                                            <option value="1">Owner</option>
                                            <option value="2">Rent</option>
                                        </select>
                                        </td>
                                        </tr>
                                        <tr>
                                         <td> Status: </td>
                                         <td>
                                          <select name="s">
                                            <option value="0">Free</option>
                                            <option value="1">Allocate</option>
                                        </select>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>
</td>
<td> <input type="submit" name="btns">
</tr>
                  <?php
                  if(isset($_POST['btns']))
                  {
                     $name=$_POST['fn'];
                     $wing=$_POST['wing'];
                     $fs=$_POST['fs'];
                     $os=$_POST['os'];
                     $s=$_POST['s'];
                     $ins="insert into tbl_flat values(null,'$name',$wing,$fs,$os,$s)";
                     $res=mysqli_query($conn,$ins);
                     header("location:flat.php");
                  }
                  ?>                             
                                       
</table>
</body>
</html>