<?php
////////////////////////////////////////////////////////////////////////////
//MySQL library/////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
//Author...........: £ukasz Kusy
//Last update data.: 23.03.2015
//Version..........: 1.0.0.0
//Language.........: English
////////////////////////////////////////////////////////////////////////////
//CURRENT///////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
// SQL_Connect
// SQL_ResultNick
// SQL_FreeVariables
// SQL_Close
// SQL_ResultImageArray
// SQL_ResultUpdateImage
// SQL_ResultDeleteImage
// SQL_ResultDeleteImageF
// SQL_UpdateDateLog
// SQL_ResultLocalRank
// SQL_ResultGlobalRank
// SQL_ResultLocalRankF
// SQL_ResultGlobalRankF
// SQL_FetchArray
// SQL_ResultImageNameArray
// SQL_ResultImageNumber
// SQL_ResultImageNumberF
// SQL_AddRecordRank
// SQL_AddRecordRankF
// SQL_UpdateImage
// SQL_UpdateRankMinus
// SQL_UpdateRankMinusF
// SQL_UpdateRankPlus
// SQL_UpdateRankPlusF
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////





//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_Connect
//Description...: Function is responsible for connect to the MySQL database.
//Syntax........: SQL_Connect()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 7.03.2015
////////////////////////////////////////////////////////////////////////////
function SQL_Connect()
{
    $mysql_server = "rixrankcfzmain.mysql.db";
    $mysql_admin = "rixrankcfzmain";
    $mysql_pass = "r3ApApH2DyNe";
    $mysql_db = "rixrankcfzmain";
    @mysql_connect($mysql_server, $mysql_admin, $mysql_pass)
    or die('Brak po³¹czenia z serwerem MySQL.');
    @mysql_select_db($mysql_db)
    or die('B³¹d wyboru bazy danych.');
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultNick
//Description...: Function send query to databases.
//Syntax........: SQL_ResultNick($Nick)
//Parameters....: $Nick - Name user saved in session.
//Return values.: Array in which are saved data user.
//Author .......: £ukasz Kusy
//Modified......: 7.03.2015
////////////////////////////////////////////////////////////////////////////
function SQL_ResultNick($Nick)
{
    $part1 = "SELECT * FROM users WHERE nick = '";
    $part2 = "'";
    $query  = $part1.$Nick.$part2;
    $result = mysql_query($query)
    or die("Query failed");

return mysql_fetch_array($result);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_FreeVariables
//Description...: Function send query to databases.
//Syntax........: SQL_FreeVariables($Variable)
//Parameters....: $Variable - variable to freeing.
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 12.03.2015
////////////////////////////////////////////////////////////////////////////
function SQL_FreeVariables($Variable)
{

   mysql_free_result($Variable);

}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_Close
//Description...: Function close last connection.
//Syntax........: SQL_Close()
//Parameters....: None
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 12.03.2015
////////////////////////////////////////////////////////////////////////////
function  SQL_Close()
{

   mysql_close();

}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultImageArray
//Description...: Function search all images user and return results in
//                array.
//Syntax........: SQL_ResultImageArray($Nick)
//Parameters....: $Nick - Name user saved in session.
//Return values.: $Array - Array with results all images user.
//Author .......: £ukasz Kusy
//Modified......: 13.03.2015
////////////////////////////////////////////////////////////////////////////
function  SQL_ResultImageArray($Nick)
{
    $part1 = "SELECT * FROM upimag WHERE nick = '";
    $part2 = "'";
    $query  = $part1.$Nick.$part2;
    $result = mysql_query($query)
    or die("Query failed");
    
    $i = 1;
    
    while ($row = mysql_fetch_array($result))
    {
         $Array[$i][0] = $row["plus"];
         $Array[$i][1] = $row["no"];
         $Array[$i][2] = $row["minus"];
         $Array[$i][3] = $row["country"];
         $Array[$i][4] = $row["age"];
         
         $i++;
    }
    $Array[0][0] = $i;
    
return $Array;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultImageArrayF
//Description...: Function search all images user and return results in
//                array.
//Syntax........: SQL_ResultImageArrayF($Nick)
//Parameters....: $Nick - Name user saved in session.
//Return values.: $Array - Array with results all images user.
//Author .......: £ukasz Kusy
//Modified......: 19.04.2015
////////////////////////////////////////////////////////////////////////////
function  SQL_ResultImageArrayF($Nick)
{
    $part1 = "SELECT * FROM upimag1 WHERE nick = '";
    $part2 = "'";
    $query  = $part1.$Nick.$part2;
    $result = mysql_query($query)
    or die("Query failed");

    $i = 1;

    while ($row = mysql_fetch_array($result))
    {
         $Array[$i][0] = $row["plus"];
         $Array[$i][1] = $row["no"];
         $Array[$i][2] = $row["minus"];
         $Array[$i][3] = $row["country"];
         $Array[$i][4] = $row["age"];

         $i++;
    }
    $Array[0][0] = $i;

return $Array;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultUpdateImage
//Description...: Function exchange image.
//Syntax........: SQL_ResultUpdateImage($Nick,$NameP,$ValueCh,$ValueMn)
//Parameters....: $Nick - Name user saved in session.
//                $NameP - Name column in table(which "image")
//                $ValueCh - Value exchanged the image.
//                $ValueMn - Value profile image.
//Return values.: $Array - Array in which are saved data user.
//Author .......: £ukasz Kusy
//Modified......: 13.03.2015
////////////////////////////////////////////////////////////////////////////
function SQL_ResultUpdateImage($Nick,$NameP,$ValueCh,$ValueMn)
{
echo $Nick."<br>";
echo $NameP."<br>";
echo $ValueCh."<br>";
echo $ValueMn."<br>";
    $query = "UPDATE userimg SET ".$NameP."=".$ValueMn." WHERE nick='".$Nick."'";
    $result = mysql_query($query)
    or die("Query failed");
    
    $query = "UPDATE userimg SET  p1=".$ValueCh." WHERE nick='".$Nick."'";
    $result = mysql_query($query)
    or die("Query failed");

    $part1 = "SELECT * FROM userimg WHERE nick = '";
    $part2 = "'";
    $query  = $part1.$Nick.$part2;
    $result = mysql_query($query)
    or die("Query failed");

return mysql_fetch_array($result);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultDeleteImage
//Description...: Function delete image.
//Syntax........: SQL_ResultDeleteImage($Nick,$NameP,$ValueCh)
//Parameters....: $Nick - Name user saved in session.
//                $NameP - Name column in table(which "image")
//                $ValueCh - Value deleted the image.
//Return values.: $Array - Array in which are saved data user.
//Author .......: £ukasz Kusy
//Modified......: 13.03.2015
////////////////////////////////////////////////////////////////////////////
function SQL_ResultDeleteImage($Nick,$NameP,$ValueCh)
{
    $query = "UPDATE userimg SET  ".$NameP."=0 WHERE nick='".$Nick."'";
    $result = mysql_query($query)
    or die("Query failed");

    $query = "DELETE FROM upimag  WHERE no='".$ValueCh."'";
    $result = mysql_query($query)
    or die("Query failed");

    $part1 = "SELECT * FROM userimg WHERE nick = '";
    $part2 = "'";
    $query  = $part1.$Nick.$part2;
    $result = mysql_query($query)
    or die("Query failed");

return mysql_fetch_array($result);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultDeleteImageF
//Description...: Function delete image.
//Syntax........: SQL_ResultDeleteImageF($Nick,$NameP,$ValueCh)
//Parameters....: $Nick - Name user saved in session.
//                $NameP - Name column in table(which "image")
//                $ValueCh - Value deleted the image.
//Return values.: $Array - Array in which are saved data user.
//Author .......: £ukasz Kusy
//Modified......: 13.03.2015
////////////////////////////////////////////////////////////////////////////
function SQL_ResultDeleteImageF($Nick,$NameP,$ValueCh)
{
    $query = "UPDATE userimg SET  ".$NameP."=0 WHERE nick='".$Nick."'";
    $result = mysql_query($query)
    or die("Query failed");

    $query = "DELETE FROM upimag1  WHERE no='".$ValueCh."'";
    $result = mysql_query($query)
    or die("Query failed");

    $part1 = "SELECT * FROM userimg WHERE nick = '";
    $part2 = "'";
    $query  = $part1.$Nick.$part2;
    $result = mysql_query($query)
    or die("Query failed");

return mysql_fetch_array($result);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_UpdateDateLog
//Description...: Function update last login date.
//Syntax........: SQL_UpdateDateLog($Nick)
//Parameters....: $Nick - Name user saved in session.
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 17.03.2015
////////////////////////////////////////////////////////////////////////////
function SQL_UpdateDateLog($Nick)
{
    $Time = strtotime( date('d-m-Y') );
    $query = "UPDATE users SET lastlog=FROM_UNIXTIME(".$Time.") WHERE nick='".$Nick."'";
    $result = mysql_query($query)
    or die("Query failed");
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultLocalRank
//Description...: Function query the database
//Syntax........: SQL_ResultLocalRank($Country)
//Parameters....: $Country - country
//Return values.: $Result - results
//Author .......: £ukasz Kusy
//Modified......: 21.03.2015
////////////////////////////////////////////////////////////////////////////
function SQL_ResultLocalRank($Country)
{
    $Result = mysql_query("SELECT * FROM upimag WHERE country=".$Country." ORDER BY plus DESC LIMIT 0 , 100")
    or die("Query failed");
    
return $Result;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultGlobalRank
//Description...: Function query the database
//Syntax........: SQL_ResultGlobalRank()
//Parameters....: None
//Return values.: $Result - results
//Author .......: £ukasz Kusy
//Modified......: 21.03.2015
////////////////////////////////////////////////////////////////////////////
function SQL_ResultGlobalRank()
{
    $Result = mysql_query("SELECT * FROM upimag ORDER BY plus DESC LIMIT 0 , 100")
    or die("Query failed");

return $Result;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultLocalRankF
//Description...: Function query the database
//Syntax........: SQL_ResultLocalRankF($Country)
//Parameters....: $Country - country
//Return values.: $Result - results
//Author .......: £ukasz Kusy
//Modified......: 21.03.2015
////////////////////////////////////////////////////////////////////////////
function SQL_ResultLocalRankF($Country)
{
    $Result = mysql_query("SELECT * FROM upimag1 WHERE country=".$Country." ORDER BY plus DESC LIMIT 0 , 100")
    or die("Query failed");

return $Result;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultGlobalRankF
//Description...: Function query the database
//Syntax........: SQL_ResultGlobalRankF()
//Parameters....: None
//Return values.: $Result - results
//Author .......: £ukasz Kusy
//Modified......: 21.03.2015
////////////////////////////////////////////////////////////////////////////
function SQL_ResultGlobalRankF()
{
    $Result = mysql_query("SELECT * FROM upimag1 ORDER BY plus DESC LIMIT 0 , 100")
    or die("Query failed");

return $Result;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_FetchArray
//Description...: Function return array with data on the base of $Result
//Syntax........: SQL_FetchArray($Result)
//Parameters....: $Result - result with function  SQL_ResultGlobalRank or
//                SQL_ResultLocalRank
//Return values.: Array data
//Author .......: £ukasz Kusy
//Modified......: 21.03.2015
////////////////////////////////////////////////////////////////////////////
function SQL_FetchArray($Result)
{
return mysql_fetch_array($Result);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultImageNameArray
//Description...: Function search all images name user and return results in
//                array.
//Syntax........: SQL_ResultImageArray($Nick)
//Parameters....: $Nick - Name user saved in session.
//Return values.: $Array - Array with results all images name user.
//Author .......: £ukasz Kusy
//Modified......: 23.03.2015
////////////////////////////////////////////////////////////////////////////
function  SQL_ResultImageNameArray($Nick)
{
    $part1 = "SELECT * FROM userimg WHERE nick = '";
    $part2 = "'";
    $query  = $part1.$Nick.$part2;
    $result = mysql_query($query)
    or die("Query failed");


    $row = mysql_fetch_array($result);
    
         $Array[0] = 0;
         $Array[1] = $row["p1"];
         $Array[2] = $row["p2"];
         $Array[3] = $row["p3"];
         $Array[4] = $row["p4"];
         $Array[5] = $row["p5"];
         $Array[6] = $row["p6"];
         $Array[7] = $row["p7"];
         $Array[8] = $row["p8"];
         $Array[9] = $row["p9"];
         $Array[10] = $row["p10"];
         
         $Array[11] = $row["p11"];
         $Array[12] = $row["p12"];
         $Array[13] = $row["p13"];
         $Array[14] = $row["p14"];
         $Array[15] = $row["p15"];
         $Array[16] = $row["p16"];
         $Array[17] = $row["p17"];
         $Array[18] = $row["p18"];
         $Array[19] = $row["p19"];
         $Array[20] = $row["p20"];
         
         $Array[21] = $row["p21"];
         $Array[22] = $row["p22"];
         $Array[23] = $row["p23"];
         $Array[24] = $row["p24"];
         $Array[25] = $row["p25"];
         $Array[26] = $row["p26"];
         $Array[27] = $row["p27"];
         $Array[28] = $row["p28"];
         $Array[29] = $row["p29"];
         $Array[30] = $row["p30"];
         
         $Array[31] = $row["p31"];
         $Array[32] = $row["p32"];
         $Array[33] = $row["p33"];
         $Array[34] = $row["p34"];
         $Array[35] = $row["p35"];
         $Array[36] = $row["p36"];
         $Array[37] = $row["p37"];
         $Array[38] = $row["p38"];
         $Array[39] = $row["p39"];
         $Array[40] = $row["p40"];
         
         $Array[41] = $row["p41"];
         $Array[42] = $row["p42"];
         $Array[43] = $row["p43"];
         $Array[44] = $row["p44"];
         $Array[45] = $row["p45"];
         $Array[46] = $row["p46"];
         $Array[47] = $row["p47"];
         $Array[48] = $row["p48"];
         $Array[49] = $row["p49"];
         $Array[50] = $row["p50"];
         
         $Array[51] = $row["p51"];
         $Array[52] = $row["p52"];
         $Array[53] = $row["p53"];
         $Array[54] = $row["p54"];
         $Array[55] = $row["p55"];
         $Array[56] = $row["p56"];
         $Array[57] = $row["p57"];
         $Array[58] = $row["p58"];
         $Array[59] = $row["p59"];
         $Array[60] = $row["p60"];

         /*
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         $Array[] = $row[""];
         
         */

return $Array;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultImageNumber
//Description...: Function return array with date of image.
//Syntax........: SQL_ResultImageNumber($Name)
//Parameters....: $Name - number of image
//Return values.: $Array - Array with results
//Author .......: £ukasz Kusy
//Modified......: 09.04.2015
////////////////////////////////////////////////////////////////////////////
function  SQL_ResultImageNumber($Name)
{
   $result = mysql_query("SELECT * FROM upimag where no=".$Name)
     or die("Query failed");

     $Array = mysql_fetch_array($result);

return $Array;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_ResultImageNumberF
//Description...: Function return array with date of image.
//Syntax........: SQL_ResultImageNumberF($Name)
//Parameters....: $Name - number of image
//Return values.: $Array - Array with results
//Author .......: £ukasz Kusy
//Modified......: 19.04.2015
////////////////////////////////////////////////////////////////////////////
function  SQL_ResultImageNumberF($Name)
{
   $result = mysql_query("SELECT * FROM upimag1 where no=".$Name)
     or die("Query failed");

     $Array = mysql_fetch_array($result);

return $Array;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_AddRecordRank
//Description...: Function add record to table
//Syntax........: SQL_AddRecordRank($Number,$Nick,$Country,$Date)
//Parameters....: $Number - number of image
//                $Nick - nick
//                $Country - country
//                $Date - birthday
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 17.04.2015
////////////////////////////////////////////////////////////////////////////
function  SQL_AddRecordRank($Number,$Nick,$Country,$Date)
{
   mysql_query("INSERT INTO upimag VALUES(0,".$Number.",'".$Nick."',0,".$Country.",FROM_UNIXTIME(".$Date.") )");
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_AddRecordRankF
//Description...: Function add record to table
//Syntax........: SQL_AddRecordRankF($Number,$Nick,$Country,$Date)
//Parameters....: $Number - number of image
//                $Nick - nick
//                $Country - country
//                $Date - birthday
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 19.04.2015
////////////////////////////////////////////////////////////////////////////
function  SQL_AddRecordRankF($Number,$Nick,$Country,$Date)
{
   mysql_query("INSERT INTO upimag1 VALUES(0,".$Number.",'".$Nick."',0,".$Country.",FROM_UNIXTIME(".$Date.") )");
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_UpdateImage
//Description...: Function exchange image.
//Syntax........: SQL_UpdateImage($Nick,$NameP,$Number)
//Parameters....: $Nick - Name user saved in session.
//                $NameP - Name column in table(which "image")
//                $Number - number of image
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 18.04.2015
////////////////////////////////////////////////////////////////////////////
function SQL_UpdateImage($Nick,$NameP,$Number)
{
    $query = "UPDATE userimg SET ".$NameP."=".$Number." WHERE nick='".$Nick."'";
    mysql_query($query);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_UpdateRankMinus
//Description...: Function update ranking.
//Syntax........: SQL_UpdateRankMinus($Image,$Count)
//Parameters....: $Image - number of image
//                $Count - count of minuses
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 22.04.2015
////////////////////////////////////////////////////////////////////////////
function SQL_UpdateRankMinus($Image,$Count)
{
  mysql_query("update upimag set minus= minus + ".$Count." where no=".$Image)
  or die("Query failed");
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_UpdateRankMinusF
//Description...: Function update ranking.
//Syntax........: SQL_UpdateRankMinusF($Image,$Count)
//Parameters....: $Image - number of image
//                $Count - count of minuses
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 22.04.2015
////////////////////////////////////////////////////////////////////////////
function SQL_UpdateRankMinusF($Image,$Count)
{
  mysql_query("update upimag1 set minus= minus + ".$Count." where no=".$Image)
  or die("Query failed");
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_UpdateRankPlus
//Description...: Function update ranking.
//Syntax........: SQL_UpdateRankPlus($Image,$Count)
//Parameters....: $Image - number of image
//                $Count - count of minuses
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 22.04.2015
////////////////////////////////////////////////////////////////////////////
function SQL_UpdateRankPlus($Image,$Count)
{
  mysql_query("update upimag set plus= plus + ".$Count." where no=".$Image)
  or die("Query failed");
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SQL_UpdateRankPlusF
//Description...: Function update ranking.
//Syntax........: SQL_UpdateRankPlusF($Image,$Count)
//Parameters....: $Image - number of image
//                $Count - count of minuses
//Return values.: None
//Author .......: £ukasz Kusy
//Modified......: 22.04.2015
////////////////////////////////////////////////////////////////////////////
function SQL_UpdateRankPlusF($Image,$Count)
{
  mysql_query("update upimag1 set plus= plus + ".$Count." where no=".$Image)
  or die("Query failed");
}
////////////////////////////////////////////////////////////////////////////




?>
