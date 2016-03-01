<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
     session_start();
     if (isset($_SESSION['USR'])) 
{
     
include('../bin/lib/XML.php');
include('../bin/lib/File.php');
include('../bin/lib/MySQL.php');

$NUMBER_NEW_IMAGE = 0;

if($_SESSION['USRS'] == 0) $VAR = "";
if($_SESSION['USRS'] == 1) $VAR = "1";

$fn = '../bin/stats/upload.txt';

file_put_contents($fn, '['.date('d-m-Y H:i:s').']{'.$_SESSION['USR'].'}#'.$_SESSION['USRS'].'<'.$_SERVER['REMOTE_ADDR'].'>');
     $fn = "../bin/stats/upload".date('d_m_y').".txt";
if(!file_exists($fn)) fopen($fn,'w');
$counter = (file_exists($fn) ? (int)file_get_contents($fn) : 0) + 1;
file_put_contents($fn, $counter);

$HandleFile = File_Open("../data/delimg".$VAR.".lock");
if( File_WriteLock($HandleFile) )
{
   $NUMBER_NEW_IMAGE = DeletedImage_Return("../data/delimg".$VAR.".xml");
   DeletedImage_Remove("../data/delimg".$VAR.".xml");
}
File_Unlock($HandleFile);
File_Close($HandleFile);

if($NUMBER_NEW_IMAGE == null)
{
   $HandleFile = File_Open("../data/endimg".$VAR.".lock");
   if( File_WriteLock($HandleFile) )
   {
      $NUMBER_NEW_IMAGE = EndImage_Return("../data/endimg".$VAR.".xml");
      EndImage_Remove("../data/endimg".$VAR.".xml");
      EndImage_Add("../data/endimg".$VAR.".xml",($NUMBER_NEW_IMAGE + 1) );
   }
   File_Unlock($HandleFile);
   File_Close($HandleFile);
}


SQL_Connect();

     $FileNum = File_NameFolder($NUMBER_NEW_IMAGE);

     $SourcePath = "../data/upload/".$_SESSION['USR']."crop.jpg";
     $CopyPath = "../upload_images".$VAR."/".$FileNum."/".$NUMBER_NEW_IMAGE.".jpg";
     $MainPath = "../data/upload/".$_SESSION['USR'].".jpg";

     if($_SESSION['USR1'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p1",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR2'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p2",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR3'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p3",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR4'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p4",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR5'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p5",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR6'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p6",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR7'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p7",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR8'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p8",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR9'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p9",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR10'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p10",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR11'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p11",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR12'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p12",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR13'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p13",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR14'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p14",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR15'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p15",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR16'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p16",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR17'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p17",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR18'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p18",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR19'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p19",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR20'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p20",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR21'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p21",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR22'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p22",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR23'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p23",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR24'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p24",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR25'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p25",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR26'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p26",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR27'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p27",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR28'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p28",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR29'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p29",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR30'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p30",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR31'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p31",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR32'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p32",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR33'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p33",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR34'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p34",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR35'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p35",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR36'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p36",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR37'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p37",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR38'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p38",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR39'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p39",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR40'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p40",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR41'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p41",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR42'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p42",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR43'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p43",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR44'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p44",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR45'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p45",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR46'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p46",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR47'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p47",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR48'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p48",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR49'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p49",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR50'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p50",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR51'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p51",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR52'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p52",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR53'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p53",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR54'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p54",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR55'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p55",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR56'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p56",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR57'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p57",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR58'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p58",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR59'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p59",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     else if($_SESSION['USR60'] == 0)
     {
        File_Copy($SourcePath,$CopyPath);
        
        if($_SESSION['USRS'] == 0) SQL_AddRecordRank($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        if($_SESSION['USRS'] == 1) SQL_AddRecordRankF($NUMBER_NEW_IMAGE,$_SESSION['USR'],$_SESSION['USRC'],strtotime($_SESSION['USRO']));
        SQL_UpdateImage($_SESSION['USR'],"p60",$NUMBER_NEW_IMAGE);
        
        unlink($SourcePath);
        unlink($MainPath);
        
        header("Location: ../my_profile/");
     }
     
     
$DataArray2=SQL_ResultImageNameArray($_SESSION['USR']);
		
            $_SESSION['USR1'] = $DataArray2[1];
            $_SESSION['USR2'] = $DataArray2[2];
            $_SESSION['USR3'] = $DataArray2[3];
            $_SESSION['USR4'] = $DataArray2[4];
            $_SESSION['USR5'] = $DataArray2[5];
            $_SESSION['USR6'] = $DataArray2[6];
            $_SESSION['USR7'] = $DataArray2[7];
            $_SESSION['USR8'] = $DataArray2[8];
            $_SESSION['USR9'] = $DataArray2[9];
            $_SESSION['USR10'] = $DataArray2[10];
            $_SESSION['USR11'] = $DataArray2[11];
            $_SESSION['USR12'] = $DataArray2[12];
            $_SESSION['USR13'] = $DataArray2[13];
            $_SESSION['USR14'] = $DataArray2[14];
            $_SESSION['USR15'] = $DataArray2[15];
            $_SESSION['USR16'] = $DataArray2[16];
            $_SESSION['USR17'] = $DataArray2[17];
            $_SESSION['USR18'] = $DataArray2[18];
            $_SESSION['USR19'] = $DataArray2[19];
            $_SESSION['USR20'] = $DataArray2[20];
            $_SESSION['USR21'] = $DataArray2[21];
            $_SESSION['USR22'] = $DataArray2[22];
            $_SESSION['USR23'] = $DataArray2[23];
            $_SESSION['USR24'] = $DataArray2[24];
            $_SESSION['USR25'] = $DataArray2[25];
            $_SESSION['USR26'] = $DataArray2[26];
            $_SESSION['USR27'] = $DataArray2[27];
            $_SESSION['USR28'] = $DataArray2[28];
            $_SESSION['USR29'] = $DataArray2[29];
            $_SESSION['USR30'] = $DataArray2[30];
            $_SESSION['USR31'] = $DataArray2[31];
            $_SESSION['USR32'] = $DataArray2[32];
            $_SESSION['USR33'] = $DataArray2[33];
            $_SESSION['USR34'] = $DataArray2[34];
            $_SESSION['USR35'] = $DataArray2[35];
            $_SESSION['USR36'] = $DataArray2[36];
            $_SESSION['USR37'] = $DataArray2[37];
            $_SESSION['USR38'] = $DataArray2[38];
            $_SESSION['USR39'] = $DataArray2[39];
            $_SESSION['USR40'] = $DataArray2[40];
            $_SESSION['USR41'] = $DataArray2[41];
            $_SESSION['USR42'] = $DataArray2[42];
            $_SESSION['USR43'] = $DataArray2[43];
            $_SESSION['USR44'] = $DataArray2[44];
            $_SESSION['USR45'] = $DataArray2[45];
            $_SESSION['USR46'] = $DataArray2[46];
            $_SESSION['USR47'] = $DataArray2[47];
            $_SESSION['USR48'] = $DataArray2[48];
            $_SESSION['USR49'] = $DataArray2[49];
            $_SESSION['USR50'] = $DataArray2[50];
            $_SESSION['USR51'] = $DataArray2[51];
            $_SESSION['USR52'] = $DataArray2[52];
            $_SESSION['USR53'] = $DataArray2[53];
            $_SESSION['USR54'] = $DataArray2[54];
            $_SESSION['USR55'] = $DataArray2[55];
            $_SESSION['USR56'] = $DataArray2[56];
            $_SESSION['USR57'] = $DataArray2[57];
            $_SESSION['USR58'] = $DataArray2[58];
            $_SESSION['USR59'] = $DataArray2[59];
            $_SESSION['USR60'] = $DataArray2[60];

}
else {header("Location: ../");}
?>