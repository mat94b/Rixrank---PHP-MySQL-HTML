<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
     $TEST_COMPARE = false;
     session_start();
     if (!isset($_SESSION['USR'])) $TEST_COMPARE = true;
     //if ($_SESSION['USRT'] == 2) header("Location: ../settings/");
        $LANGUAGE = "../data/language/compare/1.php";

include('../bin/lib/HTML.php');
include('../bin/lib/MySQL.php');
include('../bin/lib/JavaScript.php');
include('../bin/lib/DateTime.php');
include('../bin/lib/File.php');
include('../bin/lib/XML.php');
include($LANGUAGE);

if(!$TEST_COMPARE){
HTML_Xmlns();
HTML_HeadStart();

     HTML_Title($LANGUAGE_TITLE);
     
     HTML_JS("http://code.jquery.com/jquery-1.10.2.min.js");
     
     if($_SESSION['USRS'] == 1)
     {
        JS_Start();
           JS_AddVarString("sex","") ;
        JS_End();
     }
     else
     {
        JS_Start();
           JS_AddVar("sex",1);
        JS_End();
     }
     HTML_JS("//code.jquery.com/ui/1.11.4/jquery-ui.js");

     HTML_CSS("../dialog.css");
     
     HTML_JS("informations.js");
     
     HTML_CSS("../my_profile/sProfile.css");
     HTML_CSS("sCompare.css");
     
HTML_HeadEnd();

HTML_BodyStart();

include('../data/menu.php');
    HTML_DivStart("big_box");

     SQL_Connect();
     
         if($_SESSION['USRS'] == 0) $VAR = "1";
         if($_SESSION['USRS'] == 1) $VAR = "";
     
         $HandleFile = File_Open("../data/endimg".$VAR.".lock");
         if( File_ReadLock($HandleFile) )
         {
         $NUMBER_OF_IMAGE = intval(EndImage_Return("../data/endimg".$VAR.".xml"));
         $NUMBER_OF_IMAGE = $NUMBER_OF_IMAGE - 1 ;
         }
         File_Unlock($HandleFile);
         File_Close($HandleFile);

         $i = rand ( 1 , $NUMBER_OF_IMAGE );
         $i2 = rand ( 1 , $NUMBER_OF_IMAGE );
         
         $FileNum = File_NameFolder($i);
         $FileNum2 = File_NameFolder($i2);

         while ($i == $i2 || !File_Exist("../upload_images".$VAR."/".$FileNum."/".$i.".jpg") || !File_Exist("../upload_images".$VAR."/".$FileNum2."/".$i2.".jpg") )
         {
         $i = rand ( 1 , $NUMBER_OF_IMAGE );
         $i2 = rand ( 1 , $NUMBER_OF_IMAGE );
         }
         
         $FileNum = File_NameFolder($i);
         $FileNum2 = File_NameFolder($i2);

         if($_SESSION['USRS'] == 1) $row = SQL_ResultImageNumber($i);
         if($_SESSION['USRS'] == 0) $row = SQL_ResultImageNumberF($i);
         if($_SESSION['USRS'] == 1) $row2 = SQL_ResultImageNumber($i2);
         if($_SESSION['USRS'] == 0) $row2 = SQL_ResultImageNumberF($i2);


     SQL_Close();
     
     JS_Start();
        JS_AddVar("p",$row['plus']);
     JS_End();

     JS_Start();
        JS_AddVar("p2",$row2['plus']);
     JS_End();
     
     HTML_DivIDStart("hidden");
     
          HTML_DivIDStart("inf_left");
          
               HTML_DivStart("country");
                   HTML_AddImageSizeName("../flag/".$row2['country'].".ico",200,150,"none","leftc");
               HTML_DivEnd();
               
               
                    HTML_FormStart("../search/index.php");
                         HTML_FormAddInputId("none","hidden","nick",$row2['nick'],"nick1value");
                         HTML_FormAddButtonIDType("none",$row2['nick'],"nick1","submit");
                    HTML_FormEnd();
            
               
               HTML_DivStart("age");
                    HTML_DivStart("text_bold_orange_left");
                         HTML_Text($LANGUAGE_AGE);
                    HTML_DivEnd();
                    HTML_DivIDStart("age1");
                         $Date = DT_Convert($row2['age']);
                         $_Date = DT_Explode($Date);
                         $Age = DT_Age($_Date[0], $_Date[1], $_Date[2]);
                         HTML_Text($Age);
                    HTML_DivEnd();
               HTML_DivEnd();
               
               HTML_DivStart("plus");
                    HTML_DivStart("text_bold_orange_left");
                         HTML_Text($LANGUAGE_RANK);
                    HTML_DivEnd();
                    HTML_DivIDStart("plus1");
                         HTML_Text($row2['plus']);
                    HTML_DivEnd();
               HTML_DivEnd();
               
               HTML_DivStart("minus");
                    HTML_DivStart("text_bold_orange_left");
                         HTML_Text($LANGUAGE_VICTORY);
                    HTML_DivEnd();
                    HTML_DivIDStart("won1");
                         HTML_Text($row2['minus']);
                    HTML_DivEnd();
               HTML_DivEnd();

               HTML_FormAddButtonIDType("left_submit",$LANGUAGE_NEXT,"leftnext","button");
               
          HTML_DivEnd();

          HTML_DivIDStart("inf_right");
          
               HTML_DivStart("country");
                   HTML_AddImageSizeName("../flag/".$row['country'].".ico",200,150,"none","rightc");
               HTML_DivEnd();
               
    
                    HTML_FormStart("../search/index.php");
                         HTML_FormAddInputId("none","hidden","nick",$row['nick'],"nick2value");
                         HTML_FormAddButtonIDType("none",$row['nick'],"nick2","submit");
                    HTML_FormEnd();
               
               HTML_DivStart("age");
                    HTML_DivStart("text_bold_orange");
                         HTML_Text($LANGUAGE_AGE);
                    HTML_DivEnd();
                    HTML_DivIDStart("age2");
                         $Date = DT_Convert($row['age']);
                         $_Date = DT_Explode($Date);
                         $Age = DT_Age($_Date[0], $_Date[1], $_Date[2]);
                         HTML_Text($Age);
                    HTML_DivEnd();
               HTML_DivEnd();
               
               HTML_DivStart("plus");
                   HTML_DivStart("text_bold_orange");
                        HTML_Text($LANGUAGE_RANK);
                   HTML_DivEnd();
                   HTML_DivIDStart("plus2");
                        HTML_Text($row['plus']);
                   HTML_DivEnd();
               HTML_DivEnd();
               
               HTML_DivStart("minus");
                    HTML_DivStart("text_bold_orange");
                         HTML_Text($LANGUAGE_VICTORY);
                    HTML_DivEnd();
                    HTML_DivIDStart("won2");
                         HTML_Text($row['minus']);
                    HTML_DivEnd();
               HTML_DivEnd();

               HTML_FormAddButtonIDType("right_submit",$LANGUAGE_NEXT,"rightnext","button");
               
          HTML_DivEnd();

     HTML_DivEnd();
     
     HTML_DivStart("width");
     
          HTML_DivStart("photo_left");
               HTML_AddImageSizeName("../upload_images".$VAR."/".$FileNum."/".$i.".jpg",300,400,"white","left");
          HTML_DivEnd();

          HTML_DivStart("photo_right");
               HTML_AddImageSizeName("../upload_images".$VAR."/".$FileNum2."/".$i2.".jpg",300,400,"orange","right");
          HTML_DivEnd();
          
     HTML_DivEnd();

     HTML_DivIDStart("buttons_left");
     
          HTML_DivStart("button");
               HTML_ButtonCommentLeft(1,$i,$i2,$LANGUAGE_BETTER);
          HTML_DivEnd();

          HTML_DivStart("button");
               HTML_ButtonCommentLeft(5,$i,$i2,$LANGUAGE_AVERAGE);
          HTML_DivEnd();

          HTML_DivStart("button");
               HTML_ButtonCommentLeft(10,$i,$i2,$LANGUAGE_FABULOUS);
          HTML_DivEnd();
          
     HTML_DivEnd();

     HTML_DivIDStart("buttons_right");
     
          HTML_DivStart("button");
               HTML_ButtonCommentRight(1,$i,$i2,$LANGUAGE_BETTER);
          HTML_DivEnd();
          
          HTML_DivStart("button");
               HTML_ButtonCommentRight(5,$i,$i2,$LANGUAGE_AVERAGE);
          HTML_DivEnd();
          
          HTML_DivStart("button");
               HTML_ButtonCommentRight(10,$i,$i2,$LANGUAGE_FABULOUS);
          HTML_DivEnd();
          
     HTML_DivEnd();

     HTML_DivIDStart("report");
          HTML_ButtonReportLeft($LANGUAGE_REPORT);
          HTML_ButtonReportRight($LANGUAGE_REPORT);
     HTML_DivEnd();

   HTML_DivEnd();
HTML_BodyEnd();
}
else
{
HTML_Xmlns();
HTML_HeadStart();

     HTML_Title($LANGUAGE_TITLE);

     HTML_JS("http://code.jquery.com/jquery-1.10.2.min.js");
     HTML_JS("informations.js");
     if(!isset($_COOKIE['sex'])) HTML_JS("test.js");
     else
     {
        if($_COOKIE['sex'] == 1)
        {
            JS_Start();
               JS_AddVarString("sex","") ;
            JS_End();
        }
        else
        {
            JS_Start();
               JS_AddVar("sex",1);
            JS_End();
        }
     }
     HTML_JS("//code.jquery.com/ui/1.11.4/jquery-ui.js");

     HTML_CSS("../dialog.css");
     HTML_CSS("../my_profile/sProfile.css");
     HTML_CSS("sCompare.css");

HTML_HeadEnd();

HTML_BodyStart();

include('../data/menu.php');

    if(isset($_COOKIE['sex']))
    {
    HTML_DivStart("big_box");

     SQL_Connect();

         if($_COOKIE['sex'] == 0) $VAR = "1";
         if($_COOKIE['sex'] == 1) $VAR = "";

         $HandleFile = File_Open("../data/endimg".$VAR.".lock");
         if( File_ReadLock($HandleFile) )
         {
         $NUMBER_OF_IMAGE = intval(EndImage_Return("../data/endimg".$VAR.".xml"));
         $NUMBER_OF_IMAGE = $NUMBER_OF_IMAGE - 1 ;
         }
         File_Unlock($HandleFile);
         File_Close($HandleFile);

         $i = rand ( 1 , $NUMBER_OF_IMAGE );
         $i2 = rand ( 1 , $NUMBER_OF_IMAGE );

         $FileNum = File_NameFolder($i);
         $FileNum2 = File_NameFolder($i2);

         while ($i == $i2 || !File_Exist("../upload_images".$VAR."/".$FileNum."/".$i.".jpg") || !File_Exist("../upload_images".$VAR."/".$FileNum2."/".$i2.".jpg") )
         {
         $i = rand ( 1 , $NUMBER_OF_IMAGE );
         $i2 = rand ( 1 , $NUMBER_OF_IMAGE );
         }

         $FileNum = File_NameFolder($i);
         $FileNum2 = File_NameFolder($i2);

         if($_COOKIE['sex'] == 1) $row = SQL_ResultImageNumber($i);
         if($_COOKIE['sex'] == 0) $row = SQL_ResultImageNumberF($i);
         if($_COOKIE['sex'] == 1) $row2 = SQL_ResultImageNumber($i2);
         if($_COOKIE['sex']== 0) $row2 = SQL_ResultImageNumberF($i2);


     SQL_Close();

     JS_Start();
        JS_AddVar("p",$row['plus']);
     JS_End();

     JS_Start();
        JS_AddVar("p2",$row2['plus']);
     JS_End();

     HTML_DivIDStart("hidden");

          HTML_DivIDStart("inf_left");

               HTML_DivStart("country");
                   HTML_AddImageSizeName("../flag/".$row2['country'].".ico",200,150,"none","leftc");
               HTML_DivEnd();


                    HTML_FormStart("../search/index.php");
                         HTML_FormAddInputId("none","hidden","nick",$row2['nick'],"nick1value");
                         HTML_FormAddButtonIDType("none",$row2['nick'],"nick1","submit");
                    HTML_FormEnd();


               HTML_DivStart("age");
                    HTML_DivStart("text_bold_orange_left");
                         HTML_Text($LANGUAGE_AGE);
                    HTML_DivEnd();
                    HTML_DivIDStart("age1");
                         $Date = DT_Convert($row2['age']);
                         $_Date = DT_Explode($Date);
                         $Age = DT_Age($_Date[0], $_Date[1], $_Date[2]);
                         HTML_Text($Age);
                    HTML_DivEnd();
               HTML_DivEnd();

               HTML_DivStart("plus");
                    HTML_DivStart("text_bold_orange_left");
                         HTML_Text($LANGUAGE_RANK);
                    HTML_DivEnd();
                    HTML_DivIDStart("plus1");
                         HTML_Text($row2['plus']);
                    HTML_DivEnd();
               HTML_DivEnd();

               HTML_DivStart("minus");
                    HTML_DivStart("text_bold_orange_left");
                         HTML_Text($LANGUAGE_VICTORY);
                    HTML_DivEnd();
                    HTML_DivIDStart("won1");
                         HTML_Text($row2['minus']);
                    HTML_DivEnd();
               HTML_DivEnd();

               HTML_FormAddButtonIDType("left_submit",$LANGUAGE_NEXT,"leftnext","button");

          HTML_DivEnd();

          HTML_DivIDStart("inf_right");

               HTML_DivStart("country");
                   HTML_AddImageSizeName("../flag/".$row['country'].".ico",200,150,"none","rightc");
               HTML_DivEnd();


                    HTML_FormStart("../search/index.php");
                         HTML_FormAddInputId("none","hidden","nick",$row['nick'],"nick2value");
                         HTML_FormAddButtonIDType("none",$row['nick'],"nick2","submit");
                    HTML_FormEnd();

               HTML_DivStart("age");
                    HTML_DivStart("text_bold_orange");
                         HTML_Text($LANGUAGE_AGE);
                    HTML_DivEnd();
                    HTML_DivIDStart("age2");
                         $Date = DT_Convert($row['age']);
                         $_Date = DT_Explode($Date);
                         $Age = DT_Age($_Date[0], $_Date[1], $_Date[2]);
                         HTML_Text($Age);
                    HTML_DivEnd();
               HTML_DivEnd();

               HTML_DivStart("plus");
                   HTML_DivStart("text_bold_orange");
                        HTML_Text($LANGUAGE_RANK);
                   HTML_DivEnd();
                   HTML_DivIDStart("plus2");
                        HTML_Text($row['plus']);
                   HTML_DivEnd();
               HTML_DivEnd();

               HTML_DivStart("minus");
                    HTML_DivStart("text_bold_orange");
                         HTML_Text($LANGUAGE_VICTORY);
                    HTML_DivEnd();
                    HTML_DivIDStart("won2");
                         HTML_Text($row['minus']);
                    HTML_DivEnd();
               HTML_DivEnd();

               HTML_FormAddButtonIDType("right_submit",$LANGUAGE_NEXT,"rightnext","button");

          HTML_DivEnd();

     HTML_DivEnd();

     HTML_DivStart("width");

          HTML_DivStart("photo_left");
               HTML_AddImageSizeName("../upload_images".$VAR."/".$FileNum."/".$i.".jpg",300,400,"white","left");
          HTML_DivEnd();

          HTML_DivStart("photo_right");
               HTML_AddImageSizeName("../upload_images".$VAR."/".$FileNum2."/".$i2.".jpg",300,400,"orange","right");
          HTML_DivEnd();

     HTML_DivEnd();

     HTML_DivIDStart("buttons_left");

          HTML_DivStart("button");
               HTML_ButtonCommentLeft(1,$i,$i2,$LANGUAGE_BETTER);
          HTML_DivEnd();

          HTML_DivStart("button");
               HTML_ButtonCommentLeft(5,$i,$i2,$LANGUAGE_AVERAGE);
          HTML_DivEnd();

          HTML_DivStart("button");
               HTML_ButtonCommentLeft(10,$i,$i2,$LANGUAGE_FABULOUS);
          HTML_DivEnd();

     HTML_DivEnd();

     HTML_DivIDStart("buttons_right");

          HTML_DivStart("button");
               HTML_ButtonCommentRight(1,$i,$i2,$LANGUAGE_BETTER);
          HTML_DivEnd();

          HTML_DivStart("button");
               HTML_ButtonCommentRight(5,$i,$i2,$LANGUAGE_AVERAGE);
          HTML_DivEnd();

          HTML_DivStart("button");
               HTML_ButtonCommentRight(10,$i,$i2,$LANGUAGE_FABULOUS);
          HTML_DivEnd();

     HTML_DivEnd();

     HTML_DivIDStart("report");
          HTML_ButtonReportLeft($LANGUAGE_REPORT);
          HTML_ButtonReportRight($LANGUAGE_REPORT);
     HTML_DivEnd();

   HTML_DivEnd();

    }

    if(!isset($_COOKIE['sex']))
    {
    echo " <div id='choice_sex' title='Tester - Rixrank'>";
    HTML_DivStart("test_all");
        echo "What is your gender? <br> ";
     HTML_DivStart("test_border");
        echo "<button id='male'>Male</button>";
        echo "<button id='female'>Female</button>";
     HTML_DivEnd();
        echo "</div>";
    HTML_DivEnd();
    
    }

}

?>
<div id='msgbox_report' title='Report - Rixrank'>
<div id='msgbox_report_text'>The photo was reported. Thank you for your help. We will assess whether the photo is offensive soon. </div>
</div>
