<?php
$nid=$_GET['id'];
       include('conn.php');


    echo $nid;
    $sql="update tbl_notice set status=1 where notice_id=$nid";
    mysqli_query($conn,$sql);
    header("location:notice.php");
    exit();

?>