<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
     session_start();
     if (!isset($_SESSION['USR'])) header("Location: ../");

$crop_image = imagecreatetruecolor($_POST['w'],$_POST['h']);
$image = imagecreatefromjpeg('../data/upload/'.$_SESSION['USR'].'.jpg');
imagecopyresampled($crop_image,$image,0,0,$_POST['x'],$_POST['y'],$_POST['w'],$_POST['h'],$_POST['w'], $_POST['h']);
imagejpeg($crop_image,'../data/upload/'.$_SESSION['USR'].'crop.jpg');

?>