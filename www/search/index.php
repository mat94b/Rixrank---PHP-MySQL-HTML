<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
     session_start();
     if (!isset($_SESSION['USR'])) header("Location: ../");
     if ($_SESSION['USRT'] == 2) header("Location: ../settings/");
     
include('../bin/lib/HTML.php');
include('../bin/lib/MySQL.php');
include('../bin/lib/Constans.php');
include('../bin/lib/Security.php');
include('../bin/lib/ShellData.php');
include('../bin/lib/DateTime.php');
include('../bin/lib/XML.php');
include('../bin/lib/Cookies.php');
include('../bin/lib/File.php');

HTML_Xmlns();
HTML_HeadStart();

     HTML_Title("Search - Rixrank");
     
     HTML_CSS("../my_profile/sProfile.css");
     HTML_CSS("sProfile.css");
     HTML_CSS("../my_profile/sComments.css");
     HTML_CSS("../bin/sFoot.css");

HTML_HeadEnd();
HTML_BodyStart();

include('../data/menu.php');

HTML_CenterStart();
HTML_DivStart("margindown");
    HTML_FormStart("index.php");
        HTML_FormAddInputMax("entrance","text","nick","Nickname",12,12);
        HTML_FormAddButton("none","aproveing","Search");
    HTML_FormEnd();
HTML_DivEnd();
    
HTML_CenterEnd();

if(isset($_POST['nick']) || isset($_COOKIE['searchnick']) )
{

     if (isset($_POST['nick']))
     {
     $NICK = $_POST['nick'];
     //Cookies_SearchNick($_POST['nick']);
     }
     else
     {
     $NICK = $_COOKIE['searchnick'];
     }

SQL_Connect();
     $DataArray1 = SQL_ResultNick($NICK);
     
if(isset( $DataArray1[$MYSQL_USERS_PASSWORD] ) )
{
$ArrayDataImage = SQL_ResultImageNameArray($NICK);

         if($DataArray1['sex'] == 0)
         {
         $VAR = "";
         $ArrayData = SQL_ResultImageArray($NICK);
         }
         if($DataArray1['sex'] == 1)
         {
         $VAR = "1";
         $ArrayData = SQL_ResultImageArrayF($NICK);
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
              if ($DataArray1[$MYSQL_USERS_SEX]== 0)
               {
                    HTML_Text("Lady ");
               }
               else
               {
                    HTML_Text("Gentleman ");
               }
        HTML_DivStart("text_bold");
         HTML_Text($NICK);
        HTML_DivEnd();

      HTML_DivEnd();

                   HTML_DivStart("avatar_flag");
                       //HTML_AddImage("../flag/".$DataArray1[$MYSQL_USERS_COUNTRY].".ico");
                   HTML_DivEnd();
                   HTML_DivStart("avatar_photo");
                      HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[1])."/".$ArrayDataImage[1].".jpg",150,200);
                   HTML_DivEnd();


         $Date = DT_Convert($DataArray1[$MYSQL_USERS_AGE]);
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
              if ( strlen($DataArray1[$MYSQL_USERS_CITY]) > 3 && $DataArray1[$MYSQL_USERS_SET_CITY] )
              {
                 HTML_Text($DataArray1[$MYSQL_USERS_CITY]);
              }

          HTML_DivEnd();

          HTML_DivStart("avatar_information_last_loged");
            HTML_DivStart("text_bold_orange");
                HTML_Text("Last loged in: ");
            HTML_DivEnd();
                HTML_Text($DataArray1[$MYSQL_USERS_LASTLOG]);
          HTML_DivEnd();

          HTML_DivStart("avatar_acces_text");
              HTML_Text($NICK."'s contacts");
          HTML_DivEnd();

    HTML_DivStart("avatar_contact_icons");
         if ( strlen($DataArray1[$MYSQL_USERS_FACEBOOK]) > 3 && $DataArray1[$MYSQL_USERS_SET_FACEBOOK])
             {
             HTML_AddImageSize("../icon/fb.png",32,32);
             }

         if ( strlen($DataArray1[$MYSQL_USERS_EMAIL])  > 3 && $DataArray1[$MYSQL_USERS_SET_EMAIL])
             {
             HTML_AddImageSize("../icon/mail1.png",32,32);
             }

         if ( strlen($DataArray1[$MYSQL_USERS_SKYPE])  > 3 && $DataArray1[$MYSQL_USERS_SET_SKYPE])
             {
             HTML_AddImageSize("../icon/sk.png",32,32);
             }

         if ( strlen($DataArray1[$MYSQL_USERS_PHONE])  > 3 && $DataArray1[$MYSQL_USERS_SET_PHONE])
             {
             HTML_AddImageSize("../icon/phone.png",32,32);
             }


         if ( strlen( $DataArray1[$MYSQL_USERS_EXTRA_EMAIL] )  > 3 && $DataArray1[$MYSQL_USERS_SET_EXTRA_EMAIL])
             {
             HTML_AddImageSize("../icon/mail2.png",32,32);
             }

         if ( strlen( $DataArray1[$MYSQL_USERS_TWITTER] )  > 3 && $DataArray1[$MYSQL_USERS_SET_TWITTER])
             {
             HTML_AddImageSize("../icon/tw.png",32,32);
             }

         if ( strlen( $DataArray1[$MYSQL_USERS_MYSPACE] )  > 3 && $DataArray1[$MYSQL_USERS_SET_MYSPACE])
             {
             HTML_AddImageSize("../icon/mp.png",32,32);
             }

         if ( strlen( $DataArray1[$MYSQL_USERS_PINTEREST] )  > 3 && $DataArray1[$MYSQL_USERS_SET_PINTEREST])
             {
             HTML_AddImageSize("../icon/pinterest.png",32,32);
             }

         if ( strlen( $DataArray1[$MYSQL_USERS_DEVIANTART] )  > 3 && $DataArray1[$MYSQL_USERS_SET_DEVIANTART])
             {
             HTML_AddImageSize("../icon/deviantart.png",32,32);
             }

         if ( strlen( $DataArray1[$MYSQL_USERS_TAGGED] )  > 3 && $DataArray1[$MYSQL_USERS_SET_TAGGED])
             {
             HTML_AddImageSize("../icon/tagged.png",32,32);
             }

         if ( strlen( $DataArray1[$MYSQL_USERS_GOOGLEP] )  > 3 && $DataArray1[$MYSQL_USERS_SET_GOOGLEP])
             {
             HTML_AddImageSize("../icon/gp.png",32,32);
             }

         if ( strlen( $DataArray1[$MYSQL_USERS_LINKEDIN] )  > 3 && $DataArray1[$MYSQL_USERS_SET_LINKEDIN])
             {
             HTML_AddImageSize("../icon/in.png",32,32);
             }

         if ( strlen( $DataArray1[$MYSQL_USERS_VKONTAKT] )  > 3 && $DataArray1[$MYSQL_USERS_SET_VKONTAKT])
             {
             HTML_AddImageSize("../icon/vk.png",32,32);
             }

         if ( strlen( $DataArray1[$MYSQL_USERS_TENCENT] )  > 3 && $DataArray1[$MYSQL_USERS_SET_TENCENT])
             {
             HTML_AddImageSize("../icon/tcw.png",32,32);
             }

         if ( strlen( $DataArray1[$MYSQL_USERS_SINA] )  > 3 && $DataArray1[$MYSQL_USERS_SET_SINA])
             {
             HTML_AddImageSize("../icon/sw.png",32,32);
             }

         if ( strlen( $DataArray1[$MYSQL_USERS_RENREN] )  > 3 && $DataArray1[$MYSQL_USERS_SET_RENREN])
             {
             HTML_AddImageSize("../icon/rr.png",32,32);
             }

         if ( strlen( $DataArray1[$MYSQL_USERS_PENGYOU] )  > 3 && $DataArray1[$MYSQL_USERS_SET_PENGYOU])
             {
             HTML_AddImageSize("../icon/py.png",32,32);
             }

    HTML_DivEnd();


         HTML_DivStart("question_about_contact");
         if($NICK != $_SESSION['USR'])
         {
             HTML_FormStart("query.php");
                 HTML_FormAddInput("none","hidden","nick",$NICK);
                 HTML_FormAddInput("none","hidden","folder",$DataArray1[$MYSQL_USERS_PICTRUES]);
                 HTML_Text("Query about contact");
                 HTML_FormAddButton("none","submit","Ask");
             HTML_FormEnd();
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
                 HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[1])."/".$ArrayDataImage[1].".jpg",150,200);
                 HTML_AddImage("../icon/plus.png");
                 HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[1]));
                 HTML_NL(1);
                 HTML_AddImage("../icon/minus.png");
                 HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[1]));

              HTML_DivEnd();
         HTML_DivEnd();

                  if ($ArrayDataImage[2] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[2])."/".$ArrayDataImage[2].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[2]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[2]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[3] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[3])."/".$ArrayDataImage[3].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[3]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[3]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[4] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[4])."/".$ArrayDataImage[4].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[4]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[4]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[5] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[5])."/".$ArrayDataImage[5].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[5]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[5]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[6] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[6])."/".$ArrayDataImage[6].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[6]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[6]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[7] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[7])."/".$ArrayDataImage[7].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[7]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[7]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[8] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[8])."/".$ArrayDataImage[8].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[8]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[8]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[9] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[9])."/".$ArrayDataImage[9].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[9]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[9]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[10] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[10])."/".$ArrayDataImage[10].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[10]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[10]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[11] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[11])."/".$ArrayDataImage[11].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[11]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[11]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[12] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[12])."/".$ArrayDataImage[12].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[12]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[12]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[13] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[13])."/".$ArrayDataImage[13].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[13]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[13]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[14] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[14])."/".$ArrayDataImage[14].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[14]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[14]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[15] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[15])."/".$ArrayDataImage[15].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[15]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[15]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[16] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[16])."/".$ArrayDataImage[16].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[16]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[16]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[17] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[17])."/".$ArrayDataImage[17].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[17]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[17]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[18] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[18])."/".$ArrayDataImage[18].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[18]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[18]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[19] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[19])."/".$ArrayDataImage[19].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[19]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[19]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[20] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[20])."/".$ArrayDataImage[20].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[20]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[20]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[21] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[21])."/".$ArrayDataImage[21].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[21]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[21]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[22] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[22])."/".$ArrayDataImage[22].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[22]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[22]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[23] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[23])."/".$ArrayDataImage[23].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[23]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[23]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[24] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[24])."/".$ArrayDataImage[24].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[24]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[24]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[25] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[25])."/".$ArrayDataImage[25].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[25]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[25]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[26] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[26])."/".$ArrayDataImage[26].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[26]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[26]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[27] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[27])."/".$ArrayDataImage[27].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[27]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[27]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[28] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[28])."/".$ArrayDataImage[28].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[28]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[28]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[29] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[29])."/".$ArrayDataImage[29].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[29]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[29]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[30] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[30])."/".$ArrayDataImage[30].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[30]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[30]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[31] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[31])."/".$ArrayDataImage[31].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[31]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[31]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[32] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[32])."/".$ArrayDataImage[32].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[32]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[32]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[33] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[33])."/".$ArrayDataImage[33].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[33]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[33]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[34] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[34])."/".$ArrayDataImage[34].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[34]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[34]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[35] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[35])."/".$ArrayDataImage[35].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[35]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[35]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[36] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[36])."/".$ArrayDataImage[36].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[36]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[36]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[37] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[37])."/".$ArrayDataImage[37].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[37]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[37]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[38] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[38])."/".$ArrayDataImage[38].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[38]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[38]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[39] != 0)
                  {
                       $IMAGE_CURSOR++;
                       HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[39])."/".$ArrayDataImage[39].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[39]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[39]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[40] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[40])."/".$ArrayDataImage[40].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[40]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[40]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[41] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[41])."/".$ArrayDataImage[41].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[41]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[41]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[42] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[42])."/".$ArrayDataImage[42].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[42]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[42]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[43] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[43])."/".$ArrayDataImage[43].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[43]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[43]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[44] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[44])."/".$ArrayDataImage[44].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[44]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[44]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[45] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[45])."/".$ArrayDataImage[45].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[45]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[45]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[46] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[46])."/".$ArrayDataImage[46].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[46]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[46]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[47] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[47])."/".$ArrayDataImage[47].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[47]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[47]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[48] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[48])."/".$ArrayDataImage[48].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[48]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[48]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[49] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[49])."/".$ArrayDataImage[49].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[49]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[49]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[50] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[50])."/".$ArrayDataImage[50].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[50]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[50]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[51] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[51])."/".$ArrayDataImage[51].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[51]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[51]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[52] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[52])."/".$ArrayDataImage[52].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[52]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[52]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[53] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[53])."/".$ArrayDataImage[53].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[53]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[53]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[54] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[54])."/".$ArrayDataImage[54].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[54]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[54]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[55] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[55])."/".$ArrayDataImage[55].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[55]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[55]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[56] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[56])."/".$ArrayDataImage[56].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[56]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[56]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[57] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[57])."/".$ArrayDataImage[57].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[57]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[57]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[58] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[58])."/".$ArrayDataImage[58].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[58]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[58]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[59] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[59])."/".$ArrayDataImage[59].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[59]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[59]));
                           HTML_DivEnd();
                       HTML_DivEnd();
                  }
                  if ($ArrayDataImage[60] != 0)
                  {
                      $IMAGE_CURSOR++;
                      HTML_DivStart("photos_borders");
                           HTML_DivStart("photoim");
                               HTML_AddImageSize("../upload_images".$VAR."/".File_NameFolder($ArrayDataImage[60])."/".$ArrayDataImage[60].".jpg",150,200);
                               HTML_AddImage("../icon/plus.png");
                               HTML_Text(SD_ArrayPlus($ArrayData,$ArrayDataImage[60]));
                               HTML_NL(1);
                               HTML_AddImage("../icon/minus.png");
                               HTML_Text(SD_ArrayMinus($ArrayData,$ArrayDataImage[60]));
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
        HTML_Text($DataArray1[$MYSQL_USERS_ABOUT]);
    HTML_DivEnd();

HTML_DivEnd();

/////////////////////////////////////////////////////////////////////////////////////////////////
$HandleFile = File_Open("../data/lockers/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$NICK.".lock");
if( File_ReadLock($HandleFile) )
/////////////////////////////////////////////////////////////////////////////////////////////////
{
$FileXML = Comments_Load("../data/comments/".$DataArray1[$MYSQL_USERS_PICTRUES]."/".$NICK.".xml");
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
               HTML_FormStart("../search/");
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

           }

         $Counter++;
         }
         HTML_NL(1);
HTML_CenterStart();
HTML_AddSpan("com");
         HTML_FormStart("comments.php");
             HTML_FormAddInput("none","hidden","nick",$NICK);
             HTML_FormTextarea();
             HTML_NL(1);
             HTML_FormAddButton("none","submit","Comment!");
         HTML_FormEnd();
         HTML_DivEnd();
HTML_CenterEnd();
HTML_DivEnd();
}
else
{
HTML_CenterStart();
HTML_DivStart("exist");
HTML_Text("this user don't exist.");
HTML_DivEnd();
HTML_CenterEnd();
}
include('../bin/foot.php');

}

HTML_BodyEnd();
//echo $phpdate = strtotime( "02-01-1994" );
?>