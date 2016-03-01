<script type="text/javascript">

            function showInformation(oEvent) {
                var oDiv = document.getElementById("inf");
                oDiv.style.visibility = "visible";
            }

            function hideInformation(oEvent) {
                var oDiv = document.getElementById("inf");
                oDiv.style.visibility = "hidden";
            }


</script>
<?php
include('../bin/lib/Alarm.php');
     if(Alarm_Get('../bin/alarm/'))  header("Location: ../bin/logout.php");
     
     session_start();
     if (!isset($_SESSION['USR'])) header("Location: ../");
     if ($_SESSION['USRT'] == 2) header("Location: ../settings/");

include('../bin/lib/HTML.php');
include('../bin/lib/JavaScript.php');
include('../bin/lib/File.php');

HTML_Xmlns();
HTML_HeadStart();

     HTML_Title("Upload - Rixrank");
     
     HTML_JS("http://code.jquery.com/jquery-1.10.2.min.js");
     HTML_JS("//code.jquery.com/ui/1.11.4/jquery-ui.js");
     HTML_JS("actions.js");
     
     HTML_CSS("../my_profile/sProfile.css");
     HTML_CSS("up.css");
     HTML_CSS("../bin/sFoot.css");
     HTML_CSS("//code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css");
?>
<script>
  function getFile(){
        document.getElementById("upfile").click();
    }
</script>
<?php
HTML_HeadEnd();

HTML_BodyStart();

include('../data/menu.php');


if (File_Exist("../data/upload/".$_SESSION['USR'].".jpg"))
{

   list($width, $height, $type, $attr) = File_GetImageSize("../data/upload/".$_SESSION['USR'].".jpg");
   
   JS_Start();
      JS_DocumentReadyStart();
         JS_ContainerBackGround($_SESSION['USR']);
      JS_DocumentReadyEnd();
   JS_End();
   
   
   
   if ($height >= $width)
   {
       $Scale = (640*$width)/$height;
       $TrueScale = round( (85*$Scale)/960 , 2);
       if ($TrueScale > 31.25)
       {
          JS_Start();
             JS_DocumentReadyStart();
                JS_ContainerWidth($TrueScale);
             JS_DocumentReadyEnd();
          JS_End();
          
          $ValueScale =  $height/642 ;
          
          JS_Start();
             JS_AddVar("ValueScale",$ValueScale);
          JS_End();
       }
       else
       {
          JS_Start();
             JS_Alert("Wrong size !!");
          JS_End();
       }
   
   }
   else
   {
       $Scale = (960*$height)/$width;
       if ($Scale > 400)
       {
          JS_Start();
             JS_DocumentReadyStart();
                JS_ContainerWidth(85);
                JS_ContainerHeight($Scale);
             JS_DocumentReadyEnd();
          JS_End();
          
          $ValueScale =  $width/960 ;
          
          JS_Start();
             JS_AddVar("ValueScale",$ValueScale);
          JS_End();
       }
       else
       {
          JS_Start();
             JS_Alert("Wrong size !!");
          JS_End();
       }
   }
}

  JS_Start();
     JS_DocumentReadyStart();
        JS_ClickCropStart();
           JS_FunctionBodyCrop($_SESSION['USR']);
        JS_ClickCropEnd();
     JS_DocumentReadyEnd();
  JS_End();

?>
<div class="body_ground">
     <div class="top_orange">
    Upload photo 
    <div class="inf_picture">
<?php
        HTML_AddLinkImageSizeName("","../icon/inf.png",30,30,"menu_photo","showInformation(event)", "hideInformation(event)");
?>
    </div>
    </div>

    <br>

<?php
if(File_Exist("../data/upload/".$_SESSION['USR'].".jpg" ))
{
    echo  "<div id='container'>";
     echo "<div id='box'></div>";
    echo  "</div>" ;
}
?>
    <center>
    <div class="upload_box">
      <form action="selector.php" method="POST" ENCTYPE="multipart/form-data">
    
    <div id="yourBtn" onclick="getFile()">Click to upload!</div>
    <div id="hidden_button">
        <input id="upfile" type="file" name="plik"/></div>
    <input type="submit" value="Send" name="aprov"/>
     </form>
     </div>
</center>
     <br>
</div>


<div class="body_ground2">
<div class="top_orange2">
    Crop photo
</div>
<div id="imgcrop">
<center>
<div class="m">
<?php
// <img id="ic" src="../data/upload/katecrop.jpg"   width="300" height="400">
$PathFile = "../data/upload/".$_SESSION['USR']."crop.jpg";
if( File_Exist($PathFile ) )
{
   HTML_AddImageSizeName($PathFile ,300,400,"nonename","ic");
}
else
{
   HTML_AddImageSizeName("../upload_images/0.jpg" ,300,400,"nonename","ic");
}
?>
</div>
</center>
</div>


<div class="crop_panel_resize">
    <button id="plus" name="plus_css"> Enlarge </button>
    <button id="minus" name="minus_css"> Decrease </button>
</div>
<div class="pointer_panel">
<div class="d_up">
    <button id="up" name="up_css"></button>
</div>
<div class="d_left">
    <button id="left" name="left_css"> </button>
</div>
<div class="d_right">
    <button id="right" name="right_css">  </button>
</div>
<div class="d_down">
    <button id="down" name="down_css"> </button>
</div>  
</div>
  

<div class="crop_and_save_panel">
  <button id="crop" name="crop_css"> Crop </button>
  
  <form action="save.php" method="post">
   <button type="submit" name="save_css">Save</button>	
  </form>
</div>
  
</div>

<?php
include('../bin/foot.php');
?>


      <div id="inf">
        <div class="inf_header">
            <span style="font-weight: bold">How to add a photo?</span>
        </div>
      <div class="inf_text">
        1. Click on the button "Click to upload" and select picture <div class="red_text">(*.jpg/jpeg)</div>.
      </div>
      <div class="inf_text">
        2. Click on button "Send".
      </div>
      <div class="inf_text">
        3. Crop your photo using simple interface.
      </div>
      <div class="inf_text">
        4. Click "Save" to finish.<br>
      </div>
      </div>
      </div>


</body>