<?php
session_start();
ob_start();
$conn=mysqli_connect("localhost","root","","db_ds");

?>
    
<!DOCTYPE html>
<html lang="en">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
<!-- Mirrored from www.designbudy.com/nyasa/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 May 2018 05:59:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Visitor </title>
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
                   <!-- <div id="profilebody"!-->
                
                <!--===================================================-->
                                   
    
 

        <!--        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-10">
                                                <h3 class="mar-no"> <span class="counter"><?php echo $rec?></span></h3>
                                                <p class="mar-ver-5"> No Of Society </p>
                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fas fa-city fa-3x text-primary"  style='font-size:40px'></i> </div>
                                        </div>
                                        <div class="progress progress-striped progress-xs">
                                            <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar"> <span class="sr-only">1% Complete</span> </div>
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
</div>-->
<div>
<div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"></h3>
                            </div>
                            <div id="demo-custom-toolbar" class="table-toolbar-left">
                              <!--  <button id="demo-dt-delete-btn" class="btn btn-pink">Delete</button>-->
                            </div>
                            <div class="panel-body">
                                <table id="demo-dt-delete" class="table table-striped table-bordered">
                                <form method="post">
           
                <td>   Name : </td> 
                <td> <input type="text" Placeholder="Name Please" name="txt_vname"></td>
</tr>
<tr>
    <td>              Your Contact No : </td>
    <td><input type="text" Placeholder="Contact Number Please" name="txt_vnumber"></br></td>
</tr>
<tr>
    <td>              Your Code :</td>
    <td> <input type="text" Placeholder="Your Code Please" name="txt_vcode"></br></td>
</tr>
<tr>
<td>              Your reason :</td>
    <td> <input type="text-area" Placeholder="Your Reason Please" name="txt_vreason"></br></td>
</tr>
<tr>
    <td>              Please Enter Flat No You Want To visit :</td>
    <td> <select name="txt_vfid">
        <?php
       $sql="select * from tbl_flat";
        $res=mysqli_query($conn,$sql);

        while($row_list=mysqli_fetch_assoc($res)){  
            ?> 
         <option value="<?php echo $row_list['Flat_Id'];  ?>">
           <?php echo $row_list['Flat_Number'];?>
              </option>  
              <?php } ?>
        </select>
    </td>
</tr>
<tr>
    <td></td>
    <td> <input type="submit" value="Ok" name="btn_Submit" class="btn btn-success">
   <!-- value="<?php echo (new DateTime())->format('Y-m-d'); ?>"-->
</form>
<?php
 include('conn.php');
 use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['btn_Submit']))
{
    $name=$_POST['txt_vname'];
    $contact=$_POST['txt_vnumber'];
    $code=$_POST['txt_vcode'];
    $fid=$_POST['txt_vfid'];
    $reason=$_POST['txt_vreason'];
    $sql="insert into tbl_visitorinfo values(null,'$name','$contact','$code',null)";
    $res=mysqli_query($conn,$sql);
    $last_id = mysqli_insert_id($conn);
    $query=  "INSERT INTO tbl_visitorhistory (visitorhistory_id, visitor_code, date_nd_time,exit_time, reason, flat_id,date) VALUES (NULL, '$code', current_timestamp(), NULL, '$reason', '$fid',CURDATE())";
    $result=mysqli_query($conn,$query);


// getting post values
$sql2="select email from tbl_flatmember where flat_id='$fid'";
$res2=mysqli_query($conn,$sql2);
$row=mysqli_fetch_assoc($res2);
$email=$row['email'];
if(mysqli_num_rows($res2)==0)
{
  echo "invalid Email";
}
else{

 

require 'vendor/autoload.php';

$mail = new PHPMailer;
$toemail=$email;	
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'mydigitalsociety1@gmail.com';          // SMTP username
$mail->Password = 'xpwbxdfzweeigvqy'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to
$mail->setFrom('mydigitalsociety1@gmail.com', 'help team ');
$mail->addReplyTo('mydigitalsociety1@gmail.com', 'help team');
$mail->addAddress($toemail);   // Add a recipient
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

//$bodyContent=$otp;

//$mail->Subject =$subject;
$to_email='x';
$subject = 'Conformation For Visitor:';

$msg = "If You Know This Visitor Press The Button <a href=http://localhost/mds/user/visitor/accept.php?id=".$last_id." style='background-color:yellow;color:white;border-radius:10px'>accept</a>".
"or reject by clicking <a href=http://localhost/mds/user/visitor/reject.php?id=".$last_id." style='background-color:red;color:white;border-radius:10px'>reject</button>";
//echo $msg;
//exit();
$mail->Body=$msg;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  echo "<script>";
  echo "alert('Verification Has Been Sent..')";
  echo "</script>";


header("location:dasboard.php");
}
}
}
?>
                                   
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
                                            <a href="dasboard.php">
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
                                            <a href="eme.php">
                                            <i class="fa fa-user"></i>
                                            <span class="menu-title">Emergency</span>
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

