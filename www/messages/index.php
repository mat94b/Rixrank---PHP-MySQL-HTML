<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
     session_start();
     if (!isset($_SESSION['USR'])) header("Location: ../");
     if ($_SESSION['USRT'] == 2) header("Location: ../settings/");

include('../bin/lib/HTML.php');
include('../bin/lib/XML.php');
include('../bin/lib/MySQL.php');
include('../bin/lib/Constans.php');
include('../bin/lib/File.php');

HTML_Xmlns();
HTML_HeadStart();
HTML_Title("Asks/Replys - Rixrank");
HTML_JS("//code.jquery.com/jquery-1.10.2.js");
HTML_JS("//code.jquery.com/ui/1.11.4/jquery-ui.js");
HTML_JS("dialog.js");
HTML_CSS("../my_profile/sProfile.css");
HTML_CSS("dialog.css");
HTML_CSS("./sMessages.css");
HTML_CSS("../bin/sFoot.css");

HTML_HeadEnd();
HTML_BodyStart();
SQL_Connect();

    include('../data/menu.php');
HTML_DivStart("big_boxy");
  
    /////////////////////////////////////////////////////////////////////////////////////////////////
    $HandleFile = File_Open("../data/lockers/".$_SESSION['USRP']."/".$_SESSION['USR'].".lock");
    if( File_ReadLock($HandleFile) )
    /////////////////////////////////////////////////////////////////////////////////////////////////
    {
    $FileXML = Query_Load("../data/query/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml");
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////
    File_Unlock($HandleFile);
    File_Close($HandleFile);
    /////////////////////////////////////////////////////////////////////////////////////////////////

         $Counter = 0;
         foreach ($FileXML->query as $query)
         {
         $Counter++;
         }

    HTML_DivStart("main");
    HTML_DivStart("left_box");
        HTML_DivStart("top_text");
            HTML_Text("Queries (".$Counter.")");
        HTML_DivEnd();


            $Condition = $Counter - 15;
            $Counter = 0;
            $Num = 0;
            foreach ($FileXML->query as $query)
            {
            $DataArray1 = SQL_ResultNick($query->nick);

            if(isset( $DataArray1[$MYSQL_USERS_PASSWORD] ) )
            {
                 if ( $Counter >= $Condition )
                 {
                     $ArrayDataImage = SQL_ResultImageNameArray($query->nick);

                    if($DataArray1['sex'] == 0)
                    {
                        $VAR = "";
                        $ArrayData = SQL_ResultImageArray($query->nick);
                    }
                    if($DataArray1['sex'] == 1)
                    {
                        $VAR = "1";
                        $ArrayData = SQL_ResultImageArrayF($query->nick);
                    }

                     HTML_DivStart("top_query");
                             HTML_FormStart("../search/");
                                 HTML_FormAddInput("none","hidden","nick",$query->nick);
                                 HTML_DivStart("top_button_name");
                                     HTML_FormAddButton("none","nick",$query->nick);
                                     HTML_Text($query->date);
                                 HTML_DivEnd();
                             HTML_FormEnd();

                             
                           
                            HTML_AddImageSizeName("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[1])."/".$ArrayDataImage[1].".jpg",50,67,"profile_p","profile_id");

                         

                         HTML_DivStart("top_button");
                              HTML_FormAddButtonID("allow_css","Share","opener".$Num);
                         HTML_DivEnd();
                         
                         HTML_DivStart("top_button");
                              HTML_FormStart("reply.php");
                                  HTML_FormAddInput("none","hidden","delete",$query['id']);
                                  HTML_FormAddButton("none","casual","Refuse");
                              HTML_FormEnd();
                         HTML_DivEnd();
                         
                         HTML_DivStart("top_button");
                              HTML_FormStart("reply.php");
                                   HTML_FormAddInput("none","hidden","delblock",$query['id']);
                                   HTML_FormAddInput("none","hidden","block",$query->nick);
                                   HTML_FormAddButton("none","block_css","Block");
                              HTML_FormEnd();
                         HTML_DivEnd();
                     HTML_DivEnd();
                     
                     

                     HTML_DivIDNameStart("dialog".$Num,"Let ".$query->nick." to contact you");
                         HTML_DivStart("dialog");
                             HTML_FormStart("reply.php");
                                 HTML_FormAddInput("none","hidden","nick",$query->nick);
                                 HTML_FormAddInput("none","hidden","id",$query['id']);
                             
                                 if ( (strlen($_SESSION['USRF']) > 3) && $_SESSION['USRSF'])
                                 {
                                 HTML_AddImageSize("../icon/fb.png",32,32);
                                 HTML_FormRadio("k",1);
                                 }
                             
                                 if ( (strlen($_SESSION['USRM'])  > 3) && $_SESSION['USRSM'])
                                 {
                                 HTML_AddImageSize("../icon/mail1.png",32,32);
                                 HTML_FormRadio("k",2);
                                 }

                                 if ( (strlen($_SESSION['USRSK'])  > 3) && $_SESSION['USRSS'])
                                 {
                                 HTML_AddImageSize("../icon/sk.png",32,32);
                                 HTML_FormRadio("k",3);
                                 }

                                 if ( (strlen($_SESSION['USRPH'])  > 3) && $_SESSION['USRSPH'])
                                 {
                                 HTML_AddImageSize("../icon/phone.png",32,32);
                                 HTML_FormRadio("k",4);
                                 }

                                 if ( (strlen( $_SESSION['USREM'] )  > 3) && $_SESSION['USRSEM'])
                                 {
                                 HTML_AddImageSize("../icon/mail2.png",32,32);
                                 HTML_FormRadio("k",5);
                                 }

                                 if ( (strlen( $_SESSION['USRTW'] )  > 3) && $_SESSION['USRSTW'])
                                 {
                                 HTML_AddImageSize("../icon/tw.png",32,32);
                                 HTML_FormRadio("k",6);
                                 }

                                 if ( (strlen( $_SESSION['USRMS'] )  > 3) && $_SESSION['USRSMP'])
                                 {
                                 HTML_AddImageSize("../icon/mp.png",32,32);
                                 HTML_FormRadio("k",7);
                                 }

                                 if ( (strlen( $_SESSION['USRPR'] )  > 3) && $_SESSION['USRSPR'])
                                 {
                                 HTML_AddImageSize("../icon/pinterest.png",32,32);
                                 HTML_FormRadio("k",8);
                                 }

                                 if ( (strlen( $_SESSION['USRDA'] )  > 3) && $_SESSION['USRSDA'])
                                 {
                                 HTML_AddImageSize("../icon/deviantart.png",32,32);
                                 HTML_FormRadio("k",9);
                                 }

                                 if ( (strlen( $_SESSION['USRTG'] )  > 3) && $_SESSION['USRSTG'])
                                 {
                                 HTML_AddImageSize("../icon/tagged.png",32,32);
                                 HTML_FormRadio("k",10);
                                 }

                                 if ( (strlen( $_SESSION['USRGP'] )  > 3) && $_SESSION['USRSGP'])
                                 {
                                 HTML_AddImageSize("../icon/gp.png",32,32);
                                 HTML_FormRadio("k",11);
                                 }

                                 if ( (strlen( $_SESSION['USRNIN'] )  > 3) && $_SESSION['USRSNIN'])
                                 {
                                 HTML_AddImageSize("../icon/in.png",32,32);
                                 HTML_FormRadio("k",12);
                                 }

                                 if ( (strlen( $_SESSION['USRNVK'] )  > 3) && $_SESSION['USRSNVK'])
                                 {
                                 HTML_AddImageSize("../icon/vk.png",32,32);
                                 HTML_FormRadio("k",13);
                                 }

                                 if ( (strlen( $_SESSION['USRNTCW'] )  > 3) && $_SESSION['USRSNTCW'])
                                 {
                                 HTML_AddImageSize("../icon/tcw.png",32,32);
                                 HTML_FormRadio("k",14);
                                 }

                                 if ( (strlen( $_SESSION['USRNSW'] )  > 3) && $_SESSION['USRSNSW'])
                                 {
                                 HTML_AddImageSize("../icon/sw.png",32,32);
                                 HTML_FormRadio("k",15);
                                 }

                                 if ( (strlen( $_SESSION['USRNRR'] )  > 3) && $_SESSION['USRSNRR'])
                                 {
                                 HTML_AddImageSize("../icon/rr.png",32,32);
                                 HTML_FormRadio("k",16);
                                 }

                                 if ( (strlen( $_SESSION['USRNPY'] )  > 3) && $_SESSION['USRSNPY'])
                                 {
                                 HTML_AddImageSize("../icon/py.png",32,32);
                                 HTML_FormRadio("k",17);
                                 }
                             
                                 HTML_CenterStart();
                                     HTML_FormAddButton("dialog_button","dialog_button", "Share");
                                 HTML_CenterEnd();
                                 
                            HTML_FormEnd();
                       HTML_DivEnd();
                  HTML_DivEnd();
                  $Num++;
                 }
            }
            }
            
        HTML_DivEnd();
    





        /////////////////////////////////////////////////////////////////////////////////////////////////
        $HandleFile = File_Open("../data/lockers/".$_SESSION['USRP']."/".$_SESSION['USR'].".lock");
        if( File_ReadLock($HandleFile) )
        /////////////////////////////////////////////////////////////////////////////////////////////////
        {
        $FileXML = Reply_Load("../data/reply/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml");
        }
        /////////////////////////////////////////////////////////////////////////////////////////////////
        File_Unlock($HandleFile);
        File_Close($HandleFile);
        /////////////////////////////////////////////////////////////////////////////////////////////////
        
        
         $Counter = 0;
         foreach ($FileXML->reply as $reply)
         {
         $Counter++;
         }
    HTML_DivStart("right_box");
        HTML_DivStart("top_text");
            HTML_Text("Replys (".$Counter.")");
        HTML_DivEnd();
            $Condition = $Counter - 100;
            $Counter = 0;
            $Num = 0;
            foreach ($FileXML->reply as $reply)
            {
                $DataArray1 = SQL_ResultNick($reply->nick);
                
                 if ( $Counter >= $Condition )
                 {

                    if($DataArray1['sex'] == 0)
                    {
                        $VAR = "";
                    }
                    if($DataArray1['sex'] == 1)
                    {
                        $VAR = "1";
                    }

                     HTML_DivStart("top_query_replys");
                     HTML_DivStart("top_button_replys");
                          HTML_FormStart("../search/");
                                    HTML_FormAddInput("none","hidden","nick",$reply->nick);
                                    HTML_FormAddButton("none","name_replys",$reply->nick);
                          HTML_FormEnd();

                     HTML_DivEnd();

                         HTML_AddImageSizeName("../upload_images".$VAR."/".File_NameFolder(intval($reply->mainimg))."/".$reply->mainimg.".jpg",50,67,"profile_r","profile_r");
                     



                            HTML_DivStart("result_r");
                                 if ($reply->nc == 1)
                                 {
                                 HTML_AddImageSize("../icon/fb.png",32,32);

                                 }

                                 if ($reply->nc == 2)
                                 {
                                 HTML_AddImageSize("../icon/mail1.png",32,32);

                                 }

                                 if ($reply->nc == 3)
                                 {
                                 HTML_AddImageSize("../icon/sk.png",32,32);

                                 }

                                 if ($reply->nc == 4)
                                 {
                                 HTML_AddImageSize("../icon/phone.png",32,32);

                                 }

                                 if ($reply->nc == 5)
                                 {
                                 HTML_AddImageSize("../icon/mail2.png",32,32);

                                 }

                                 if ($reply->nc == 6)
                                 {
                                 HTML_AddImageSize("../icon/tw.png",32,32);

                                 }

                                 if ($reply->nc == 7)
                                 {
                                 HTML_AddImageSize("../icon/mp.png",32,32);

                                 }

                                 if ($reply->nc == 8)
                                 {
                                 HTML_AddImageSize("../icon/pinterest.png",32,32);

                                 }

                                 if ($reply->nc == 9)
                                 {
                                 HTML_AddImageSize("../icon/deviantart.png",32,32);

                                 }

                                 if ($reply->nc == 10)
                                 {
                                 HTML_AddImageSize("../icon/tagged.png",32,32);

                                 }

                                 if ($reply->nc == 11)
                                 {
                                 HTML_AddImageSize("../icon/gp.png",32,32);

                                 }

                                 if ($reply->nc == 12)
                                 {
                                 HTML_AddImageSize("../icon/in.png",32,32);

                                 }

                                 if ($reply->nc == 13)
                                 {
                                 HTML_AddImageSize("../icon/vk.png",32,32);

                                 }

                                 if ($reply->nc == 14)
                                 {
                                 HTML_AddImageSize("../icon/tcw.png",32,32);

                                 }

                                 if ($reply->nc == 15)
                                 {
                                 HTML_AddImageSize("../icon/sw.png",32,32);

                                 }

                                 if ($reply->nc == 16)
                                 {
                                 HTML_AddImageSize("../icon/rr.png",32,32);

                                 }

                                 if ($reply->nc == 17)
                                 {
                                 HTML_AddImageSize("../icon/py.png",32,32);

                                 }

                                    HTML_DivStart("result_text");
                                        HTML_Text($reply->contact);
                                        HTML_DivStart("data_r");
                                            HTML_Text($reply->date);
                                        HTML_DivEnd();
                                    HTML_DivEnd();
                                 HTML_DivEnd();
                         HTML_DivEnd();
                 }
            }
            
        HTML_DivEnd();

    HTML_DivEnd();
HTML_DivEnd();

SQL_Close();
include('../bin/foot.php');
HTML_BodyEnd();
?>