<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
session_start();
     if (!isset($_SESSION['USR'])) header("Location: ../");
     
include('../bin/lib/Cookies.php');
     
$max_rozmiar = 1024*1024*2;
if (is_uploaded_file($_FILES['plik']['tmp_name']))
{
    if ($_FILES['plik']['size'] > $max_rozmiar) {
        echo 'B³¹d! Plik jest za du¿y!';
    } else {
        echo 'Odebrano plik. Pocz¹tkowa nazwa: '.$_FILES['plik']['name'];
        echo '<br/>';
        if (isset($_FILES['plik']['type'])) {
            echo 'Typ: '.$_FILES['plik']['type'].'<br/>';
        }
        move_uploaded_file($_FILES['plik']['tmp_name'],"../data/upload/".$_SESSION['USR'].".jpg");
    }
} else {
   //echo 'B³¹d przy przesy³aniu danych!';
}
header("Location: ../upload_photo/");
?>