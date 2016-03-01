<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
     session_start();
         if (!isset($_SESSION['USR'])) header("Location: ../");

include('../bin/lib/MySQL.php');

SQL_Connect();

if(isset($_POST['language']))
{
   if($_POST['language'] != $_SESSION['USRSL'])
   {
      if($_POST['language'] == "English") $Lang = 1;
      if($_POST['language'] == "Polish") $Lang = 2;
      $query = "UPDATE users SET  slanguage=".$Lang." WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRSL'] = $Lang;
   }
}

SQL_Close();
header("Location: ../settings/");

?>