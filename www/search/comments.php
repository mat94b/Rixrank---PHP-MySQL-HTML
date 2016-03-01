<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
    session_start();
     if (!isset($_SESSION['USR'])) header("Location: ../");
     
include('../bin/lib/XML.php');
include('../bin/lib/Cookies.php');
include('../bin/lib/Security.php');
include('../bin/lib/MySQL.php');
include('../bin/lib/Constans.php');
include('../bin/lib/File.php');



     if (isset($_POST['text']))
     {
         SQL_Connect();
         $DataArray1 = SQL_ResultNick($_POST['nick']);
         SQL_Close();
         
         /////////////////////////////////////////////////////////////////////////////////////////////////
         $HandleFile = File_Open("../data/lockers/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".lock");
         if( File_WriteLock($HandleFile) )
         /////////////////////////////////////////////////////////////////////////////////////////////////
         {
         $CONDITIONAL = true;
         $FileXML_1 = Block_Load("../data/blocking/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml");
         foreach ($FileXML_1->block as $block)
            {
            if($block->nick == $_SESSION['USR']) $CONDITIONAL  = false;
            }
            
         if(strlen($_POST['text']) > 1 && !preg_match('/[^\x20-\x7f]/', $_POST['text']) && $CONDITIONAL )
         {
            $FileXML = Comments_Load("../data/comments/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml");

            $CheckArray[1000] = 0;

            for($i = 0; $i <= 999; $i++)
            {
            $CheckArray[$i] = 0;
            }
            
            $Test = 0;
            foreach ($FileXML->comment as $comment)
            {
            if($Test == 0)
            {
               $First_Name = intval($comment['id']);
               $Test = 1;
            }
            $Name = $comment['id'];
            $CheckArray[intval($Name)] = 1;
            }
            
            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Comments_Remove("../data/comments/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

            $Text = SecurityString($_POST['text']);
            Comments_Add("../data/comments/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",Check($CheckArray),date('d-m-Y'),date('H:i:s'),$_SESSION['USR'],$_SESSION['USR1'],$Text,$_SESSION['USRS']);
            Cookies_SearchNick($_POST['nick']);
         }
       }
       /////////////////////////////////////////////////////////////////////////////////////////////////
         File_Unlock($HandleFile);
         File_Close($HandleFile);
         /////////////////////////////////////////////////////////////////////////////////////////////////
     }

header("Location: ../search/index.php#com");
function Check($CheckArray)
{
  for($i = 1; $i <= 1000; $i++)
            {
                if($CheckArray[$i] == 0) return $i;
            }
  return 0;
}
?>