<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
    session_start();
     if (!isset($_SESSION['USR'])) header("Location: ../");

include('../bin/lib/XML.php');
include('../bin/lib/Security.php');
include('../bin/lib/Cookies.php');
include('../bin/lib/File.php');

     if (isset($_POST['nick']))
     {
         /////////////////////////////////////////////////////////////////////////////////////////////////
         $HandleFile = File_Open("../data/lockers/".$_POST['folder']."/".$_POST['nick'].".lock");
         if( File_WriteLock($HandleFile) )
         /////////////////////////////////////////////////////////////////////////////////////////////////
          {

         $CONDITIONAL = true;
         $FileXML_1 = Block_Load("../data/blocking/".$_POST['folder']."/".$_POST['nick'].".xml");
         foreach ($FileXML_1->block as $block)
            {
            if($block->nick == $_SESSION['USR']) $CONDITIONAL  = false;
            }
            
         if(strlen($_POST['nick']) > 1 && $CONDITIONAL )
         {
            $EXIST = true;
            $FileXML = Query_Load("../data/query/".$_POST['folder']."/".$_POST['nick'].".xml");

            $CheckArray[100] = 0;

            for($i = 0; $i <= 99; $i++)
            {
            $CheckArray[$i] = 0;
            }

            $Test = 0;
            foreach ($FileXML->query as $query)
            {
                if($Test == 0)
                {
                    $First_Name = intval($query['id']);
                    $Test = 1;
                }
                $Name = $query['id'];
                if($query->nick == $_SESSION['USR'])$EXIST = false;
                $CheckArray[intval($Name)] = 1;
            }
            
            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Comments_Remove("../data/query/".$_POST['folder']."/".$_POST['nick'].".xml",$First_Name) ;
            }

            if($EXIST) Query_Add("../data/query/".$_POST['folder']."/".$_POST['nick'].".xml",Check($CheckArray),date('d-m-Y'),$_SESSION['USR']);
         }
         }
         /////////////////////////////////////////////////////////////////////////////////////////////////
         File_Unlock($HandleFile);
         File_Close($HandleFile);
         /////////////////////////////////////////////////////////////////////////////////////////////////
        Cookies_SearchNick($_POST['nick']);
     }

header("Location: ../search/");
function Check($CheckArray)
{
  for($i = 1; $i <= 100; $i++)
            {
                if($CheckArray[$i] == 0) return $i;
            }
  return 0;
}

?>