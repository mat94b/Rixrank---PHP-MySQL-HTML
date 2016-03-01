<?php

include('../bin/lib/Constans.php');
include('../bin/lib/XML.php');
include('../bin/lib/MySQL.php');




SQL_Connect();
for($i = 1; $i <=261 ; $i++){
     $Result = SQL_ResultLocalRank($i);
     $Result2 = SQL_ResultLocalRankF($i);

$File = "../data/ranking/local/male/".$i.".xml";
$File2 = "../data/ranking/local/female/".$i.".xml";
$doc =  new SimpleXMLElement("<ranks> </ranks>");
    
while ($Row = SQL_FetchArray($Result))
    {

    $rank = $doc->addChild('rank');
    $rank->addChild('plus', $Row['plus']);
    $rank->addChild('no', $Row['no']);
    $rank->addChild('nick', $Row['nick']);
    $rank->addChild('minus', $Row['minus']);
    $rank->addChild('country', $Row['country']);
    $rank->addChild('age', $Row['age']);
    }
$doc->asXML($File2);

$doc =  new SimpleXMLElement("<ranks> </ranks>");

while ($Row2 = SQL_FetchArray($Result2))
    {

    $rank = $doc->addChild('rank');
    $rank->addChild('plus', $Row2['plus']);
    $rank->addChild('no', $Row2['no']);
    $rank->addChild('nick', $Row2['nick']);
    $rank->addChild('minus', $Row2['minus']);
    $rank->addChild('country', $Row2['country']);
    $rank->addChild('age', $Row2['age']);
    }
$doc->asXML($File);
}



        
            $Result2 = SQL_ResultGlobalRankF();
            
            $doc =  new SimpleXMLElement("<ranks> </ranks>");

            while ($Row2 = SQL_FetchArray($Result2))
            {

            $rank = $doc->addChild('rank');
            $rank->addChild('plus', $Row2['plus']);
            $rank->addChild('no', $Row2['no']);
            $rank->addChild('nick', $Row2['nick']);
            $rank->addChild('minus', $Row2['minus']);
            $rank->addChild('country', $Row2['country']);
            $rank->addChild('age', $Row2['age']);
            }
            $doc->asXML("../data/ranking/global/male.xml");
            
       
     
     
       
            $Result2 = SQL_ResultGlobalRank();

            $doc =  new SimpleXMLElement("<ranks> </ranks>");

            while ($Row2 = SQL_FetchArray($Result2))
            {

            $rank = $doc->addChild('rank');
            $rank->addChild('plus', $Row2['plus']);
            $rank->addChild('no', $Row2['no']);
            $rank->addChild('nick', $Row2['nick']);
            $rank->addChild('minus', $Row2['minus']);
            $rank->addChild('country', $Row2['country']);
            $rank->addChild('age', $Row2['age']);
            }
            $doc->asXML("../data/ranking/global/female.xml");

        SQL_Close();
     

