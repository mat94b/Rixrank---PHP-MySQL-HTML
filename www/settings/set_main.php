<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
     session_start();
         if (!isset($_SESSION['USR'])) header("Location: ../");
         
include('../bin/lib/MySQL.php');
include('../bin/lib/Constans.php');
include('../bin/lib/Security.php');

SQL_Connect();
if(isset($_POST['pass1']))
{
       if( $_POST['pass1'] == $_POST['pass2'] )
       {

          $query = "UPDATE users SET  pass='".SecurityEncrypt($_POST['pass1'])."' WHERE nick='".$_SESSION['USR']."'";
          $result = mysql_query($query)
          or die("Query failed");
       }
}

if(isset($_POST['country']))
{
    if($_POST['country'] != "")
    {
      $VAR = 0;
      for ($i = 0 ; $i<261 ; $i++)
      {
           if( $_POST['country'] == $COUNTRY_FLAG_[$i]) $VAR = ($i+1);
      }
      $query = "UPDATE users SET  country=".$VAR." WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRC'] = $VAR;

       if($_SESSION['USRO'] != null)
       {
          mysql_query("UPDATE users SET type=1 WHERE nick='".$_SESSION['USR']."'");
          $_SESSION['USRT'] = 1;
       }
     }
}

if( isset($_POST['day']) && isset($_POST['mounth']) && isset($_POST['year']))
{
    if(checkdate($_POST['mounth'],$_POST['day'],$_POST['year']))
    {
       $NewDate = $_POST['day']."-".$_POST['mounth']."-".$_POST['year'];
       $Time = strtotime( $NewDate );
       $query = "UPDATE users SET age=FROM_UNIXTIME(".$Time.") WHERE nick='".$_SESSION['USR']."'";
       $result = mysql_query($query)
       or die("Query failed");
       $_SESSION['USRO'] = $_POST['year']."-".$_POST['mounth']."-".$_POST['day'];
       
       if($_SESSION['USRC'] != 0)
       {
          mysql_query("UPDATE users SET type=1 WHERE nick='".$_SESSION['USR']."'");
          $_SESSION['USRT'] = 1;
       }
       
    }
}

if(isset($_POST['city']))
{
   if($_POST['city'] != $_SESSION['USRCT'])
   {
      $query = "UPDATE users SET  city='".$_POST['city']."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRCT'] = $_POST['city'];
   }
}


SQL_Close();
header("Location: ../settings/");

?>