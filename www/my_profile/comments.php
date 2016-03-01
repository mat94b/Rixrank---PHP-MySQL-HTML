<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
    session_start();
     if (!isset($_SESSION['USR'])) header("Location: ../");
     
include('../bin/lib/XML.php');
include('../bin/lib/Security.php');
include('../bin/lib/File.php');



     if (isset($_POST['text']))
     {
         if(strlen($_POST['text']) > 1 && $_SESSION['USR1'] != 0 && !preg_match('/[^\x20-\x7f]/', $_POST['text']))
         {
         /////////////////////////////////////////////////////////////////////////////////////////////////
         $HandleFile = File_Open("../data/lockers/".$_SESSION['USRP']."/".$_SESSION['USR'].".lock");
         if( File_WriteLock($HandleFile) )
         /////////////////////////////////////////////////////////////////////////////////////////////////
         {
            $FileXML = Comments_Load("../data/comments/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml");

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

            //for($i = 0; $i <= 999; $i++)
            //{
            //echo $i.': '.$CheckArray[$i].'<br>';
           // }
            $Text = SecurityStringComment($_POST['text']);
            
            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Comments_Remove("../data/comments/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$First_Name) ;
            }

            Comments_Add("../data/comments/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",Check($CheckArray),date('d-m-Y'),date('H:i:s'),$_SESSION['USR'],$_SESSION['USR1'],$Text,$_SESSION['USRS']);
         }
         /////////////////////////////////////////////////////////////////////////////////////////////////
         File_Unlock($HandleFile);
         File_Close($HandleFile);
         /////////////////////////////////////////////////////////////////////////////////////////////////
         }

     }
     if (isset($_POST['delete']))
     {
         /////////////////////////////////////////////////////////////////////////////////////////////////
         $HandleFile = File_Open("../data/lockers/".$_SESSION['USRP']."/".$_SESSION['USR'].".lock");
         if( File_WriteLock($HandleFile) )
         /////////////////////////////////////////////////////////////////////////////////////////////////
         {
         Comments_Remove("../data/comments/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['delete']);
         }
         /////////////////////////////////////////////////////////////////////////////////////////////////
         File_Unlock($HandleFile);
         File_Close($HandleFile);
         /////////////////////////////////////////////////////////////////////////////////////////////////
     
     }
     
     
header("Location: ../my_profile/index.php#com");
function Check($CheckArray)
{
  for($i = 1; $i <= 1000; $i++)
            {
                if($CheckArray[$i] == 0) return $i;
            }
  return 0;
}
?>