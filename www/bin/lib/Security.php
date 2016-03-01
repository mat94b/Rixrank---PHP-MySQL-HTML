<?php
////////////////////////////////////////////////////////////////////////////
//Security library//////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
//Author...........: £ukasz Kusy
//Last update data.: 14.03.2015
//Version..........: 1.0.0.0
//Language.........: English
////////////////////////////////////////////////////////////////////////////
//CURRENT///////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
// SecurityString
// SecurityStringNick
// SecurityStringPassword
// SecurityStringNumber
// SecurityStringBool
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////





//Function /////////////////////////////////////////////////////////////////
//Name..........: SecurityString
//Description...: Function validate data.
//Syntax........: SecurityString($String)
//Parameters....: $String - validate string
//Return values.: $String - corrected $String, isn't dangerous for databases
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function SecurityString($String)
{
  $String = str_replace("&", "", $String);
  $String = str_replace("(", "", $String);
  $String = str_replace(")", "", $String);
  $String = str_replace("[", "", $String);
  $String = str_replace("]", "", $String);
  $String = str_replace("{", "", $String);
  $String = str_replace("}", "", $String);
  $String = str_replace("\\", "", $String);
  $String = str_replace("<", "", $String);
  $String = str_replace(">", "", $String);
  $String = str_replace("\"", "", $String);
  $String = str_replace("'", "", $String);
  $String = str_replace("=", "", $String);

return $String;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SecurityStringNick
//Description...: Function validate nick name.
//Syntax........: SecurityStringNick($String)
//Parameters....: $String - validate string
//Return values.: TRUE if $String is correct
//                FALSE if $String is incorrect
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function SecurityStringNick($String)
{
  if (!preg_match("/^[-0-9A-Z_ @sr\n]+$/i", $String) && !preg_match("/^[-0-9A-Z_ @s\n]+$/i", $String))
  {
   return false;
  }

return true;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SecurityStringPassword
//Description...: Function validate password .
//Syntax........: SecurityStringPassword($String)
//Parameters....: $String - validate string
//Return values.: TRUE if $String is correct
//                FALSE if $String is incorrect
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function SecurityStringPassword($String)
{
  if (!preg_match("/^[-0-9A-Z_ @sr\n]+$/i", $String) && !preg_match("/^[-0-9A-Z_ @s\n]+$/i", $String))
  {
   return false;
  }

return true;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SecurityStringNumber
//Description...: Function validate data .
//Syntax........: SecurityStringNumber($Number)
//Parameters....: $String - validate string
//Return values.: TRUE if $String contain only digits
//                FALSE if $String don't contain only digits
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function SecurityStringNumber($Number)
{
return preg_match('/[0-9]/', $Number);
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SecurityStringBool
//Description...: Function validate data.
//Syntax........: SecurityStringBool($String)
//Parameters....: $String - validate string
//Return values.: $Bool TRUE - correct string FALSE - incorrect string
//Author .......: £ukasz Kusy
//Modified......: 23.03.2015
////////////////////////////////////////////////////////////////////////////
function SecurityStringBool($String)
{
$Bool = true;
if (strpos($String, "&" ))
    $Bool = false;
if (strpos($String, "(" ))
    $Bool = false;
if (strpos($String, ")" ))
    $Bool = false;
if (strpos($String, "[" ))
    $Bool = false;
if (strpos($String, "]" ))
    $Bool = false;
if (strpos($String, "{" ))
    $Bool = false;
if (strpos($String, "}" ))
    $Bool = false;
if (strpos($String, "\\" ))
    $Bool = false;
if (strpos($String, "<" ))
    $Bool = false;
if (strpos($String, ">" ))
    $Bool = false;
if (strpos($String, "\"" ))
    $Bool = false;
if (strpos($String, "'" ))
    $Bool = false;
if (strpos($String, "=" ))
    $Bool = false;

return $Bool;
}
////////////////////////////////////////////////////////////////////////////



//Function /////////////////////////////////////////////////////////////////
//Name..........: SecurityString
//Description...: Function validate data.
//Syntax........: SecurityString($String)
//Parameters....: $String - validate string
//Return values.: $String - corrected $String, isn't dangerous for databases
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function SecurityStringComment($String)
{
  $String = str_replace("&", "", $String);
  //$String = str_replace("(", "", $String);
  //$String = str_replace(")", "", $String);
  //$String = str_replace("[", "", $String);
  //$String = str_replace("]", "", $String);
  //$String = str_replace("{", "", $String);
  //$String = str_replace("}", "", $String);
  $String = str_replace("\\", "", $String);
  $String = str_replace("<", "", $String);
  $String = str_replace(">", "", $String);
  //$String = str_replace("\"", "", $String);
  //$String = str_replace("'", "", $String);
  //$String = str_replace("=", "", $String);
  $String = str_replace("http", "", $String);
  $String = str_replace("www", "", $String);

return $String;
}
////////////////////////////////////////////////////////////////////////////

//Function /////////////////////////////////////////////////////////////////
//Name..........: SecurityString
//Description...: Function validate data.
//Syntax........: SecurityString($String)
//Parameters....: $String - validate string
//Return values.: $String - corrected $String, isn't dangerous for databases
//Author .......: £ukasz Kusy
//Modified......: 14.03.2015
////////////////////////////////////////////////////////////////////////////
function SecurityText($String)
{
  $String = str_replace("<", " ", $String);
  $String = str_replace(">", " ", $String);
  $String = str_replace("&", " ", $String);
  $String = str_replace("\n", " ", $String);
  $String = str_replace("\r", " ", $String);
  $String = str_replace("\\", " ", $String);
  $String = str_replace("\"", " ", $String);
  $String = str_replace("'", " ", $String);
  $String = str_replace("http", " ", $String);
  $String = str_replace("www", " ", $String);

return $String;
}
////////////////////////////////////////////////////////////////////////////

function SecurityEncrypt( $q ) {
    $cryptKey  = 'cT34n7Yd45MmmIX9h5v6P';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

function SecurityDecrypt( $q ) {
    $cryptKey  = 'cT34n7Yd45MmmIX9h5v6P';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}
?>