<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
     session_start();
         if (!isset($_SESSION['USR'])) header("Location: ../");

include('../bin/lib/MySQL.php');
include('../bin/lib/Security.php');

SQL_Connect();

if(isset($_POST['text']))
{
   if($_POST['text'] != $_SESSION['USRAB'])
   {
      $Text = SecurityText($_POST['text']);
      $Text = mysql_escape_string(trim($Text));
      $query = "UPDATE users SET  about='".$Text."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRAB'] = $Text;
   }

}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Skype///////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['skype']))
{
   if($_POST['skype'] != $_SESSION['USRSK'])
   {
      $query = "UPDATE users SET  skype='".mysql_escape_string($_POST['skype'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRSK'] = $_POST['skype'];
   }
}

if(isset($_POST['cskype']))
{
   if(1 != $_SESSION['USRSS'])
   {
     $query = "UPDATE users SET  skk=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSS'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSS'])
   {
     $query = "UPDATE users SET  skk=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSS'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Facebook////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['facebook']))
{
   if($_POST['facebook'] != $_SESSION['USRF'])
   {
      $query = "UPDATE users SET  fb='".mysql_escape_string($_POST['facebook'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRF'] = $_POST['facebook'];
   }
}

if(isset($_POST['cfacebook']))
{
   if(1 != $_SESSION['USRSF'])
   {
     $query = "UPDATE users SET  sfb=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSF'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSF'])
   {
     $query = "UPDATE users SET  sfb=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSF'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Extra mail//////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['extramail']))
{
   if($_POST['extramail'] != $_SESSION['USREM'])
   {
      $query = "UPDATE users SET  extramail='".mysql_escape_string($_POST['extramail'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USREM'] = $_POST['extramail'];
   }
}

if(isset($_POST['cextramail']))
{
   if(1 != $_SESSION['USRSEM'])
   {
     $query = "UPDATE users SET  sextramail=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSEM'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSEM'])
   {
     $query = "UPDATE users SET  sextramail=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSEM'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Phone///////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['phone']))
{
   if($_POST['phone'] != $_SESSION['USRPH'])
   {
      $query = "UPDATE users SET  phone='".mysql_escape_string($_POST['phone'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRPH'] = $_POST['phone'];
   }
}

if(isset($_POST['cphone']))
{
   if(1 != $_SESSION['USRSPH'])
   {
     $query = "UPDATE users SET  sphone=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSPH'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSPH'])
   {
     $query = "UPDATE users SET  sphone=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSPH'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Twitter/////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['twitter']))
{
   if($_POST['twitter'] != $_SESSION['USRTW'])
   {
      $query = "UPDATE users SET  twit='".mysql_escape_string($_POST['twitter'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRTW'] = $_POST['twitter'];
   }
}

if(isset($_POST['ctwitter']))
{
   if(1 != $_SESSION['USRSTW'])
   {
     $query = "UPDATE users SET  stwit=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSTW'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSTW'])
   {
     $query = "UPDATE users SET  stwit=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSTW'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Pinterest///////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['pinterest']))
{
   if($_POST['pinterest'] != $_SESSION['USRPR'])
   {
      $query = "UPDATE users SET  pinterest='".mysql_escape_string($_POST['pinterest'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRPR'] = $_POST['pinterest'];
   }
}

if(isset($_POST['cpinterest']))
{
   if(1 != $_SESSION['USRSPR'])
   {
     $query = "UPDATE users SET  spinterest=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSPR'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSPR'])
   {
     $query = "UPDATE users SET  spinterest=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSPR'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Myspace/////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['myspace']))
{
   if($_POST['myspace'] != $_SESSION['USRMS'])
   {
      $query = "UPDATE users SET  myspace='".mysql_escape_string($_POST['myspace'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRMS'] = $_POST['myspace'];
   }
}

if(isset($_POST['cmyspace']))
{
   if(1 != $_SESSION['USRSMP'])
   {
     $query = "UPDATE users SET  smyspace=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSMP'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSMP'])
   {
     $query = "UPDATE users SET  smyspace=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSMP'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Google plus/////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['googlep']))
{
   if($_POST['googlep'] != $_SESSION['USRGP'])
   {
      $query = "UPDATE users SET  googlep='".mysql_escape_string($_POST['googlep'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRGP'] = $_POST['googlep'];
   }
}

if(isset($_POST['cgooglep']))
{
   if(1 != $_SESSION['USRSGP'])
   {
     $query = "UPDATE users SET  sgooglep=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSGP'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSGP'])
   {
     $query = "UPDATE users SET  sgooglep=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSGP'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Devantart///////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['deviantart']))
{
   if($_POST['deviantart'] != $_SESSION['USRDA'])
   {
      $query = "UPDATE users SET  deviantart='".mysql_escape_string($_POST['deviantart'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRDA'] = $_POST['deviantart'];
   }
}

if(isset($_POST['cdeviantart']))
{
   if(1 != $_SESSION['USRSDA'])
   {
     $query = "UPDATE users SET  sdeviantart=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSDA'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSDA'])
   {
     $query = "UPDATE users SET  sdeviantart=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSDA'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Tagged//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['tagged']))
{
   if($_POST['tagged'] != $_SESSION['USRTG'])
   {
      $query = "UPDATE users SET  tagged='".mysql_escape_string($_POST['tagged'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRTG'] = $_POST['tagged'];
   }
}

if(isset($_POST['ctagged']))
{
   if(1 != $_SESSION['USRSTG'])
   {
     $query = "UPDATE users SET  stagged=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSTG'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSTG'])
   {
     $query = "UPDATE users SET  stagged=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSTG'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Linkedin///////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['linkedin']))
{
   if($_POST['linkedin'] != $_SESSION['USRNIN'])
   {
      $query = "UPDATE users SET  linkedin='".mysql_escape_string($_POST['linkedin'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRNIN'] = $_POST['linkedin'];
   }
}

if(isset($_POST['clinkedin']))
{
   if(1 != $_SESSION['USRSNIN'])
   {
     $query = "UPDATE users SET  slinkedin=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNIN'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSNIN'])
   {
     $query = "UPDATE users SET  slinkedin=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNIN'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Vcontact///////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['vcontact']))
{
   if($_POST['vcontact'] != $_SESSION['USRNVK'])
   {
      $query = "UPDATE users SET  vkontakt='".mysql_escape_string($_POST['vcontact'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRNVK'] = $_POST['vcontact'];
   }
}

if(isset($_POST['cvcontact']))
{
   if(1 != $_SESSION['USRSNVK'])
   {
     $query = "UPDATE users SET  svkontakt=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNVK'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSNVK'])
   {
     $query = "UPDATE users SET  svkontakt=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNVK'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Tencent/////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['tencent']))
{
   if($_POST['tencent'] != $_SESSION['USRNTCW'])
   {
      $query = "UPDATE users SET  tencent='".mysql_escape_string($_POST['tencent'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRNTCW'] = $_POST['tencent'];
   }
}

if(isset($_POST['ctencent']))
{
   if(1 != $_SESSION['USRSNTCW'])
   {
     $query = "UPDATE users SET  stencent=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNTCW'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSNTCW'])
   {
     $query = "UPDATE users SET  stencent=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNTCW'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Sina ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['sina']))
{
   if($_POST['sina'] != $_SESSION['USRNSW'])
   {
      $query = "UPDATE users SET  sina='".mysql_escape_string($_POST['sina'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRNSW'] = $_POST['sina'];
   }
}

if(isset($_POST['csina']))
{
   if(1 != $_SESSION['USRSNSW'])
   {
     $query = "UPDATE users SET  ssina=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNSW'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSNSW'])
   {
     $query = "UPDATE users SET  ssina=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNSW'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Pengyou/////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['pengyou']))
{
   if($_POST['pengyou'] != $_SESSION['USRNPY'])
   {
      $query = "UPDATE users SET  pengyou='".mysql_escape_string($_POST['pengyou'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRNPY'] = $_POST['pengyou'];
   }
}

if(isset($_POST['cpengyou']))
{
   if(1 != $_SESSION['USRSNPY'])
   {
     $query = "UPDATE users SET  spengyou=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNPY'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSNPY'])
   {
     $query = "UPDATE users SET  spengyou=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNPY'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Renren//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['renren']))
{
   if($_POST['renren'] != $_SESSION['USRNRR'])
   {
      $query = "UPDATE users SET  renren='".mysql_escape_string($_POST['renren'])."' WHERE nick='".$_SESSION['USR']."'";
      $result = mysql_query($query)
      or die("Query failed");
      $_SESSION['USRNRR'] = $_POST['renren'];
   }
}

if(isset($_POST['crenren']))
{
   if(1 != $_SESSION['USRSNRR'])
   {
     $query = "UPDATE users SET  srenren=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNRR'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSNRR'])
   {
     $query = "UPDATE users SET  srenren=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNRR'] = 0;
   }
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



if(isset($_POST['cactive']))
{
   if(1 != $_SESSION['USRAM'])
   {
     $query = "UPDATE users SET  saccmsg=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRAM'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRAM'])
   {
     $query = "UPDATE users SET  saccmsg=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRAM'] = 0;
   }
}



if(isset($_POST['cnewsletter']))
{
   if(1 != $_SESSION['USRSCT'])
   {
     $query = "UPDATE users SET  snewsletter=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSCT'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSCT'])
   {
     $query = "UPDATE users SET  snewsletter=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSCT'] = 0;
   }
}



if(isset($_POST['cvcity']))
{
   if(1 != $_SESSION['USRSNL'])
   {
     $query = "UPDATE users SET  scity=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNL'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSNL'])
   {
     $query = "UPDATE users SET  scity=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSNL'] = 0;
   }
}



if(isset($_POST['cmail']))
{
   if(1 != $_SESSION['USRSM'])
   {
     $query = "UPDATE users SET  smail=1 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSM'] = 1;
   }
}
else
{
   if(0 != $_SESSION['USRSM'])
   {
     $query = "UPDATE users SET  smail=0 WHERE nick='".$_SESSION['USR']."'";
     $result = mysql_query($query)
     or die("Query failed");
     $_SESSION['USRSM'] = 0;
   }
}



SQL_Close();
header("Location: ../settings/");

?>