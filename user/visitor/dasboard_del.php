<?php
ob_start();
include('conn.php');
//$conn=mysqli_connect("localhost","root","","db_ds");
$gid=$_GET['vid'];
echo "Hello";
    //    echo $hid;
       // echo $gid;
        $sql1="update tbl_visitorhistory set exit_time=CURRENT_TIMESTAMP where visitorhistory_id=$gid";
        mysqli_query($conn,$sql1);
        header("location:dasboard.php");
        exit();
    
?>