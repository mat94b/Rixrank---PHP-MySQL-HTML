<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");

     session_start();
     if (!isset($_SESSION['USR'])) header("Location: ../");
     if ($_SESSION['USRT'] == 2) header("Location: ../settings/");

include('../bin/lib/HTML.php');
include('../bin/lib/MySQL.php');
include('../bin/lib/ShellData.php');
include('../bin/lib/DateTime.php');
include('../bin/lib/XML.php');
include('../bin/lib/File.php');



HTML_Xmlns();
HTML_HeadStart();

     HTML_Title("Your Profile - Rixrank");

     HTML_CSS("sProfile.css");
     HTML_CSS("sComments.css");
     HTML_CSS("../bin/sFoot.css");

HTML_HeadEnd();
HTML_BodyStart();

include('../data/menu.php');

SQL_Connect();

         if($_SESSION['USRS'] == 0)
         {
         $VAR = "";
         $ArrayData = SQL_ResultImageArray($_SESSION['USR']);
         }
         if($_SESSION['USRS'] == 1)
         {
         $VAR = "1";
         $ArrayData = SQL_ResultImageArrayF($_SESSION['USR']);
         }
         

SQL_Close();

   $IMAGE_CURSOR = 1;
   $SUM_PLUS = 0;
   $SUM_MINUS = 0;

   for ($i= 1;$i< $ArrayData[0][0]; $i++ )
   {
       if($SUM_PLUS >= 10000000) $SUM_PLUS = '9999999+' ;
       else $SUM_PLUS = $SUM_PLUS + $ArrayData[$i][0] ;
       if($SUM_MINUS >= 10000000) $SUM_MINUS = '9999999+' ;
       else $SUM_MINUS = $SUM_MINUS + $ArrayData[$i][2] ;
   }




   HTML_DivStart("main_photo_border");
      HTML_DivStart("main_photo_orange_text");
              if ($_SESSION['USRS']== 0)
               {
                    HTML_Text("Lady ");
               }
               else
               {
                    HTML_Text("Gentleman ");
               }
        HTML_DivStart("text_bold");
         HTML_Text($_SESSION['USR']);
        HTML_DivEnd();

      HTML_DivEnd();

                   HTML_DivStart("avatar_flag");
                       HTML_AddImageSize("../flag/".$_SESSION['USRC'].".ico",50,30);
                   HTML_DivEnd();
                   HTML_DivStart("avatar_photo");
                      HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR1'])."/".$_SESSION['USR1'].".jpg",150,200);
                   HTML_DivEnd();


         $Date = DT_Convert($_SESSION['USRO']);
         $_Date = DT_Explode($Date);
         $Age = DT_Age($_Date[0], $_Date[1], $_Date[2]);


     HTML_DivStart("avatar_information_plus");
         HTML_AddImage("../icon/main_plus.png");
         HTML_Text(" ".$SUM_PLUS);
     HTML_DivEnd();

     HTML_DivStart("avatar_information_minus");
         HTML_AddImage("../icon/main_minus.png");
         HTML_Text(" ".$SUM_MINUS);
     HTML_DivEnd();

     HTML_DivStart("avatar_information_age");
          HTML_DivStart("text_bold_orange");
            HTML_Text("Age: ");
          HTML_DivEnd();
          HTML_Text($Age);
          HTML_Text(" y.o.");
     HTML_DivEnd();



          HTML_DivStart("avatar_information_city");
              HTML_DivStart("text_bold_orange");
                  HTML_Text("City: ");
              HTML_DivEnd();

              if ( (strlen($_SESSION['USRCT']) > 3) && $_SESSION['USRSCT'])
              {
                 HTML_Text($_SESSION['USRCT']);
              }

          HTML_DivEnd();

          HTML_DivStart("avatar_information_last_loged");
            HTML_DivStart("text_bold_orange");
                HTML_Text("Last loged in: ");
            HTML_DivEnd();
                HTML_Text($_SESSION['USRLL']);
          HTML_DivEnd();

          HTML_DivStart("avatar_acces_text");
              HTML_Text($_SESSION['USR']."'s contacts");
          HTML_DivEnd();

    HTML_DivStart("avatar_contact_icons");
         if ( (strlen($_SESSION['USRF']) > 3) && $_SESSION['USRSF'])
             {
             HTML_AddImageSize("../icon/fb.png",32,32);
             }

         if ( (strlen($_SESSION['USRM'])  > 3) && $_SESSION['USRSM'])
             {
             HTML_AddImageSize("../icon/mail1.png",32,32);
             }

         if ( (strlen($_SESSION['USRSK'])  > 3) && $_SESSION['USRSS'])
             {
             HTML_AddImageSize("../icon/sk.png",32,32);
             }

         if ( (strlen($_SESSION['USRPH'])  > 3) && $_SESSION['USRSPH'])
             {
             HTML_AddImageSize("../icon/phone.png",32,32);
             }

         if ( (strlen( $_SESSION['USREM'] )  > 3) && $_SESSION['USRSEM'])
             {
             HTML_AddImageSize("../icon/mail2.png",32,32);
             }

         if ( (strlen( $_SESSION['USRTW'] )  > 3) && $_SESSION['USRSTW'])
             {
             HTML_AddImageSize("../icon/tw.png",32,32);
             }

         if ( (strlen( $_SESSION['USRMS'] )  > 3) && $_SESSION['USRSMP'])
             {
             HTML_AddImageSize("../icon/mp.png",32,32);
             }

         if ( (strlen( $_SESSION['USRPR'] )  > 3) && $_SESSION['USRSPR'])
             {
             HTML_AddImageSize("../icon/pinterest.png",32,32);
             }

         if ( (strlen( $_SESSION['USRDA'] )  > 3) && $_SESSION['USRSDA'])
             {
             HTML_AddImageSize("../icon/deviantart.png",32,32);
             }

         if ( (strlen( $_SESSION['USRTG'] )  > 3) && $_SESSION['USRSTG'])
             {
             HTML_AddImageSize("../icon/tagged.png",32,32);
             }

         if ( (strlen( $_SESSION['USRGP'] )  > 3) && $_SESSION['USRSGP'])
             {
             HTML_AddImageSize("../icon/gp.png",32,32);
             }

         if ( (strlen( $_SESSION['USRNIN'] )  > 3) && $_SESSION['USRSNIN'])
             {
             HTML_AddImageSize("../icon/in.png",32,32);
             }

         if ( (strlen( $_SESSION['USRNVK'] )  > 3) && $_SESSION['USRSNVK'])
             {
             HTML_AddImageSize("../icon/vk.png",32,32);
             }

         if ( (strlen( $_SESSION['USRNTCW'] )  > 3) && $_SESSION['USRSNTCW'])
             {
             HTML_AddImageSize("../icon/tcw.png",32,32);
             }

         if ( (strlen( $_SESSION['USRNSW'] )  > 3) && $_SESSION['USRSNSW'])
             {
             HTML_AddImageSize("../icon/sw.png",32,32);
             }

         if ( (strlen( $_SESSION['USRNRR'] )  > 3) && $_SESSION['USRSNRR'])
             {
             HTML_AddImageSize("../icon/rr.png",32,32);
             }

         if ( (strlen( $_SESSION['USRNPY'] )  > 3) && $_SESSION['USRSNPY'])
             {
             HTML_AddImageSize("../icon/py.png",32,32);
             }
    HTML_DivEnd();

       HTML_DivStart("footer");
           HTML_AddSpecialLnik();
       HTML_DivEnd();
   HTML_DivEnd();



HTML_DivStart("main_border_background");
   HTML_DivStart("top_text");
       HTML_Text("Your photos");
   HTML_DivEnd();

   HTML_DivStart("your_photos");
         HTML_DivStart("photos_borders");
              HTML_DivStart("photoim");

                 HTML_AddImage("../icon/hbin.png");
                               HTML_DivStart("photoch");
                                    HTML_AddImage("../icon/himage.png");
                               HTML_DivEnd();
                 HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR1'])."/".$_SESSION['USR1'].".jpg",150,200);
                 HTML_AddImage("../icon/plus.png");
                 HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR1']));
                 HTML_NL(1);
                 HTML_AddImage("../icon/minus.png");
                 HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR1']));

              HTML_DivEnd();
         HTML_DivEnd();

                  if ($_SESSION['USR2'] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR2'])."/".$_SESSION['USR2'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR2']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR2']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR3'] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR3'])."/".$_SESSION['USR3'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR3']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR3']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR4'] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR4'])."/".$_SESSION['USR4'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR4']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR4']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR5'] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR5'])."/".$_SESSION['USR5'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR5']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR5']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR6'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR6'])."/".$_SESSION['USR6'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR6']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR6']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR7'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR7'])."/".$_SESSION['USR7'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR7']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR7']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR8'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR8'])."/".$_SESSION['USR8'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR8']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR8']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR9'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR9'])."/".$_SESSION['USR9'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR9']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR9']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR10'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR10'])."/".$_SESSION['USR10'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR10']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR10']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR11'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR11'])."/".$_SESSION['USR11'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR11']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR11']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR12'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR12'])."/".$_SESSION['USR12'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR12']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR12']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR13'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR13'])."/".$_SESSION['USR13'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR13']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR13']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR14'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR14'])."/".$_SESSION['USR14'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR14']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR14']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR15'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR15'])."/".$_SESSION['USR15'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR15']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR15']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR16'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR16'])."/".$_SESSION['USR16'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR16']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR16']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR17'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR17'])."/".$_SESSION['USR17'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR17']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR17']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR18'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR18'])."/".$_SESSION['USR18'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR18']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR18']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR19'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR19'])."/".$_SESSION['USR19'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR19']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR19']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR20'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR20'])."/".$_SESSION['USR20'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR20']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR20']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR21'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR21'])."/".$_SESSION['USR21'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR21']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR21']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR22'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR22'])."/".$_SESSION['USR22'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR22']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR22']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR23'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR23'])."/".$_SESSION['USR23'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR23']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR23']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR24'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR24'])."/".$_SESSION['USR24'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR24']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR24']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR25'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR25'])."/".$_SESSION['USR25'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR25']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR25']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR26'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR26'])."/".$_SESSION['USR26'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR26']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR26']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR27'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR27'])."/".$_SESSION['USR27'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR27']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR27']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR28'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR28'])."/".$_SESSION['USR28'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR28']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR28']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR29'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR29'])."/".$_SESSION['USR29'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR29']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR29']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR30'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR30'])."/".$_SESSION['USR30'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR30']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR30']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR31'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR31'])."/".$_SESSION['USR31'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR31']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR31']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR32'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR32'])."/".$_SESSION['USR32'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR32']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR32']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR33'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR33'])."/".$_SESSION['USR33'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR33']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR33']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR34'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR34'])."/".$_SESSION['USR34'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR34']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR34']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR35'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR35'])."/".$_SESSION['USR35'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR35']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR35']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR36'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR36'])."/".$_SESSION['USR36'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR36']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR36']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR37'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR37'])."/".$_SESSION['USR37'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR37']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR37']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR38'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR38'])."/".$_SESSION['USR38'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR38']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR38']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR39'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR39'])."/".$_SESSION['USR39'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR39']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR39']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR40'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR40'])."/".$_SESSION['USR40'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR40']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR40']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR41'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR41'])."/".$_SESSION['USR41'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR41']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR41']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR42'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR42'])."/".$_SESSION['USR42'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR42']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR42']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR43'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR43'])."/".$_SESSION['USR43'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR43']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR43']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR44'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR44'])."/".$_SESSION['USR44'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR44']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR44']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR45'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR45'])."/".$_SESSION['USR45'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR45']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR45']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR46'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR46'])."/".$_SESSION['USR46'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR46']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR46']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR47'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR47'])."/".$_SESSION['USR47'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR47']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR47']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR48'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR48'])."/".$_SESSION['USR48'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR48']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR48']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR49'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR49'])."/".$_SESSION['USR49'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR49']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR49']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR50'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR50'])."/".$_SESSION['USR50'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR50']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR50']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR51'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR51'])."/".$_SESSION['USR51'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR51']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR51']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR52'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR52'])."/".$_SESSION['USR52'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR52']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR52']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR53'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR53'])."/".$_SESSION['USR53'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR53']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR53']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR54'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR54'])."/".$_SESSION['USR54'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR54']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR54']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR55'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR55'])."/".$_SESSION['USR55'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR55']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR55']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR56'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR56'])."/".$_SESSION['USR56'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR56']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR56']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR57'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR57'])."/".$_SESSION['USR57'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR57']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR57']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR58'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR58'])."/".$_SESSION['USR58'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR58']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR58']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR59'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR59'])."/".$_SESSION['USR59'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR59']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR59']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($_SESSION['USR60'] != 0)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                                     HTML_AddLinkImage("delete_image.php?id=".$IMAGE_CURSOR,"../icon/bin.png");
                                     HTML_DivStart("photoch");
                                          HTML_AddLinkImage("main_image.php?id=".$IMAGE_CURSOR,"../icon/image.png");
                                     HTML_DivEnd();
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($_SESSION['USR60'])."/".$_SESSION['USR60'].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$_SESSION['USR60']));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$_SESSION['USR60']));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($IMAGE_CURSOR < 60)
                  {
                         $IMAGE_CURSOR++;

                         HTML_DivStart("photos_borders_add");
                           HTML_DivStart("photoim");
                               HTML_NL(1);
                               HTML_NL(1);
                               HTML_AddLinkImageSize("../upload_photo/","../upload_images/1/0.jpg",150,200);
                               HTML_NL(1);
                               HTML_NL(1);
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }

     HTML_DivEnd();
HTML_DivEnd();

HTML_DivStart("about_me");

    HTML_DivStart("about_me_orange");
        HTML_Text("About me ");
    HTML_DivEnd();

    HTML_DivStart("about_me_text");
        HTML_Text($_SESSION['USRAB']);
    HTML_DivEnd();

HTML_DivEnd();

/////////////////////////////////////////////////////////////////////////////////////////////////
$HandleFile = File_Open("../data/lockers/".$_SESSION['USRP']."/".$_SESSION['USR'].".lock");
if( File_ReadLock($HandleFile) )
/////////////////////////////////////////////////////////////////////////////////////////////////
{
$FileXML = Comments_Load("../data/comments/".$_SESSION['USRP']."/".$_SESSION['USR'].".xml");
}
/////////////////////////////////////////////////////////////////////////////////////////////////
File_Unlock($HandleFile);
File_Close($HandleFile);
/////////////////////////////////////////////////////////////////////////////////////////////////

         $Counter = 0;
         foreach ($FileXML->comment as $comment)
         {
         $Counter++;
         }

         if ($Counter == 1000) $Counter = '999+';

HTML_DivStart("about_me");
    HTML_DivStart("about_me_orange");
        HTML_Text("Comments (".$Counter.")");
    HTML_DivEnd();
    HTML_DivStart("iframe_comments");


         $Condition = $Counter - $_SESSION['USRCCV'];
         $Counter = 0;
         foreach ($FileXML->comment as $comment)
         {

           if ( $Counter >= $Condition )
           {

           if($comment->sex == 0)
           {
              $VAR = "";
           }
           else
           {
              $VAR = "1";
           }

           HTML_DivStart("photo");
               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($comment->mainimg)."/".$comment->mainimg.".jpg",50,67);
           HTML_DivEnd();

           HTML_DivStart("user");
               HTML_FormStart("../search/index.php");
                   HTML_FormAddInput("none","hidden","nick",$comment->nick);
                   HTML_FormAddButton("none","submit",$comment->nick);
                   HTML_DivStart("data");
                        HTML_Text($comment->date." ".$comment->time);
                   HTML_DivEnd();
               HTML_FormEnd();

           HTML_DivEnd();




           HTML_DivStart("text");
               HTML_Text($comment->text);
           HTML_DivEnd();
           HTML_DivStart("delete");
               HTML_FormStart("comments.php");
                   HTML_FormAddInput("none","hidden","delete",$comment['id']);
                   HTML_FormAddButton("none","submit","delete");
               HTML_FormEnd();
           HTML_DivEnd();



           }

         $Counter++;
         }
HTML_CenterStart();
HTML_AddSpan("com");
         HTML_FormStart("comments.php");
             HTML_FormTextarea();
             HTML_NL(1);
             HTML_FormAddButton("none","submit","Comment!");
         HTML_FormEnd();
         HTML_DivEnd();
HTML_CenterEnd();
HTML_DivEnd();

include('../bin/foot.php');

HTML_BodyEnd();
?>