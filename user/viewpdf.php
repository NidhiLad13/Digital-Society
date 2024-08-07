<?php

//echo '<img src="image/' . $pdf . '" width="200" alt="' .  pathinfo($images, PATHINFO_FILENAME) .'" alt="img1">';

?>
<?php
/*
$file = 'dummy.pdf';
$pdf=$_GET['pdf'];
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $pdf . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');
@readfile($file);
?>
<image src="image/<?php $id=$pdf; echo $id;?>"> */
if(isset($_GET['pdf'])){
    $content = $_GET['pdf'];
    $filepath = "image/" . $content;
    header("Content-type:".$content);
    @readfile($filepath);
  }
  
  $directory = (file_exists("image/"))?"image/":die("file/directory doesn't exists");// checks directory if existing.
   //the line above is just a one-line if statement (syntax: (conditon)?code here if true : code if false; )
   if($handle = opendir($directory)){ //opens directory if existing.
     while ($file = readdir($handle)) { //assign each file with link <a> tag with GET params
       echo '<a target="_blank" href="?content=application/pdf&dir='.$directory.'">'.$file.'</a>';
  }
}
?>

