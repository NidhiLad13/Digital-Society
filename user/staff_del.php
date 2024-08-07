<?php
include('conn.php');
                                           $sid=$_GET['id'];
                                            $query="update tbl_staff set status=0 where staff_id='$sid'";
                                            mysqli_query($conn,$query);
                                            header("location:staff.php");
                                            ?>