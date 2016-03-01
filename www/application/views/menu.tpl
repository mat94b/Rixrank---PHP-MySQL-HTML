<body>
<center>
   <div class="top"> 
       <ul>
           <div class="menu_text">
               {$menu.user}, join the fun!
           </div>
           
           <div class=menu_right>
               <div class=menu_margin> 
                   <a href='../compare'/>
                   <img src='../icon/compare.png' width='30' height='30' name='menu_photo' onmouseover='showCompare(event)' onmouseout='hideCompare(event)' />
                   </a>
               </div>
               <div class=menu_margin> 
                   <a href=../upload_photo/>
                   <img src=../icon/add.png width=30 height=30 name='menu_photo' onmouseover='showUpload(event)' onmouseout='hideUpload(event)' />
                   </a>
               </div>
               <div class=menu_margin> 
                   <a href=../my_profile/>
                   <img src=../icon/profile.png width=30 height=30 name='menu_photo' onmouseover='showProfile(event)' onmouseout='hideProfile(event)' />
                   </a>
               </div>
               <div class=menu_margin> 
                   <a href=../local_rank/><img src=../icon/flag.png width=30 height=30 name='menu_photo' onmouseover='showLocal(event)' onmouseout='hideLocal(event)' />
                   </a>
               </div>
               <div class=menu_margin> 
                   <a href=../global_rank/>
                   <img src=../icon/global.png width=30 height=30 name='menu_photo' onmouseover='showGlobal(event)' onmouseout='hideGlobal(event)' />
                   </a>
               </div>
               <div class=menu_margin> 
                   <a href=../messages/>
                   <img src=../icon/message.png width=30 height=30 name='menu_photo' onmouseover='showQuery(event)' onmouseout='hideQuery(event)' />
                   </a>
               </div>
               <div class=menu_margin> 
                   <a href=../search/>
                   <img src=../icon/search.png width=30 height=30 name='menu_photo' onmouseover='showSearch(event)' onmouseout='hideSearch(event)' />
                   </a>
               </div>
               <div class=menu_margin> 
                   <a href=../settings/>
                   <img src=../icon/settings.png width=30 height=30 name='menu_photo' onmouseover='showSett(event)' onmouseout='hideSett(event)' />
                   </a>
               </div>
               <div class=menu_margin_logout> 
                   <a href=../bin/logout.php>
                   <img src=../icon/logout.png width=30 height=30 name='menu_photo' onmouseover='showLogOut(event)' onmouseout='hideLogOut(event)' />
                   </a>
               </div>
           </div>
           
       </ul>
   </div>
    
</center>


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
           