        <script type="text/javascript">
            function showCompare(oEvent) {
                var oDiv = document.getElementById("compare");
                oDiv.style.visibility = "visible";
            }

            function hideCompare(oEvent) {
                var oDiv = document.getElementById("compare");
                oDiv.style.visibility = "hidden";
            }

            function showUpload(oEvent) {
                var oDiv = document.getElementById("upload_js");
                oDiv.style.visibility = "visible";
            }

            function hideUpload(oEvent) {
                var oDiv = document.getElementById("upload_js");
                oDiv.style.visibility = "hidden";
            }

            function showProfile(oEvent) {
                var oDiv = document.getElementById("m_prof");
                oDiv.style.visibility = "visible";
            }

            function hideProfile(oEvent) {
                var oDiv = document.getElementById("m_prof");
                oDiv.style.visibility = "hidden";
            }

            function showLocal(oEvent) {
                var oDiv = document.getElementById("l_rank");
                oDiv.style.visibility = "visible";
            }

            function hideLocal(oEvent) {
                var oDiv = document.getElementById("l_rank");
                oDiv.style.visibility = "hidden";
            }

            function showGlobal(oEvent) {
                var oDiv = document.getElementById("g_rank");
                oDiv.style.visibility = "visible";
            }

            function hideGlobal(oEvent) {
                var oDiv = document.getElementById("g_rank");
                oDiv.style.visibility = "hidden";
            }

            function showSearch(oEvent) {
                var oDiv = document.getElementById("search");
                oDiv.style.visibility = "visible";
            }

            function hideSearch(oEvent) {
                var oDiv = document.getElementById("search");
                oDiv.style.visibility = "hidden";
            }

            function showQuery(oEvent) {
                var oDiv = document.getElementById("query");
                oDiv.style.visibility = "visible";
            }

            function hideQuery(oEvent) {
                var oDiv = document.getElementById("query");
                oDiv.style.visibility = "hidden";
            }

            function showSett(oEvent) {
                var oDiv = document.getElementById("sett");
                oDiv.style.visibility = "visible";
            }

            function hideSett(oEvent) {
                var oDiv = document.getElementById("sett");
                oDiv.style.visibility = "hidden";
            }

            function showLogOut(oEvent) {
                var oDiv = document.getElementById("lo");
                oDiv.style.visibility = "visible";
            }

            function hideLogOut(oEvent) {
                var oDiv = document.getElementById("lo");
                oDiv.style.visibility = "hidden";
            }
        </script>
<?php

HTML_CenterStart();
     HTML_DivStart("top");
     HTML_ULStart();
     if(isset($_SESSION['USR']))$user_id=$_SESSION['USR'];
     else $user_id="Guest";
          HTML_DivStart("menu_text");
          HTML_Text($user_id.", join the fun!");
          HTML_DivEnd();

     HTML_DivStart("menu_right");
          HTML_DivStart("menu_margin");
          HTML_AddLinkImageSizeName("../compare/","../icon/compare.png",30,30,"menu_photo","showCompare(event)", "hideCompare(event)");
          HTML_DivEnd();
?>

<?php
          HTML_DivStart("menu_margin");
          HTML_AddLinkImageSizeName("../upload_photo/","../icon/add.png",30,30,"menu_photo","showUpload(event)", "hideUpload(event)");
          HTML_DivEnd();

          HTML_DivStart("menu_margin");
          HTML_AddLinkImageSizeName("../my_profile/","../icon/profile.png",30,30,"menu_photo","showProfile(event)", "hideProfile(event)");
          HTML_DivEnd();

          HTML_DivStart("menu_margin");
          HTML_AddLinkImageSizeName("../local_rank/","../icon/flag.png",30,30,"menu_photo","showLocal(event)", "hideLocal(event)");
          HTML_DivEnd();

          HTML_DivStart("menu_margin");
          HTML_AddLinkImageSizeName("../global_rank/","../icon/global.png",30,30,"menu_photo","showGlobal(event)", "hideGlobal(event)");
          HTML_DivEnd();

          HTML_DivStart("menu_margin");
          HTML_AddLinkImageSizeName("../messages/","../icon/message.png",30,30,"menu_photo","showQuery(event)", "hideQuery(event)");
          HTML_DivEnd();

          HTML_DivStart("menu_margin");
          HTML_AddLinkImageSizeName("../search/","../icon/search.png",30,30,"menu_photo","showSearch(event)", "hideSearch(event)");
          HTML_DivEnd();

          HTML_DivStart("menu_margin");
          HTML_AddLinkImageSizeName("../settings/","../icon/settings.png",30,30,"menu_photo","showSett(event)", "hideSett(event)");
          HTML_DivEnd();

          HTML_DivStart("menu_margin_logout");
          HTML_AddLinkImageSizeName("../bin/logout.php","../icon/logout.png",30,30,"menu_photo","showLogOut(event)", "hideLogOut(event)");
          HTML_DivEnd();

     HTML_DivEnd();
     HTML_ULEnd();
     HTML_DivEnd();
HTML_CenterEnd();


?>


         <div id="compare" 
              style="background-color: rgba(230,115,0,.0); font-size:10px; color:rgb(255,255,255); top:0px; left:50%; position: absolute; visibility: hidden; padding: 5px">
            <span style="font-weight: bold">Compare photos</span><br />
         </div>

         <div id="upload_js" 
              style="background-color: rgba(230,115,0,.0); font-size:10px; color:rgb(255,255,255); top:0px; left:50%; position: absolute; visibility: hidden; padding: 5px">
            <span style="font-weight: bold">Upload photo</span><br />
         </div>

        <div id="m_prof" 
              style="background-color: rgba(230,115,0,.0); font-size:10px; color:rgb(255,255,255); top:0px; left:50%; position: absolute; visibility: hidden; padding: 5px">
            <span style="font-weight: bold">My Profile</span><br />
         </div>

      <div id="g_rank" 
              style="background-color: rgba(230,115,0,.0); font-size:10px; color:rgb(255,255,255); top:0px; left:50%; position: absolute; visibility: hidden; padding: 5px">
            <span style="font-weight: bold">Global ranking</span><br />
         </div>

      <div id="l_rank" 
              style="background-color: rgba(230,115,0,.0); font-size:10px; color:rgb(255,255,255); top:0px; left:50%; position: absolute; visibility: hidden; padding: 5px">
            <span style="font-weight: bold">Local ranking</span><br />
         </div>

      <div id="query" 
              style="background-color: rgba(230,115,0,.0); font-size:10px; color:rgb(255,255,255); top:0px; left:50%; position: absolute; visibility: hidden; padding: 5px">
            <span style="font-weight: bold">Asks/Replys</span><br />
         </div>

      <div id="search" 
              style="background-color: rgba(230,115,0,.0); font-size:10px; color:rgb(255,255,255); top:0px; left:50%; position: absolute; visibility: hidden; padding: 5px">
            <span style="font-weight: bold">Search</span><br />
         </div>

      <div id="sett" 
              style="background-color: rgba(230,115,0,.0); font-size:10px; color:rgb(255,255,255); top:0px; left:50%; position: absolute; visibility: hidden; padding: 5px">
            <span style="font-weight: bold">Settings</span><br />
         </div>

      <div id="lo" 
              style="background-color: rgba(230,115,0,.0); font-size:10px; color:rgb(255,255,255); top:0px; left:50%; position: absolute; visibility: hidden; padding: 5px">
            <span style="font-weight: bold">Logout</span><br />
         </div>