<script type="text/javascript">

            function showSave(oEvent) {
                var oDiv = document.getElementById("inf");
                oDiv.style.visibility = "visible";
            }

            function hideSave(oEvent) {
                var oDiv = document.getElementById("inf");
                oDiv.style.visibility = "hidden";
            }


</script>

<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
            session_start();
                 if (!isset($_SESSION['USR'])) header("Location: ../");

include('../bin/lib/HTML.php');
include('../bin/lib/MySQL.php');
include('../bin/lib/Constans.php');
include('../bin/lib/Security.php');
include('../bin/lib/DateTime.php');

HTML_Xmlns();
HTML_HeadStart();

     HTML_Title("Settings - Rixrank");
     
     HTML_CSS("../my_profile/sProfile.css");
     HTML_CSS("./sSettings.css");
     HTML_CSS("../bin/sFoot.css");
     
HTML_HeadEnd();
HTML_BodyStart();

include('../data/menu.php');


HTML_DivStart("main_box");
    HTML_DivStart("main_top_text");
        echo "Settings";
    HTML_DivEnd();

HTML_DivStart("separate_box");
  HTML_DivStart("next_line");
    HTML_DivStart("text_setting");
             HTML_Text("Personal");
    HTML_DivEnd();
  HTML_DivEnd();

    HTML_DivStart("next_line");
        HTML_FormStart("set_main.php");
           HTML_DivStart("settings_type");
             HTML_Text("Nick");
           HTML_DivEnd();
           HTML_DivStart("in_area");
             HTML_FormAddInputView("none","text","nick",$_SESSION['USR'],1);
           HTML_DivEnd();
    HTML_DivEnd();


    HTML_DivStart("next_line");    
        HTML_FormStart("set_main.php");
           HTML_DivStart("settings_type");
             HTML_Text("New password");
           HTML_DivEnd();
           HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","password","pass1","pass",12,12);
           HTML_DivEnd();
           HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","password","pass2","",12,12);
           HTML_DivEnd();
        HTML_DivEnd();
      

    HTML_DivStart("next_line");  
           HTML_DivStart("settings_type");
             HTML_Text("E-mail");
           HTML_DivEnd();
           HTML_DivStart("in_area");
             HTML_FormAddInputView("none","text","mail",$_SESSION['USRM'],1);
           HTML_DivEnd();
    HTML_DivEnd();
           

    HTML_DivStart("next_line"); 
             HTML_DivStart("settings_type");
             HTML_Text("Country");
             HTML_DivEnd();

          HTML_DivStart("in_area");
             if ($_SESSION['USRC'] == 0)
             {
                 HTML_FormSelectStart("none","country",0);
                 HTML_FormSelectOption("");
                      for ($i = 0 ; $i<261 ; $i++)
                      {
                           HTML_FormSelectOption($COUNTRY_FLAG_[$i]);
                      }
                 HTML_FormSelectEnd();
             }
             else
             {
                HTML_FormSelectStart("none","country",1);
                           HTML_FormSelectOption($COUNTRY_FLAG_[($_SESSION['USRC'] - 1)]);
                HTML_FormSelectEnd();
             }
            HTML_DivStart("red_space"); echo"*It's compulsory to finish registration";
            echo"<br>";HTML_DivEnd();
           HTML_DivEnd();

     HTML_DivEnd();


    HTML_DivStart("next_line"); 
             HTML_DivStart("settings_type");
             HTML_Text("Birthday");
             HTML_DivEnd();

            HTML_DivStart("in_area");     
            HTML_DivStart("white");
            HTML_Text("DD/MM/YY");
            HTML_DivEnd();
            HTML_DivStart("red_space"); echo"*It's compulsory to finish registration";
            echo"<br>";HTML_DivEnd();
             if ($_SESSION['USRO'] == NULL)
             {
                HTML_DivStart("space");
                 HTML_FormSelectStart("none","day",0);
                      HTML_FormSelectOption(" ");
                      for ($i = 1 ; $i<=31 ; $i++)
                      {
                           HTML_FormSelectOption($i);
                      }
                 HTML_FormSelectEnd();
                HTML_DivEnd();
                HTML_DivStart("space");
                 HTML_FormSelectStart("none","mounth",0);
                      HTML_FormSelectOption(" ");
                      for ($i = 1 ; $i<=12 ; $i++)
                      {
                           HTML_FormSelectOption($i);
                      }
                 HTML_FormSelectEnd();
             HTML_DivEnd();
                 HTML_FormSelectStart("none","year",0);
                      HTML_FormSelectOption(" ");
                      for ($i = 1935 ; $i<=1997 ; $i++)
                      {
                           HTML_FormSelectOption($i);
                      }
                 HTML_FormSelectEnd();
             }
             else
             {
                 $Date = DT_Convert($_SESSION['USRO']);
                 $_Date = DT_Explode($Date);
    
                 HTML_FormSelectStart("none","day",1);
                      HTML_FormSelectOption($_Date[0]);
                 HTML_FormSelectEnd();

                 HTML_FormSelectStart("none","mounth",1);
                      HTML_FormSelectOption($_Date[1]);
                 HTML_FormSelectEnd();

                 HTML_FormSelectStart("none","year",1);
                      HTML_FormSelectOption($_Date[2]);
                 HTML_FormSelectEnd();
             }
        HTML_DivEnd();
HTML_DivEnd();             
    HTML_DivStart("next_line"); 
             HTML_DivStart("settings_type");
             HTML_Text("City");
             HTML_DivEnd();
             
             HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","city",$_SESSION['USRCT'],12,12);
             HTML_DivEnd();
   HTML_DivEnd();          
     HTML_DivStart("save_button");
            // HTML_FormAddButton("none","submit","Save");
   echo "<input class='none' type='submit' name='submit' value='Save' onmouseover='showSave()' onmouseout='hideSave()'>";
             HTML_FormEnd();
     HTML_DivEnd();
HTML_DivEnd();

HTML_DivStart("separate_box");
    HTML_DivStart("next_line");
        
        HTML_FormStart("set_language.php");
             HTML_DivStart("settings_type");
             HTML_Text("Language");
             HTML_DivEnd();
             HTML_DivStart("in_area");
             HTML_FormSelectStart("none","language",0);
                  HTML_FormSelectOption("English");
                  //HTML_FormSelectOption("Polish");
             HTML_FormSelectEnd();
             HTML_DivEnd();
             HTML_DivStart("save_button");
             HTML_FormAddButton("none","submit","Save");
        HTML_FormEnd();
             HTML_DivEnd();
    HTML_DivEnd();
HTML_DivEnd();


        HTML_FormStart("set_infprv.php");
  HTML_DivStart("next_line");
    HTML_DivStart("text_setting");
             HTML_Text("Information & privacy");
    HTML_DivEnd();
  HTML_DivEnd();
 HTML_DivStart("settings_type");
             HTML_Text("About me:");
  HTML_DivEnd();
HTML_DivStart("in_area");
             HTML_FormTextareaDescription($_SESSION['USRAB']);

HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Skype:");
    HTML_DivEnd();
    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","skype",$_SESSION['USRSK'],12,12);
             HTML_FormCheckboxChoice("noneclass","cskype","true",0,$_SESSION['USRSS']);
HTML_DivEnd();
    HTML_DivEnd();



HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Facebook:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","facebook",$_SESSION['USRF'],12,12);
             HTML_FormCheckboxChoice("noneclass","cfacebook","true",0,$_SESSION['USRSF']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Extra mail:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","extramail",$_SESSION['USREM'],12,12);
             HTML_FormCheckboxChoice("noneclass","cextramail","true",0,$_SESSION['USRSEM']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Phone:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","phone",$_SESSION['USRPH'],12,12);
             HTML_FormCheckboxChoice("noneclass","cphone","true",0,$_SESSION['USRSPH']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Twitter:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","twitter",$_SESSION['USRTW'],12,12);
             HTML_FormCheckboxChoice("noneclass","ctwitter","true",0,$_SESSION['USRSTW']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Pinterest:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","pinterest",$_SESSION['USRPR'],12,12);
             HTML_FormCheckboxChoice("noneclass","cpinterest","true",0,$_SESSION['USRSPR']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Myspace:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","myspace",$_SESSION['USRMS'],12,12);
             HTML_FormCheckboxChoice("noneclass","cmyspace","true",0,$_SESSION['USRSMP']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Google plus:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","googlep",$_SESSION['USRGP'],12,12);
             HTML_FormCheckboxChoice("noneclass","cgooglep","true",0,$_SESSION['USRSGP']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Deviantart:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","deviantart",$_SESSION['USRDA'],12,12);
             HTML_FormCheckboxChoice("noneclass","cdeviantart","true",0,$_SESSION['USRSDA']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Tagged:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","tagged",$_SESSION['USRTG'],12,12);
             HTML_FormCheckboxChoice("noneclass","ctagged","true",0,$_SESSION['USRSTG']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Linkedin:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","linkedin",$_SESSION['USRNIN'],12,12);
             HTML_FormCheckboxChoice("noneclass","clinkedin","true",0,$_SESSION['USRSNIN']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Vcontact:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","vcontact",$_SESSION['USRNVK'],12,12);
             HTML_FormCheckboxChoice("noneclass","cvcontact","true",0,$_SESSION['USRSNVK']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Tencent:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","tencent",$_SESSION['USRNTCW'],12,12);
             HTML_FormCheckboxChoice("noneclass","ctencent","true",0,$_SESSION['USRSNTCW']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Sina:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","sina",$_SESSION['USRNSW'],12,12);
             HTML_FormCheckboxChoice("noneclass","csina","true",0,$_SESSION['USRSNSW']);
HTML_DivEnd();
HTML_DivEnd();



HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Pengyou:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","pengyou",$_SESSION['USRNPY'],12,12);
             HTML_FormCheckboxChoice("noneclass","cpengyou","true",0,$_SESSION['USRSNPY']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Renren:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormAddInputMax("none","text","renren",$_SESSION['USRNRR'],12,12);
             HTML_FormCheckboxChoice("noneclass","crenren","true",0,$_SESSION['USRSNRR']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Active queries/comments:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormCheckboxChoice("noneclass","cactive","true",0,$_SESSION['USRAM']);
HTML_DivEnd();
HTML_DivEnd();



HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Newsletter:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormCheckboxChoice("noneclass","cnewsletter","true",0,$_SESSION['USRSCT']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Visibility city:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormCheckboxChoice("noneclass","cvcity","true",0,$_SESSION['USRSNL']);
HTML_DivEnd();
HTML_DivEnd();


HTML_DivStart("next_line");
    HTML_DivStart("settings_type");
             HTML_Text("Visibility mail:");
    HTML_DivEnd();

    HTML_DivStart("in_area");
             HTML_FormCheckboxChoice("noneclass","cmail","true",0,$_SESSION['USRSM']);
HTML_DivEnd();
HTML_DivEnd();



HTML_DivStart("save_button");
             HTML_FormAddButton("none","submit","Save");
        HTML_FormEnd();
HTML_DivEnd();
echo"<br><br>";
HTML_DivEnd();
include('../bin/foot.php');

?>

      <div id="inf">
        <div class="inf_header">
            <span style="font-weight: bold">Information</span>
        </div>
      <div class="inf_text">
        To finish registration and gain full acces. Input your <div class="red_text">country</div> and <div class="red_text">birthday</div> date.
      </div>
      </div>

<?

HTML_BodyEnd();
?>