<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
include('../bin/lib/Security.php');
include('../bin/lib/ShellData.php');
include('../bin/lib/MySQL.php');
include('../bin/lib/Constans.php');

session_start();

if (isset($_SESSION['USR']) && isset( $_GET['id']))
{
       if(SecurityStringNumber($_GET['id']))
       {
        $ID = $_GET['id'];
        
             if($ID>1 && $ID<=60)
             {
              $Data = SD_NumberImage($ID);
              $Data2 = SD_NameImage($Data);

              SQL_Connect();
              $DataArray2 = SQL_ResultUpdateImage($_SESSION['USR'],$Data2,$Data,$_SESSION['USR1']) ;

                $_SESSION['USR1'] = $DataArray2[$MYSQL_USERS_PICTRUES_1];
    	    $_SESSION['USR2'] = $DataArray2[$MYSQL_USERS_PICTRUES_2];
    	    $_SESSION['USR3'] = $DataArray2[$MYSQL_USERS_PICTRUES_3];
    	    $_SESSION['USR4'] = $DataArray2[$MYSQL_USERS_PICTRUES_4];
    	    $_SESSION['USR5'] = $DataArray2[$MYSQL_USERS_PICTRUES_5];
    	    $_SESSION['USR6'] = $DataArray2[$MYSQL_USERS_PICTRUES_6];
    	    $_SESSION['USR7'] = $DataArray2[$MYSQL_USERS_PICTRUES_7];
    	    $_SESSION['USR8'] = $DataArray2[$MYSQL_USERS_PICTRUES_8];
    	    $_SESSION['USR9'] = $DataArray2[$MYSQL_USERS_PICTRUES_9];
    	    $_SESSION['USR10'] = $DataArray2[$MYSQL_USERS_PICTRUES_10];
    	    $_SESSION['USR11'] = $DataArray2[$MYSQL_USERS_PICTRUES_11];
    	    $_SESSION['USR12'] = $DataArray2[$MYSQL_USERS_PICTRUES_12];
    	    $_SESSION['USR13'] = $DataArray2[$MYSQL_USERS_PICTRUES_13];
    	    $_SESSION['USR14'] = $DataArray2[$MYSQL_USERS_PICTRUES_14];
    	    $_SESSION['USR15'] = $DataArray2[$MYSQL_USERS_PICTRUES_15];
    	    $_SESSION['USR16'] = $DataArray2[$MYSQL_USERS_PICTRUES_16];
    	    $_SESSION['USR17'] = $DataArray2[$MYSQL_USERS_PICTRUES_17];
    	    $_SESSION['USR18'] = $DataArray2[$MYSQL_USERS_PICTRUES_18];
    	    $_SESSION['USR19'] = $DataArray2[$MYSQL_USERS_PICTRUES_19];
    	    $_SESSION['USR20'] = $DataArray2[$MYSQL_USERS_PICTRUES_20];
    	    $_SESSION['USR21'] = $DataArray2[$MYSQL_USERS_PICTRUES_21];
    	    $_SESSION['USR22'] = $DataArray2[$MYSQL_USERS_PICTRUES_22];
    	    $_SESSION['USR23'] = $DataArray2[$MYSQL_USERS_PICTRUES_23];
    	    $_SESSION['USR24'] = $DataArray2[$MYSQL_USERS_PICTRUES_24];
    	    $_SESSION['USR25'] = $DataArray2[$MYSQL_USERS_PICTRUES_25];
    	    $_SESSION['USR26'] = $DataArray2[$MYSQL_USERS_PICTRUES_26];
    	    $_SESSION['USR27'] = $DataArray2[$MYSQL_USERS_PICTRUES_27];
    	    $_SESSION['USR28'] = $DataArray2[$MYSQL_USERS_PICTRUES_28];
    	    $_SESSION['USR29'] = $DataArray2[$MYSQL_USERS_PICTRUES_29];
    	    $_SESSION['USR30'] = $DataArray2[$MYSQL_USERS_PICTRUES_30];
    	    $_SESSION['USR31'] = $DataArray2[$MYSQL_USERS_PICTRUES_31];
    	    $_SESSION['USR32'] = $DataArray2[$MYSQL_USERS_PICTRUES_32];
    	    $_SESSION['USR33'] = $DataArray2[$MYSQL_USERS_PICTRUES_33];
    	    $_SESSION['USR34'] = $DataArray2[$MYSQL_USERS_PICTRUES_34];
    	    $_SESSION['USR35'] = $DataArray2[$MYSQL_USERS_PICTRUES_35];
    	    $_SESSION['USR36'] = $DataArray2[$MYSQL_USERS_PICTRUES_36];
    	    $_SESSION['USR37'] = $DataArray2[$MYSQL_USERS_PICTRUES_37];
    	    $_SESSION['USR38'] = $DataArray2[$MYSQL_USERS_PICTRUES_38];
    	    $_SESSION['USR39'] = $DataArray2[$MYSQL_USERS_PICTRUES_39];
    	    $_SESSION['USR40'] = $DataArray2[$MYSQL_USERS_PICTRUES_40];
    	    $_SESSION['USR41'] = $DataArray2[$MYSQL_USERS_PICTRUES_41];
    	    $_SESSION['USR42'] = $DataArray2[$MYSQL_USERS_PICTRUES_42];
    	    $_SESSION['USR43'] = $DataArray2[$MYSQL_USERS_PICTRUES_43];
    	    $_SESSION['USR44'] = $DataArray2[$MYSQL_USERS_PICTRUES_44];
    	    $_SESSION['USR45'] = $DataArray2[$MYSQL_USERS_PICTRUES_45];
    	    $_SESSION['USR46'] = $DataArray2[$MYSQL_USERS_PICTRUES_46];
    	    $_SESSION['USR47'] = $DataArray2[$MYSQL_USERS_PICTRUES_47];
    	    $_SESSION['USR48'] = $DataArray2[$MYSQL_USERS_PICTRUES_48];
    	    $_SESSION['USR49'] = $DataArray2[$MYSQL_USERS_PICTRUES_49];
    	    $_SESSION['USR50'] = $DataArray2[$MYSQL_USERS_PICTRUES_50];
    	    $_SESSION['USR51'] = $DataArray2[$MYSQL_USERS_PICTRUES_51];
    	    $_SESSION['USR52'] = $DataArray2[$MYSQL_USERS_PICTRUES_52];
    	    $_SESSION['USR53'] = $DataArray2[$MYSQL_USERS_PICTRUES_53];
    	    $_SESSION['USR54'] = $DataArray2[$MYSQL_USERS_PICTRUES_54];
    	    $_SESSION['USR55'] = $DataArray2[$MYSQL_USERS_PICTRUES_55];
    	    $_SESSION['USR56'] = $DataArray2[$MYSQL_USERS_PICTRUES_56];
    	    $_SESSION['USR57'] = $DataArray2[$MYSQL_USERS_PICTRUES_57];
    	    $_SESSION['USR58'] = $DataArray2[$MYSQL_USERS_PICTRUES_58];
    	    $_SESSION['USR59'] = $DataArray2[$MYSQL_USERS_PICTRUES_59];
    	    $_SESSION['USR60'] = $DataArray2[$MYSQL_USERS_PICTRUES_60];
		
		
              header("Location: ../my_profile");
             }
             else
             {
             header("Location: ../");
             }
       }
       else
       {
       header("Location: ../");
       }
}
else
{
header("Location: ../");
}

?>