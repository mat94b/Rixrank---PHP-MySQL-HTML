<?php
include('bin/lib/Alarm.php');
     if(Alarm_Get('bin/alarm/'))  header("Location: bin/logout.php");
     
include('bin/lib/MySQL.php');
include('bin/lib/Constans.php');
include('bin/lib/File.php');

if(isset($_GET['id']))
{
  if(File_Exist("data/register_key/".$_GET['id'].".key"))
  {
     $Handle = fopen("data/register_key/".$_GET['id'].".key", "r");
     $NICK = fread($Handle, 12);
     fclose($Handle);
     
     $NICK = trim($NICK);
     
		$fn = 'bin/stats/activate.txt';

file_put_contents($fn, '['.date('d-m-Y H:i:s').']{'.$NICK.'}<'.$_SERVER['REMOTE_ADDR'].'>'); 
     $fn = "bin/stats/activate".date('d_m_y').".txt";
if(!file_exists($fn)) fopen($fn,'w');
$counter = (file_exists($fn) ? (int)file_get_contents($fn) : 0) + 1;
file_put_contents($fn, $counter);
    
     
     SQL_Connect();
         $DataArray = SQL_ResultNick($NICK);
         
         mysql_query("INSERT INTO userimg VALUES('".$NICK."',
                                                 0,0,0,0,0,0,0,0,0,0,
                                                 0,0,0,0,0,0,0,0,0,0,
                                                 0,0,0,0,0,0,0,0,0,0,
                                                 0,0,0,0,0,0,0,0,0,0,
                                                 0,0,0,0,0,0,0,0,0,0,
                                                 0,0,0,0,0,0,0,0,0,0)  ");
                                                 
                                                 

         mysql_query("UPDATE users SET acctive=1 WHERE nick='".$NICK."'");
         
         mysql_query("UPDATE users SET type=2 WHERE nick='".$NICK."'");
     
     SQL_Close();
     
     $Path = $DataArray[$MYSQL_USERS_PICTRUES];
     
     $doc =  new SimpleXMLElement("<blocking> </blocking>");
     $doc->asXML("data/blocking/".$Path."/".$NICK.".xml");
     
     $doc =  new SimpleXMLElement("<comments> </comments>");
     $doc->asXML("data/comments/".$Path."/".$NICK.".xml");
     
     $doc =  new SimpleXMLElement("<queryies> </queryies>");
     $doc->asXML("data/query/".$Path."/".$NICK.".xml");
     
     $doc =  new SimpleXMLElement("<replyies> </replyies>");
     $doc->asXML("data/reply/".$Path."/".$NICK.".xml");
     
     $Handler = fopen("data/lockers/".$Path."/".$NICK.".lock", "w");
     fclose($Handler);
     
     unlink("data/register_key/".$Path."/".$_GET['id'].".key");
  }
}
header("Location: http://www.rixrank.com");

?>