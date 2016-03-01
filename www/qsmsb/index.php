<?php

include('../bin/lib/HTML.php');
include('../bin/lib/Constans.php');
include('../bin/lib/XML.php');
include('../bin/lib/MySQL.php');
include('../bin/lib/Alarm.php');

$SEC = 0;
if(isset($_POST['1qw3']) && isset($_POST['1qw8']))
{
$SEC = 1;
   if(isset($_POST['qw1'])) $SEC = 0;
   if(isset($_POST['qw2'])) $SEC = 0;
   if(isset($_POST['qw3'])) $SEC = 0;
   if(isset($_POST['qw4'])) $SEC = 0;
   if(isset($_POST['qw5'])) $SEC = 0;
   if(isset($_POST['qw6'])) $SEC = 0;
   if(isset($_POST['qw7'])) $SEC = 0;
   if(isset($_POST['qw8'])) $SEC = 0;
   if(isset($_POST['qw9'])) $SEC = 0;
   if(isset($_POST['qw10'])) $SEC = 0;
   
   if(isset($_POST['1qw1'])) $SEC = 0;
   if(isset($_POST['1qw2'])) $SEC = 0;
   //if(isset($_POST['1qw3'])) $SEC = 0;
   if(isset($_POST['1qw4'])) $SEC = 0;
   if(isset($_POST['1qw5'])) $SEC = 0;
   if(isset($_POST['1qw6'])) $SEC = 0;
   if(isset($_POST['1qw7'])) $SEC = 0;
   //if(isset($_POST['1qw8'])) $SEC = 0;
   if(isset($_POST['1qw9'])) $SEC = 0;
   if(isset($_POST['1qw10'])) $SEC = 0;
   
   if(isset($_POST['2qw1'])) $SEC = 0;
   if(isset($_POST['2qw2'])) $SEC = 0;
   if(isset($_POST['2qw3'])) $SEC = 0;
   if(!isset($_POST['2qw4'])) $SEC = 0;
   if(isset($_POST['2qw5'])) $SEC = 0;
   if(isset($_POST['2qw6'])) $SEC = 0;
   if(isset($_POST['2qw7'])) $SEC = 0;
   if(isset($_POST['2qw8'])) $SEC = 0;
   if(isset($_POST['2qw9'])) $SEC = 0;
   if(isset($_POST['2qw10'])) $SEC = 0;
   
   if(isset($_POST['3qw1'])) $SEC = 0;
   if(isset($_POST['3qw2'])) $SEC = 0;
   if(isset($_POST['3qw3'])) $SEC = 0;
   if(isset($_POST['3qw4'])) $SEC = 0;
   if(isset($_POST['3qw5'])) $SEC = 0;
   if(isset($_POST['3qw6'])) $SEC = 0;
   if(isset($_POST['3qw7'])) $SEC = 0;
   if(isset($_POST['3qw8'])) $SEC = 0;
   if(isset($_POST['3qw9'])) $SEC = 0;
   if(isset($_POST['3qw10'])) $SEC = 0;
   
   if(isset($_POST['4qw1'])) $SEC = 0;
   if(isset($_POST['4qw2'])) $SEC = 0;
   if(isset($_POST['4qw3'])) $SEC = 0;
   if(isset($_POST['4qw4'])) $SEC = 0;
   if(isset($_POST['4qw5'])) $SEC = 0;
   if(isset($_POST['4qw6'])) $SEC = 0;
   if(isset($_POST['4qw7'])) $SEC = 0;
   if(isset($_POST['4qw8'])) $SEC = 0;
   if(isset($_POST['4qw9'])) $SEC = 0;
   if(isset($_POST['4qw10'])) $SEC = 0;
   
   if(isset($_POST['5qw1'])) $SEC = 0;
   if(isset($_POST['5qw2'])) $SEC = 0;
   if(!isset($_POST['5qw3'])) $SEC = 0;
   if(isset($_POST['5qw4'])) $SEC = 0;
   if(isset($_POST['5qw5'])) $SEC = 0;
   if(isset($_POST['5qw6'])) $SEC = 0;
   if(!isset($_POST['5qw7'])) $SEC = 0;
   if(isset($_POST['5qw8'])) $SEC = 0;
   if(isset($_POST['5qw9'])) $SEC = 0;
   if(isset($_POST['5qw10'])) $SEC = 0;
   
   if(isset($_POST['6qw1'])) $SEC = 0;
   if(isset($_POST['6qw2'])) $SEC = 0;
   if(isset($_POST['6qw3'])) $SEC = 0;
   if(isset($_POST['6qw4'])) $SEC = 0;
   if(isset($_POST['6qw5'])) $SEC = 0;
   if(isset($_POST['6qw6'])) $SEC = 0;
   if(isset($_POST['6qw7'])) $SEC = 0;
   if(isset($_POST['6qw8'])) $SEC = 0;
   if(isset($_POST['6qw9'])) $SEC = 0;
   if(isset($_POST['6qw10'])) $SEC = 0;
   
   if(isset($_POST['7qw1'])) $SEC = 0;
   if(isset($_POST['7qw2'])) $SEC = 0;
   if(isset($_POST['7qw3'])) $SEC = 0;
   if(isset($_POST['7qw4'])) $SEC = 0;
   if(!isset($_POST['7qw5'])) $SEC = 0;
   if(isset($_POST['7qw6'])) $SEC = 0;
   if(isset($_POST['7qw7'])) $SEC = 0;
   if(isset($_POST['7qw8'])) $SEC = 0;
   if(isset($_POST['7qw9'])) $SEC = 0;
   if(isset($_POST['7qw10'])) $SEC = 0;
   
   if(isset($_POST['8qw1'])) $SEC = 0;
   if(isset($_POST['8qw2'])) $SEC = 0;
   if(isset($_POST['8qw3'])) $SEC = 0;
   if(isset($_POST['8qw4'])) $SEC = 0;
   if(isset($_POST['8qw5'])) $SEC = 0;
   if(isset($_POST['8qw6'])) $SEC = 0;
   if(isset($_POST['8qw7'])) $SEC = 0;
   if(isset($_POST['8qw8'])) $SEC = 0;
   if(!isset($_POST['8qw9'])) $SEC = 0;
   if(isset($_POST['8qw10'])) $SEC = 0;
   
   if(isset($_POST['9qw1'])) $SEC = 0;
   if(isset($_POST['9qw2'])) $SEC = 0;
   if(isset($_POST['9qw3'])) $SEC = 0;
   if(isset($_POST['9qw4'])) $SEC = 0;
   if(isset($_POST['9qw5'])) $SEC = 0;
   if(isset($_POST['9qw6'])) $SEC = 0;
   if(isset($_POST['9qw7'])) $SEC = 0;
   if(isset($_POST['9qw8'])) $SEC = 0;
   if(isset($_POST['9qw9'])) $SEC = 0;
   if(isset($_POST['9qw10'])) $SEC = 0;
}
if(isset($_POST['up']))
{
$SEC = 1;
SQL_Connect();
     $Result = SQL_ResultLocalRank($_POST['up']);
     $Result2 = SQL_ResultLocalRankF($_POST['up']);

$File = "../data/ranking/local/male/".$_POST['up'].".xml";
$File2 = "../data/ranking/local/female/".$_POST['up'].".xml";
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

SQL_Close();
}
if(isset($_POST['upg']))
{
$SEC = 1;
     if($_POST['upg'] == "male")
     {
        SQL_Connect();
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
            
        SQL_Close();
     }
     if($_POST['upg'] == "female")
     {
        SQL_Connect();
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
     }
}

if(isset($_POST['alarm']))
{
$SEC = 1;
    if($_POST['alarm'] == "run_main") Alarm_Run("../bin/alarm/",$ALARM_MAIN);
    if($_POST['alarm'] == "end") Alarm_End("../bin/alarm/",$ALARM_MAIN);
}

HTML_Xmlns();
HTML_HeadStart();
HTML_Title("Config - Rixrank");
HTML_HeadEnd();
HTML_BodyStart();
HTML_CenterStart();

     if($SEC == 0)
     {
     
     
     HTML_FormStart("../qsmsb/");
          HTML_FormCheckboxChoice("noneclass","qw1","true",0,0);
          HTML_FormCheckboxChoice("noneclass","qw2","true",0,0);
          HTML_FormCheckboxChoice("noneclass","qw3","true",0,0);
          HTML_FormCheckboxChoice("noneclass","qw4","true",0,0);
          HTML_FormCheckboxChoice("noneclass","qw5","true",0,0);
          HTML_FormCheckboxChoice("noneclass","qw6","true",0,0);
          HTML_FormCheckboxChoice("noneclass","qw7","true",0,0);
          HTML_FormCheckboxChoice("noneclass","qw8","true",0,0);
          HTML_FormCheckboxChoice("noneclass","qw9","true",0,0);
          HTML_FormCheckboxChoice("noneclass","qw10","true",0,0);
          HTML_NL(1);
          
          HTML_FormCheckboxChoice("noneclass","1qw1","true",0,0);
          HTML_FormCheckboxChoice("noneclass","1qw2","true",0,0);
          HTML_FormCheckboxChoice("noneclass","1qw3","true",0,0);
          HTML_FormCheckboxChoice("noneclass","1qw4","true",0,0);
          HTML_FormCheckboxChoice("noneclass","1qw5","true",0,0);
          HTML_FormCheckboxChoice("noneclass","1qw6","true",0,0);
          HTML_FormCheckboxChoice("noneclass","1qw7","true",0,0);
          HTML_FormCheckboxChoice("noneclass","1qw8","true",0,0);
          HTML_FormCheckboxChoice("noneclass","1qw9","true",0,0);
          HTML_FormCheckboxChoice("noneclass","1qw10","true",0,0);
          HTML_NL(1);
          
          HTML_FormCheckboxChoice("noneclass","2qw1","true",0,0);
          HTML_FormCheckboxChoice("noneclass","2qw2","true",0,0);
          HTML_FormCheckboxChoice("noneclass","2qw3","true",0,0);
          HTML_FormCheckboxChoice("noneclass","2qw4","true",0,0);
          HTML_FormCheckboxChoice("noneclass","2qw5","true",0,0);
          HTML_FormCheckboxChoice("noneclass","2qw6","true",0,0);
          HTML_FormCheckboxChoice("noneclass","2qw7","true",0,0);
          HTML_FormCheckboxChoice("noneclass","2qw8","true",0,0);
          HTML_FormCheckboxChoice("noneclass","2qw9","true",0,0);
          HTML_FormCheckboxChoice("noneclass","2qw10","true",0,0);
          HTML_NL(1);
          
          HTML_FormCheckboxChoice("noneclass","3qw1","true",0,0);
          HTML_FormCheckboxChoice("noneclass","3qw2","true",0,0);
          HTML_FormCheckboxChoice("noneclass","3qw3","true",0,0);
          HTML_FormCheckboxChoice("noneclass","3qw4","true",0,0);
          HTML_FormCheckboxChoice("noneclass","3qw5","true",0,0);
          HTML_FormCheckboxChoice("noneclass","3qw6","true",0,0);
          HTML_FormCheckboxChoice("noneclass","3qw7","true",0,0);
          HTML_FormCheckboxChoice("noneclass","3qw8","true",0,0);
          HTML_FormCheckboxChoice("noneclass","3qw9","true",0,0);
          HTML_FormCheckboxChoice("noneclass","3qw10","true",0,0);
          HTML_NL(1);
          
          HTML_FormCheckboxChoice("noneclass","4qw1","true",0,0);
          HTML_FormCheckboxChoice("noneclass","4qw2","true",0,0);
          HTML_FormCheckboxChoice("noneclass","4qw3","true",0,0);
          HTML_FormCheckboxChoice("noneclass","4qw4","true",0,0);
          HTML_FormCheckboxChoice("noneclass","4qw5","true",0,0);
          HTML_FormCheckboxChoice("noneclass","4qw6","true",0,0);
          HTML_FormCheckboxChoice("noneclass","4qw7","true",0,0);
          HTML_FormCheckboxChoice("noneclass","4qw8","true",0,0);
          HTML_FormCheckboxChoice("noneclass","4qw9","true",0,0);
          HTML_FormCheckboxChoice("noneclass","4qw10","true",0,0);
          HTML_NL(1);
          
          HTML_FormCheckboxChoice("noneclass","5qw1","true",0,0);
          HTML_FormCheckboxChoice("noneclass","5qw2","true",0,0);
          HTML_FormCheckboxChoice("noneclass","5qw3","true",0,0);
          HTML_FormCheckboxChoice("noneclass","5qw4","true",0,0);
          HTML_FormCheckboxChoice("noneclass","5qw5","true",0,0);
          HTML_FormCheckboxChoice("noneclass","5qw6","true",0,0);
          HTML_FormCheckboxChoice("noneclass","5qw7","true",0,0);
          HTML_FormCheckboxChoice("noneclass","5qw8","true",0,0);
          HTML_FormCheckboxChoice("noneclass","5qw9","true",0,0);
          HTML_FormCheckboxChoice("noneclass","5qw10","true",0,0);
          HTML_NL(1);
          
          HTML_FormCheckboxChoice("noneclass","6qw1","true",0,0);
          HTML_FormCheckboxChoice("noneclass","6qw2","true",0,0);
          HTML_FormCheckboxChoice("noneclass","6qw3","true",0,0);
          HTML_FormCheckboxChoice("noneclass","6qw4","true",0,0);
          HTML_FormCheckboxChoice("noneclass","6qw5","true",0,0);
          HTML_FormCheckboxChoice("noneclass","6qw6","true",0,0);
          HTML_FormCheckboxChoice("noneclass","6qw7","true",0,0);
          HTML_FormCheckboxChoice("noneclass","6qw8","true",0,0);
          HTML_FormCheckboxChoice("noneclass","6qw9","true",0,0);
          HTML_FormCheckboxChoice("noneclass","6qw10","true",0,0);
          HTML_NL(1);
          
          HTML_FormCheckboxChoice("noneclass","7qw1","true",0,0);
          HTML_FormCheckboxChoice("noneclass","7qw2","true",0,0);
          HTML_FormCheckboxChoice("noneclass","7qw3","true",0,0);
          HTML_FormCheckboxChoice("noneclass","7qw4","true",0,0);
          HTML_FormCheckboxChoice("noneclass","7qw5","true",0,0);
          HTML_FormCheckboxChoice("noneclass","7qw6","true",0,0);
          HTML_FormCheckboxChoice("noneclass","7qw7","true",0,0);
          HTML_FormCheckboxChoice("noneclass","7qw8","true",0,0);
          HTML_FormCheckboxChoice("noneclass","7qw9","true",0,0);
          HTML_FormCheckboxChoice("noneclass","7qw10","true",0,0);
          HTML_NL(1);
          
          HTML_FormCheckboxChoice("noneclass","8qw1","true",0,0);
          HTML_FormCheckboxChoice("noneclass","8qw2","true",0,0);
          HTML_FormCheckboxChoice("noneclass","8qw3","true",0,0);
          HTML_FormCheckboxChoice("noneclass","8qw4","true",0,0);
          HTML_FormCheckboxChoice("noneclass","8qw5","true",0,0);
          HTML_FormCheckboxChoice("noneclass","8qw6","true",0,0);
          HTML_FormCheckboxChoice("noneclass","8qw7","true",0,0);
          HTML_FormCheckboxChoice("noneclass","8qw8","true",0,0);
          HTML_FormCheckboxChoice("noneclass","8qw9","true",0,0);
          HTML_FormCheckboxChoice("noneclass","8qw10","true",0,0);
          HTML_NL(1);
          
          HTML_FormCheckboxChoice("noneclass","9qw1","true",0,0);
          HTML_FormCheckboxChoice("noneclass","9qw2","true",0,0);
          HTML_FormCheckboxChoice("noneclass","9qw3","true",0,0);
          HTML_FormCheckboxChoice("noneclass","9qw4","true",0,0);
          HTML_FormCheckboxChoice("noneclass","9qw5","true",0,0);
          HTML_FormCheckboxChoice("noneclass","9qw6","true",0,0);
          HTML_FormCheckboxChoice("noneclass","9qw7","true",0,0);
          HTML_FormCheckboxChoice("noneclass","9qw8","true",0,0);
          HTML_FormCheckboxChoice("noneclass","9qw9","true",0,0);
          HTML_FormCheckboxChoice("noneclass","9qw10","true",0,0);
          HTML_NL(1);
          
          
          HTML_NL(1);
          HTML_FormAddButton("none","submit","  ");
     HTML_FormEnd();
     }
     else
     {
         HTML_FormStart("../qsmsb/");
              HTML_FormAddInput("noneclass","hidden","alarm","run_main");
              HTML_FormAddButton("none","submit","Run_MAIN_ALARM");
         HTML_FormEnd();
         
         HTML_FormStart("../qsmsb/");
              HTML_FormAddInput("noneclass","hidden","alarm","end");
              HTML_FormAddButton("none","submit","End_ALL_ALARMS");
         HTML_FormEnd();
     
     HTML_TableStart();
          HTML_TableRowStart();
          
               HTML_TableColStart("yellow");
                    HTML_Text("Sex (GLOBAL)");
               HTML_TableColEnd();
               
               HTML_TableColStart("yellow");
                    HTML_Text("Last update");
               HTML_TableColEnd();
               
               HTML_TableColStart("yellow");
                    HTML_Text("Update");
               HTML_TableColEnd();
               
          HTML_TableRowEnd();
          
          HTML_TableRowStart();

               HTML_TableColStart("orange");
                    HTML_Text("Male");
               HTML_TableColEnd();

               $time = filemtime("../data/ranking/global/male.xml");
               $date = date("d-m-Y", $time);
               $COLOR = "red";
               if($date == date('d-m-Y')) $COLOR = "green";

               HTML_TableColStart($COLOR);
                    HTML_Text($date );
               HTML_TableColEnd();
               
               HTML_TableColStart("orange");
                    HTML_FormStart("../qsmsb/");
                         HTML_FormAddInput("noneclass","hidden","upg","male");
                         HTML_FormAddButton("none","submit","Update");
                    HTML_FormEnd();
               HTML_TableColEnd();
          HTML_TableRowEnd();
          
          HTML_TableRowStart();

               HTML_TableColStart("orange");
                    HTML_Text("Female");
               HTML_TableColEnd();

               $time = filemtime("../data/ranking/global/female.xml");
               $date = date("d-m-Y", $time);
               $COLOR = "red";
               if($date == date('d-m-Y')) $COLOR = "green";

               HTML_TableColStart($COLOR);
                    HTML_Text($date );
               HTML_TableColEnd();

               HTML_TableColStart("orange");
                    HTML_FormStart("../qsmsb/");
                         HTML_FormAddInput("noneclass","hidden","upg","female");
                         HTML_FormAddButton("none","submit","Update");
                    HTML_FormEnd();
               HTML_TableColEnd();
          HTML_TableRowEnd();
          
     HTML_TableEnd();
     
     HTML_NL(1);
     
     HTML_TableStart();
     
          HTML_TableRowStart();
               HTML_TableColStart("yellow");
                    HTML_Text("Country");
               HTML_TableColEnd();
               HTML_TableColStart("yellow");
                    HTML_Text("Male");
               HTML_TableColEnd();
               HTML_TableColStart("yellow");
                    HTML_Text("Female");
               HTML_TableColEnd();
               HTML_TableColStart("yellow");
                    HTML_Text("Update");
               HTML_TableColEnd();
          HTML_TableRowEnd();
          
          for ($i = 0 ; $i<261 ; $i++)
          {
          HTML_TableRowStart();
               $time = filemtime("../data/ranking/local/male/".($i+1).".xml");
               $date = date("d-m-Y", $time);
               $COLOR = "red";
               if($date == date('d-m-Y')) $COLOR = "green";
               HTML_TableColStart("orange");
                    HTML_Text($COUNTRY_FLAG_[$i]);
               HTML_TableColEnd();
               HTML_TableColStart($COLOR);
                    HTML_Text($date);
               HTML_TableColEnd();
               HTML_TableColStart($COLOR);
                    HTML_Text($date);
               HTML_TableColEnd();
               HTML_TableColStart("orange");
                    HTML_FormStart("../qsmsb/");
                         HTML_FormAddInput("noneclass","hidden","up",($i+1));
                         HTML_FormAddButton("none","submit","Update");
                    HTML_FormEnd();
               HTML_TableColEnd();
          HTML_TableRowEnd();
          }
          
          
     HTML_TableEnd();
     }
     
     
HTML_BodyEnd();

?>