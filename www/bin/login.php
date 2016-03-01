<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
     
include('lib/MySQL.php');
include('lib/Constans.php');
include('lib/Security.php');
include('lib/SystemErrorLog.php');

session_start();

if (isset($_SESSION['USR'])) header("Location: ../my_profile/");

if ( isset( $_POST['nick']) && isset($_POST['password']) )
{
   $Array = array();
   $Array['status'] = 1;
   
   $fn = '../bin/stats/login.txt';
	file_put_contents($fn, '['.date('d-m-Y H:i:s').']{'.$_POST['nick'].'}<'.$_SERVER['REMOTE_ADDR'].'>');
	     $fn = "../bin/stats/login".date('d_m_y').".txt";
	if(!file_exists($fn)) fopen($fn,'w');
	$counter = (file_exists($fn) ? (int)file_get_contents($fn) : 0) + 1;
	file_put_contents($fn, $counter);
   
     if (SecurityStringNick($_POST['nick']) && SecurityStringPassword($_POST['password']))
     {
     SQL_Connect();
     $DataArray = SQL_ResultNick($_POST['nick']);
     if($DataArray != null) $Array['status'] = 2;
     
         if  ($DataArray[$MYSQL_USERS_PASSWORD] == SecurityEncrypt($_POST['password']) && $DataArray[$MYSQL_USERS_ACCTIVE] )
         {
            session_regenerate_id();
		
            $Array['status'] = 3;
		
            SQL_UpdateDateLog($_POST['nick']);
		
            $_SESSION['USR'] = $_POST['nick'];
            $_SESSION['USRM'] = $DataArray[$MYSQL_USERS_EMAIL];
            $_SESSION['USRC'] = $DataArray[$MYSQL_USERS_COUNTRY];
            $_SESSION['USREM'] = $DataArray[$MYSQL_USERS_EXTRA_EMAIL];
            $_SESSION['USRCT'] = $DataArray[$MYSQL_USERS_CITY];
            $_SESSION['USRPH'] = $DataArray[$MYSQL_USERS_PHONE];
            $_SESSION['USRAB'] = $DataArray[$MYSQL_USERS_ABOUT];
		
            $_SESSION['USRSK'] = $DataArray[$MYSQL_USERS_SKYPE];
            $_SESSION['USRF'] = $DataArray[$MYSQL_USERS_FACEBOOK];
            $_SESSION['USRTW'] = $DataArray[$MYSQL_USERS_TWITTER];
            $_SESSION['USRPR'] = $DataArray[$MYSQL_USERS_PINTEREST];
            $_SESSION['USRMS'] = $DataArray[$MYSQL_USERS_MYSPACE];
            $_SESSION['USRGP'] = $DataArray[$MYSQL_USERS_GOOGLEP];
            $_SESSION['USRDA'] = $DataArray[$MYSQL_USERS_DEVIANTART];
            $_SESSION['USRTG'] = $DataArray[$MYSQL_USERS_TAGGED];
            $_SESSION['USRNIN'] = $DataArray[$MYSQL_USERS_LINKEDIN];
            $_SESSION['USRNVK'] = $DataArray[$MYSQL_USERS_VKONTAKT];
            $_SESSION['USRNTCW'] = $DataArray[$MYSQL_USERS_TENCENT];
            $_SESSION['USRNSW'] = $DataArray[$MYSQL_USERS_SINA];
            $_SESSION['USRNRR'] = $DataArray[$MYSQL_USERS_RENREN];
            $_SESSION['USRNPY'] = $DataArray[$MYSQL_USERS_PENGYOU];
            
            $_SESSION['USRA'] = $DataArray[$MYSQL_USERS_ACCTIVE];
            $_SESSION['USRB'] = $DataArray[$MYSQL_USERS_BLOCKADE];
            $_SESSION['USRT'] = $DataArray[$MYSQL_USERS_TYPE];
            $_SESSION['USRP'] = $DataArray[$MYSQL_USERS_PICTRUES];
            $_SESSION['USRLL'] = date('d-m-Y') ;


            $_SESSION['USRAM'] = $DataArray[$MYSQL_USERS_SET_ACCTIVE_MESSAGE];
            $_SESSION['USRSNL'] = $DataArray[$MYSQL_USERS_SET_NEWSLETTER];
            $_SESSION['USRSM'] = $DataArray[$MYSQL_USERS_SET_EMAIL];
            $_SESSION['USRSS'] = $DataArray[$MYSQL_USERS_SET_SKYPE];
            $_SESSION['USRSF'] = $DataArray[$MYSQL_USERS_SET_FACEBOOK];
            $_SESSION['USRSL'] = $DataArray[$MYSQL_USERS_SET_LANGUAGE];
            $_SESSION['USRSEM'] = $DataArray[$MYSQL_USERS_SET_EXTRA_EMAIL];
            $_SESSION['USRSCT'] = $DataArray[$MYSQL_USERS_SET_CITY];
            $_SESSION['USRSPH'] = $DataArray[$MYSQL_USERS_SET_PHONE];
            $_SESSION['USRSTW'] = $DataArray[$MYSQL_USERS_SET_TWITTER];
            $_SESSION['USRSPR'] = $DataArray[$MYSQL_USERS_SET_PINTEREST];
            $_SESSION['USRSMP'] = $DataArray[$MYSQL_USERS_SET_MYSPACE];
            $_SESSION['USRSGP'] = $DataArray[$MYSQL_USERS_SET_GOOGLEP];
            $_SESSION['USRSDA'] = $DataArray[$MYSQL_USERS_SET_DEVIANTART];
            $_SESSION['USRSTG'] = $DataArray[$MYSQL_USERS_SET_TAGGED];
            $_SESSION['USRSNIN'] = $DataArray[$MYSQL_USERS_SET_LINKEDIN];
            $_SESSION['USRSNVK'] = $DataArray[$MYSQL_USERS_SET_VKONTAKT];
            $_SESSION['USRSNTCW'] = $DataArray[$MYSQL_USERS_SET_TENCENT];
            $_SESSION['USRSNSW'] = $DataArray[$MYSQL_USERS_SET_SINA];
            $_SESSION['USRSNRR'] = $DataArray[$MYSQL_USERS_SET_RENREN];
            $_SESSION['USRSNPY'] = $DataArray[$MYSQL_USERS_SET_PENGYOU];
            $_SESSION['USRCCV'] = $DataArray[$MYSQL_USERS_SET_COUNT_COMMENT];

            $_SESSION['USRS'] = $DataArray[$MYSQL_USERS_SEX];
            $_SESSION['USRO'] = $DataArray[$MYSQL_USERS_AGE];


            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
		
            $DataArray2=SQL_ResultImageNameArray($_POST['nick']);
		
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
		
            /*
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
		
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
		
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
		
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
		
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            $_SESSION['USR'] = $DataArray2[];
            */
		
		

            //header("Location: ../my_profile/");
		
             //SQL_FreeVariables($DataArray);
             //SQL_FreeVariables($DataArray2);
             SQL_Close();
         }
         else
         {
            //header("Location: ../index.php?id=1");
            SQL_Close();
         }
     }
     else
     {
        //header("Location: ../index.php?id=1");
     }
}
else
{
   //header("Location: ../");
}

if(isset($_POST['mail']))
{
    $Array = array();
    $Array['result'] = 1;

    $email = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);

   if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
   {
       $Array['mail'] = true;
   }
   else
   {
       $Array['mail'] = false;
   }

   if($Array['mail'])
   {
    SQL_Connect();
     $result = mysql_query("SELECT * FROM users WHERE mail='".$_POST['mail']."'");
     $DataArray = mysql_fetch_array($result);
    SQL_Close();
     
     if($DataArray != null)
     {
        $Array['result'] = 2;
        
        $Option = "From: Rixrank.com <remainder@rixrank.com>".PHP_EOL;
             $Option .= "MIME-Version: 1.0".PHP_EOL;
             $Option .= "Content-type: text/html; charset=iso-8859-2".PHP_EOL;

             $Message = "<div style='background-color: rgb(230,115,0);
                        color: rgb(255,255,255);
                        padding-top:20px;
                        padding-left:20px;
                        font-size:35px;
                        border-radius: 10px;
                        padding-bottom:20px;  '> Rixrank - nick & password reminder</div>";
             $Message .= "<div style='margin-top:20px;
                         background-color: rgb(45,45,45);
                         border:2px solid rgb(230,115,0);
                         border-radius: 10px;
                         color: rgb(255,255,255);
                         padding:20px;
                         font-size:20px;
                         ' >Hi <div style='font-weight:bold; display:inline;'>".$DataArray[$MYSQL_USERS_NICK]."</div>,<br><br>

                         Your password: ".SecurityDecrypt($DataArray[$MYSQL_USERS_PASSWORD])." <br><br>
                          <div style='margin-left:80%; font-size:10px; '>Rixrank.com &copy; 2015  </div></div>";


              mail($_POST['mail'], "Rixrank - password remainder", $Message,$Option);

     }

   }
   
}

echo json_encode($Array);
?>