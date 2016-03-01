<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
session_start();
     if (!isset($_SESSION['USR'])) header("Location: ../");
     
include('../bin/lib/XML.php');
include('../bin/lib/MySQL.php');
include('../bin/lib/Constans.php');
include('../bin/lib/File.php');
     
     if (isset($_POST['nick']))
     {
        SQL_Connect();
        $DataArray1 = SQL_ResultNick($_POST['nick']);
        SQL_Close();
        
        /////////////////////////////////////////////////////////////////////////////////////////////////
         $HandleFile = File_Open("../data/lockers/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".lock");
         $HandleFile_1 = File_Open("../data/lockers/".$_SESSION['USRP']."/".$_SESSION['USR'].".lock");
         if( File_WriteLock($HandleFile) && File_WriteLock($HandleFile_1) )
         /////////////////////////////////////////////////////////////////////////////////////////////////
         {
        $CheckArray[100] = 0;

            for($i = 0; $i <= 99; $i++)
            {
            $CheckArray[$i] = 0;
            }
            
            $Test = 0;
        
        if($_POST['k'] == 1)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);
         
         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;
         
            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }
            
            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }
            
         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],1,$_SESSION['USRF']);
         
        }
        if($_POST['k'] == 2)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],2,$_SESSION['USRM']);

        }
        if($_POST['k'] == 3)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],3,$_SESSION['USRSK']);

        }
        if($_POST['k'] == 4)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],4,$_SESSION['USRPH']);

        }
        if($_POST['k'] == 5)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],5,$_SESSION['USREM'] );

        }
        if($_POST['k'] == 6)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],6,$_SESSION['USRTW']);

        }
        if($_POST['k'] == 7)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],7,$_SESSION['USRMS']);

        }
        if($_POST['k'] == 8)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],8,$_SESSION['USRPR']);

        }
        if($_POST['k'] == 9)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],9,$_SESSION['USRDA']);

        }
        if($_POST['k'] == 10)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],10,$_SESSION['USRTG']);

        }
        if($_POST['k'] == 11)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],11,$_SESSION['USRGP']);

        }
        if($_POST['k'] == 12)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],12,$_SESSION['USRNIN']);

        }
        if($_POST['k'] == 13)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],13,$_SESSION['USRNVK']);

        }
        if($_POST['k'] == 14)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],14,$_SESSION['USRNTCW']);

        }
        if($_POST['k'] == 15)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],15,$_SESSION['USRNSW']);

        }
        if($_POST['k'] == 16)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],16,$_SESSION['USRNRR']);

        }
        if($_POST['k'] == 17)
        {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['id']);

         $FilePath = "../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml";
         $FileXML = Reply_Load($FilePath);
         $Name = 0;

            foreach ($FileXML->reply as $reply)
            {
                if($Test == 0)
                {
                    $First_Name = intval($reply['id']);
                    $Test = 1;
                }
                $Name = $reply['id'];
                $CheckArray[intval($Name)] = 1;
            }

            if (Check($CheckArray) == 0)
            {
               $CheckArray[$First_Name] = 0;
               Reply_Remove("../data/reply/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$_POST['nick'].".xml",$First_Name) ;
            }

         Reply_Add($FilePath,Check($CheckArray),date('d-m-Y'),$_SESSION['USR'],$_SESSION['USR1'],17,$_SESSION['USRNPY']);

        }
      }
      /////////////////////////////////////////////////////////////////////////////////////////////////
         File_Unlock($HandleFile);
         File_Close($HandleFile);
         File_Unlock($HandleFile_1);
         File_Close($HandleFile_1);
      /////////////////////////////////////////////////////////////////////////////////////////////////
     }
     
     if(isset($_POST['delete']))
     {
         /////////////////////////////////////////////////////////////////////////////////////////////////
         $HandleFile = File_Open("../data/lockers/".$_SESSION['USRP']."/".$_SESSION['USR'].".lock");
         if( File_WriteLock($HandleFile) )
         /////////////////////////////////////////////////////////////////////////////////////////////////
         {
            Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['delete']);
         }
         /////////////////////////////////////////////////////////////////////////////////////////////////
         File_Unlock($HandleFile);
         File_Close($HandleFile);
         /////////////////////////////////////////////////////////////////////////////////////////////////
        
     }
     
     if(isset($_POST['block']))
     {
         /////////////////////////////////////////////////////////////////////////////////////////////////
         $HandleFile = File_Open("../data/lockers/".$_SESSION['USRP']."/".$_SESSION['USR'].".lock");
         if( File_WriteLock($HandleFile) )
         /////////////////////////////////////////////////////////////////////////////////////////////////
         {
         Query_Remove("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",$_POST['delblock']);
        
        $FileXML = Block_Load("../data/blocking/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml");
        
        $EXIST = true;
        
        foreach ($FileXML->block as $block)
            {
            $Name = intval($block['id']);
            if($block->nick == $_POST['block'])$EXIST = false;
            }
            
        if($EXIST) Block_Add("../data/blocking/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml",($Name + 1),date('d-m-Y'),$_POST['block']);
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////
         File_Unlock($HandleFile);
         File_Close($HandleFile);
         /////////////////////////////////////////////////////////////////////////////////////////////////
        
     }
     
header("Location: ../messages/");

function Check($CheckArray)
{
  for($i = 1; $i <= 100; $i++)
            {
                if($CheckArray[$i] == 0) return $i;
            }
  return 0;
}
?>