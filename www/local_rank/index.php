<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
     session_start();
     if (!isset($_SESSION['USR'])) header("Location: ../");
     if ($_SESSION['USRT'] == 2) header("Location: ../settings/");

include('../bin/lib/HTML.php');
include('../bin/lib/DateTime.php');
include('../bin/lib/XML.php');
include('../bin/lib/File.php');

HTML_Xmlns();
HTML_HeadStart();

     HTML_Title("Local Rank - Rixrank");
     
     HTML_CSS("../my_profile/sProfile.css");
     HTML_CSS("sLocalRank.css");
     HTML_CSS("../bin/sFoot.css");

HTML_HeadEnd();
HTML_BodyStart();

include('../data/menu.php');
HTML_DivStart("big_box");

     HTML_DivStart("box_main");
          HTML_DivStart("box_rank_female");
               $Counter = 1;
               
               $FileXML = XML_Load("../data/ranking/local/female/".$_SESSION['USRC'].".xml");
               foreach ($FileXML->rank as $rank)
               {
                    HTML_DivStart("box_top1");
                    
                         HTML_DivStart("hed_text");
                              HTML_Text($Counter);
                         HTML_DivEnd();
                         
                         HTML_DivStart("box_photo");
                         
                              HTML_AddImageSizeName("../upload_images/".File_NameFolder($rank->no)."/".$rank->no.".jpg",70,87,"rank_photo","none");
                              
                              HTML_DivStart("butt");
                                   HTML_FormStart("../search/");
                                        HTML_FormAddInput("none","hidden","nick",$rank->nick);
                                        HTML_FormAddButton("n","submit",$rank->nick);
                                   HTML_FormEnd();
                              HTML_DivEnd();
                              
                              HTML_DivStart("pluses");
                                   HTML_DivStart("pluses_text");
                                        HTML_Text("Rank");
                                   HTML_DivEnd();
                                   
                                   HTML_Text($rank->plus);
                              HTML_DivEnd();
                              
                              HTML_DivStart("ages");
                                   HTML_DivStart("ages_text");
                                        $Date = DT_Convert($rank->age);
                                        $_Date = DT_Explode($Date);
                                        $Age = DT_Age($_Date[0], $_Date[1], $_Date[2]);
                                   
                                        HTML_CenterStart();
                                             HTML_Text("Age");
                                        HTML_CenterEnd();
                                   HTML_DivEnd();
                              
                                   HTML_CenterStart();
                                        HTML_Text("  ".$Age."  ");
                                   HTML_CenterEnd();
                              HTML_DivEnd();
                              
                         HTML_DivEnd();
                         
                    HTML_DivEnd();
                    $Counter++;
               }
     HTML_DivEnd();

     HTML_DivStart("box_main");
          HTML_DivStart("box_rank_male");
          $Counter = 1;

          $FileXML = XML_Load("../data/ranking/local/male/".$_SESSION['USRC'].".xml");
          foreach ($FileXML->rank as $rank)
          {
               HTML_DivStart("box_top1");
               
                    HTML_DivStart("hed_text");
                         HTML_Text($Counter);
                    HTML_DivEnd();
                    
                    HTML_DivStart("box_photo");
                    
                         HTML_AddImageSizeName("../upload_images1/".File_NameFolder($rank->no)."/".$rank->no.".jpg",70,87,"rank_photo","none");
                         
                         HTML_DivStart("butt");
                              HTML_FormStart("../search/");
                                   HTML_FormAddInput("none","hidden","nick",$rank->nick);
                                   HTML_FormAddButton("n","submit",$rank->nick);
                              HTML_FormEnd();
                         HTML_DivEnd();
                         
                         HTML_DivStart("pluses");
                         
                              HTML_DivStart("pluses_text");
                                   HTML_Text("Rank");
                              HTML_DivEnd();
                              
                              HTML_Text($rank->plus);
                              
                         HTML_DivEnd();
                         
                         HTML_DivStart("ages");
                         
                              HTML_DivStart("ages_text");
                              
                                   $Date = DT_Convert($rank->age);
                                   $_Date = DT_Explode($Date);
                                   $Age = DT_Age($_Date[0], $_Date[1], $_Date[2]);
                                   
                                   HTML_CenterStart();
                                        HTML_Text("Age");
                                   HTML_CenterEnd();
                              HTML_DivEnd();
                              
                              HTML_CenterStart();
                                   HTML_Text("  ".$Age."  ");
                              HTML_CenterEnd();
                              
                         HTML_DivEnd();
                         
                    HTML_DivEnd();
                    
               HTML_DivEnd();
               $Counter++;
          }
     HTML_DivEnd();
    
HTML_DivEnd();


HTML_BodyEnd();

?>