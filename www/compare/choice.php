<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
     session_start();
     $USER_SEX = 2;
     if (isset($_SESSION['USR']))$USER_SEX = $_SESSION['USRS'];
     if (isset($_COOKIE['sex']))$USER_SEX = $_COOKIE['sex'];
     
include('../bin/lib/MySQL.php');
include('../bin/lib/DateTime.php');
include('../bin/lib/File.php');
include('../bin/lib/XML.php');


    SQL_Connect();

    if (isset($_POST['Side'])   &&
        isset( $_POST['Mark'] ) &&
        isset( $_POST['Img1'] ) &&
        isset( $_POST['Side'] ) &&
        isset( $_POST['p'] )    &&
        isset( $_POST['p2'] ) &&
        $USER_SEX != 2 )
     {
     
    $Mark = $_POST['Mark'];
    $Img1 = $_POST['Img1'];
    $Img2 = $_POST['Img2'];
    $Side = $_POST['Side'];
    $Plus1 = $_POST['p'];
    $Plus2 = $_POST['p2'];
    
    
         if($Side == 1)
         {
            if ( $Plus1 > $Plus2 )
            {
                if($USER_SEX == 1)
                {
                   SQL_UpdateRankMinus($Img1,1);
                }
                else
                {
                   SQL_UpdateRankMinusF($Img1,1);
                }
            
            }
            if ( $Plus1 == $Plus2 )
            {
            
            if($USER_SEX == 1) mysql_query("update upimag set plus= plus + ".$Mark." where no=".$Img1)
            or die("Query failed");
            
            if($USER_SEX == 0) mysql_query("update upimag1 set plus= plus + ".$Mark." where no=".$Img1)
            or die("Query failed");
            
            if($USER_SEX == 1) mysql_query("update upimag set minus= minus + 1 where no=".$Img1)
            or die("Query failed");
            
            if($USER_SEX == 0) mysql_query("update upimag1 set minus= minus + 1 where no=".$Img1)
            or die("Query failed");

            }
            if ($Plus1 < $Plus2 )
            {
            $Plus = round( (($Plus2 - $Plus1)/10) ,0) ;

            if($USER_SEX == 1) mysql_query("update upimag set plus= plus + ".$Plus." where no=".$Img1)
            or die("Query failed");
            
            if($USER_SEX == 0) mysql_query("update upimag1 set plus= plus + ".$Plus." where no=".$Img1)
            or die("Query failed");
            
            if($USER_SEX == 1) mysql_query("update upimag set minus= minus + 1 where no=".$Img1)
            or die("Query failed");
            
            if($USER_SEX == 0) mysql_query("update upimag1 set minus= minus + 1 where no=".$Img1)
            or die("Query failed");
            
            }



            //$minus = $_POST['m2'] + 1;

            //$result = mysql_query("update upimag set plus=".$plus." where no=".$Img1)
            //or die("Query failed");

            //$plus = $_POST['p2'] - round( (($_POST['p2'] - $_POST['p'])/10));
            //$result = mysql_query("update upimag set plus=".$plus." where no=".$Img2)
            //or die("Query failed");

            //$result = mysql_query("update upimag set minus=".$minus." where no=".$_POST['imgn2'])
            //or die("Query failed");

         }
         else if($Side == 0)
         {
            if ( $Plus2 > $Plus1 )
            {
            if($USER_SEX == 1) mysql_query("update upimag set minus= minus + 1 where no=".$Img2)
            or die("Query failed");
            
            if($USER_SEX == 0) mysql_query("update upimag1 set minus= minus + 1 where no=".$Img2)
            or die("Query failed");
            }
            if ( $Plus2 == $Plus1 )
            {

            if($USER_SEX == 1) mysql_query("update upimag set plus= plus + ".$Mark." where no=".$Img2)
            or die("Query failed");
            
            if($USER_SEX == 0) mysql_query("update upimag1 set plus= plus + ".$Mark." where no=".$Img2)
            or die("Query failed");
            
            if($USER_SEX == 1) mysql_query("update upimag set minus= minus + 1 where no=".$Img2)
            or die("Query failed");
            
            if($USER_SEX == 0) mysql_query("update upimag1 set minus= minus + 1 where no=".$Img2)
            or die("Query failed");

            }
            if ( $Plus2 < $Plus1 )
            {
            
            $Plus = round( (($Plus1 - $Plus2)/10) ,0) ;
            if($USER_SEX == 1) mysql_query("update upimag set plus= plus + ".$Plus." where no=".$Img2)
            or die("Query failed");
            
            if($USER_SEX == 0) mysql_query("update upimag1 set plus= plus + ".$Plus." where no=".$Img2)
            or die("Query failed");

            if($USER_SEX == 1) mysql_query("update upimag set minus= minus + 1 where no=".$Img2)
            or die("Query failed");
            
            if($USER_SEX == 0) mysql_query("update upimag1 set minus= minus + 1 where no=".$Img2)
            or die("Query failed");
            
            }
         }
         /////////////////////////////////////////////////////////////////////////////////////////////////////////////
         // Other function (old) /////////////////////////////////////////////////////////////////////////////////////
         /////////////////////////////////////////////////////////////////////////////////////////////////////////////
         /*
            if ($_POST['p2'] > $_POST['p'] ) $plus = $_POST['p2'] ;
            if ($_POST['p2'] == $_POST['p'] ) $plus = $_POST['p2'] + $_POST['mark'] ;
            if ($_POST['p2'] < $_POST['p'] ) $plus = $_POST['p2'] + round( (($_POST['p'] - $_POST['p2'])/10) ,0) ;

            $minus = $_POST['m'] + 1;

            $result = mysql_query("update upimag set plus=".$plus." where no=".$_POST['imgn2'])
            or die("Query failed");

            $plus = $_POST['p'] - round( (($_POST['p'] - $_POST['p2'])/10));
            $result = mysql_query("update upimag set plus=".$plus." where no=".$_POST['imgn'])
            or die("Query failed");

            $result = mysql_query("update upimag set minus=".$minus." where no=".$_POST['imgn'])
            or die("Query failed");
         }
         else
         {
           echo ("hacking");
         }
          */
          /////////////////////////////////////////////////////////////////////////////////////////////////////////////


         if($USER_SEX == 0) $VAR = "1";
         if($USER_SEX == 1) $VAR = "";

         $HandleFile = File_Open("../data/endimg".$VAR.".lock");
         if( File_ReadLock($HandleFile) )
         {
         $NUMBER_OF_IMAGE = intval(EndImage_Return("../data/endimg".$VAR.".xml"));
         $NUMBER_OF_IMAGE = $NUMBER_OF_IMAGE - 1 ;
         }
         File_Unlock($HandleFile);
         File_Close($HandleFile);

         $i = rand ( 1 , $NUMBER_OF_IMAGE );
         $i2 = rand ( 1 , $NUMBER_OF_IMAGE );
         
         $FileNum = File_NameFolder($i);
         $FileNum2 = File_NameFolder($i2);

         while ($i == $i2 || !File_Exist("../upload_images".$VAR."/".$FileNum."/".$i.".jpg") || !File_Exist("../upload_images".$VAR."/".$FileNum2."/".$i2.".jpg") )
         {
         $i = rand ( 1 , $NUMBER_OF_IMAGE );
         $i2 = rand ( 1 , $NUMBER_OF_IMAGE );
         }
         
         $FileNum = File_NameFolder($i);
         $FileNum2 = File_NameFolder($i2);

         if($USER_SEX == 1) $ImageResult1 = SQL_ResultImageNumber($i);
         if($USER_SEX == 0) $ImageResult1 = SQL_ResultImageNumberF($i);
         if($USER_SEX == 1) $ImageResult2 = SQL_ResultImageNumber($i2);
         if($USER_SEX == 0) $ImageResult2 = SQL_ResultImageNumberF($i2);
    }
    SQL_Close();

    
    $Array = array();
    
    $Array['plus1'] = $ImageResult1['plus'];
    $Array['no1'] = $i;
    $Array['nick1'] = $ImageResult1['nick'];
    $Array['battle1'] = $ImageResult1['minus'];
    $Array['country1'] = $ImageResult1['country'];
    $Array['num'] = $FileNum ;
    
    $Date = DT_Convert($ImageResult1['age']);
    $_Date = DT_Explode($Date);
    $Age = DT_Age($_Date[0], $_Date[1], $_Date[2]);
    
    $Array['age1'] = $Age;
    
    $Array['plus2'] = $ImageResult2['plus'];
    $Array['no2'] = $i2;
    $Array['nick2'] = $ImageResult2['nick'];
    $Array['battle2'] = $ImageResult2['minus'];
    $Array['country2'] = $ImageResult2['country'];
    $Array['num2'] = $FileNum2 ;
    
    $Date = DT_Convert($ImageResult2['age']);
    $_Date = DT_Explode($Date);
    $Age = DT_Age($_Date[0], $_Date[1], $_Date[2]);
    
    $Array['age2'] = $Age;
    
    echo json_encode($Array);
?>