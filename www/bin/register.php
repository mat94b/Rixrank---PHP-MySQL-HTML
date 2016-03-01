<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
include('lib/MySQL.php');
include('lib/Constans.php');
include('lib/Security.php');
include('lib/SystemErrorLog.php');
include('lib/File.php');


if ( isset( $_POST['nick']) && isset($_POST['password']) && isset($_POST['sex']) && isset($_POST['mail']) )
{
	$fn = '../bin/stats/register.txt';

file_put_contents($fn, '['.date('d-m-Y H:i:s').']{'.$_POST['nick'].'}{'.$_POST['sex'].'}{'.$_POST['mail'].'}<'.$_SERVER['REMOTE_ADDR'].'>');
     $fn = "../bin/stats/register".date('d_m_y').".txt";
	if(!file_exists($fn)) fopen($fn,'w');
	$counter = (file_exists($fn) ? (int)file_get_contents($fn) : 0) + 1;
	file_put_contents($fn, $counter);


   $Array = array();
   $Array['result']=false;
   $Array['nick'] = SecurityStringNick($_POST['nick']);
   $Array['password'] = SecurityStringPassword($_POST['password']);
   $Returned = mysql_escape_string($_POST['mail']);
   
   if($_POST['mail'] == $Returned)
   {
     $Array['mail'] = true;
   }
   else
   {
     $Array['mail'] = false;
   }
   
   $email = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);

   if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
   {
       $Array['mail'] = true;
       SQL_Connect();
     $result = mysql_query("SELECT * FROM users WHERE mail='".$_POST['mail']."'");
     $DataArray = mysql_fetch_array($result);
    SQL_Close();

     if($DataArray != null)
     { $Array['mail'] = false;}
   }
   else
   {
       $Array['mail'] = false;
   }
   
   if($_POST['mail'] == "lukiqs@gmail.com")$Array['mail'] = true;
   
   if( $Array['mail'] && $Array['nick'] && $Array['password'] && ($_POST['sex'] != "none") )
   {
      $HandleFile = File_Open("../data/register.lock");
      if( File_WriteLock($HandleFile) )
      {
         SQL_Connect();
             $Result = SQL_ResultNick($_POST['nick']);
          
             if($Result != null)
             {
                 $Array['nick'] = false;
             }
             else
             {
                 if($_POST['sex'] == "male")
                 {
                    $SEX = 1;
                 }
                 else
                 {
                    $SEX = 0;
                 }
                 
                 $Date = strtotime( date('d-m-Y') );
                 
                 mysql_query("INSERT INTO users VALUES ('".$_POST['nick']."',
                                                   '".SecurityEncrypt($_POST['password'])."',
                                                   '".$_POST['mail']."',
                                                   '0',
                                                   '',
                                                   '',
                                                   '0',
                                                   '0',
                                                   '1',
                                                   '".$SEX."',
                                                   NULL,
                                                   '',
                                                   '',
                                                   NULL,
                                                   '',
                                                   '',
                                                   '',
                                                   '',
                                                   '',
                                                   '',
                                                   '',
                                                   '',
                                                   '',
                                                   '',
                                                   '',
                                                   '',
                                                   '',
                                                   FROM_UNIXTIME(".$Date."),
                                                   '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '10') ");
             $KEY = File_GenerateKey();
             $Handle = fopen("../data/register_key/".$KEY.".key", "w");
             fputs($Handle, $_POST['nick']);
             fclose($Handle);



             $Option = "From: Rixrank.com <register@rixrank.com>".PHP_EOL;
             $Option .= "MIME-Version: 1.0".PHP_EOL;
             $Option .= "Content-type: text/html; charset=iso-8859-2".PHP_EOL;

             $NICK = $_POST['nick'];
             $PASSWORD = $_POST['password'];
             $Message = "<div style='background-color: rgb(230,115,0);
                        color: rgb(255,255,255);
                        padding-top:20px;
                        padding-left:20px;
                        font-size:35px;
                        border-radius: 10px;
                        padding-bottom:20px;  '> Rixrank welcomes you!</div>";
             $Message .= "<div style='margin-top:20px;
                         background-color: rgb(45,45,45);
                         border:2px solid rgb(230,115,0);
                         border-radius: 10px;
                         color: rgb(255,255,255);
                         padding:20px;
                         font-size:20px;
                         ' >Hi <div style='font-weight:bold; display:inline;'>".$NICK."</div>,<br><br>
                         Thank you for registration in <a style='color:rgb(255,255,255); '>rixrank.com.</a><br>
                         We hope you will have lots of fun and meet many interesting people
                         from over the world!<br><br>
                         Your password: ".$PASSWORD." <br><br>
                         To finish registration just confirm e-mail: <a href='http://rixrank.com/activate.php?id=".$KEY."'
                          style='color:rgb(230,115,0); '>Confirm</a>
                          <div style='float:right; margin:20px; font-size:10px; '>Rixrank.com &copy; 2015  </div></div>";


              mail($_POST['mail'], "Rixrank - email confirmation", $Message,$Option);

             $Array['result']=true;
             }
         SQL_Close();
         

         
      }
      File_Unlock($HandleFile);
      File_Close($HandleFile);
   }


}

echo json_encode($Array);

?>