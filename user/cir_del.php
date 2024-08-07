<?php
$cid=$_GET['id'];
       include('conn.php');


    echo $cid;
   $sql="update tbl_circular set status=1 where circular_id=$cid";
   mysqli_query($conn,$sql);
   header("location:circular.php");
   exit();

?>