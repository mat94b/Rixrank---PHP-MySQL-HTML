<?php
////////////////////////////////////////////////////////////////////////////
//Cookies library///////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
//Author...........: �ukasz Kusy
//Last update data.: 25.03.2015
//Version..........: 1.0.0.0
//Language.........: English
////////////////////////////////////////////////////////////////////////////
//CURRENT///////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
// Cookies_SearchNick
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////





//Function /////////////////////////////////////////////////////////////////
//Name..........: Cookies_SearchNick
//Description...: Function is responsible for direct variable, instead send
//                varialbe POST method.
//Syntax........: Cookies_SearchNick($Nick)
//Parameters....: $Nick - nick
//Return values.: None
//Author .......: �ukasz Kusy
//Modified......: 25.03.2015
////////////////////////////////////////////////////////////////////////////
function Cookies_SearchNick($Nick)
{
setcookie('searchnick', $Nick, time()+31);
}
////////////////////////////////////////////////////////////////////////////
?>
