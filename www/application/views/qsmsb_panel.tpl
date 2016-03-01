<body>
<center>
<div id="sheet" class="sheet" >
     <h2>Admin - panel <span id="second"></span></h2><br>
     <button id="action_alarm">Alarms</button>
     <button id="action_ranks">Ranks</button>
     <button id="action_traffic">Traffic</button>
     <button id="action_publicity">Publicity</button>
     <button id="action_tools">Tools</button>
     <button id="action_logs">Logs</button>
</div> <br>

<div id="alarms" class="alarms">
     <h2>Alarms </h2><br>
     <center>
     <table>
     <tr>
         <td><center>Name of alarm</td> <td><center>Status</td> <td><center>Set alarm</td> <td><center>Description</td>
     </tr>
     <tr>
         <td>MAIN ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_main" /> </td> <td><button id="action_alarm_main">SET</button> </td>
         <td>Alarm blocks all tools of user and logouts all users.</td>
     </tr>
     <tr>
         <td>COMPARE TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_comparetab"/> </td> <td><button id="action_alarm_comparetab">SET</button> </td>
         <td>Alarm blocks page of comapare (and compare test).</td>
     </tr>
     <tr>
         <td>UPLOAD TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_upload"/> </td> <td><button id="action_alarm_upload">SET</button> </td>
         <td>Alarm blocks page of upload.</td>
     </tr>
     <tr>
         <td>COMMENT TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_comment"/> </td> <td><button id="action_alarm_comment">SET</button> </td>
         <td>Alarm blocks add, delete, block and view. Field of comment is hidden.(my_profile,search webpage )</td>
     </tr>
     <tr>
         <td>DELIMG TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_delimg"/> </td> <td><button id="action_alarm_delimg">SET</button> </td>
         <td>Alarm blocks delete images from profile of user.</td>
     </tr>
     <tr>
         <td>LOCAL TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_local"/> </td> <td><button id="action_alarm_local">SET</button> </td>
         <td>Alarm blocks local ranking page.</td>
     </tr>
     <tr>
         <td>GLOBAL TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_global"/> </td> <td><button id="action_alarm_global">SET</button> </td>
         <td>Alarm blocks global ranking page.</td>
     </tr>
     <tr>
         <td>ASK/REPLY TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_ask"/> </td> <td><button id="action_alarm_ask">SET</button> </td>
         <td>Alarm blocks messages page.</td>
     </tr>
     <tr>
         <td>QUERY TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_query"/> </td> <td><button id="action_alarm_query">SET</button> </td>
         <td>Alarm blocks ask about contact.</td>
     </tr>
     <tr>
         <td>SEARCH TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_search"/> </td> <td><button id="action_alarm_search">SET</button> </td>
         <td>Alarm blocks search page.</td>
     </tr>
     <tr>
         <td>SETTINGS TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_settings"/> </td> <td><button id="action_alarm_settings">SET</button> </td>
         <td>Alarm blocks settings page.</td>
     </tr>
     <tr>
         <td>LOGIN TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_login"/> </td> <td><button id="action_alarm_login">SET</button> </td>
         <td>Alarm blocks login panel (main webpage).</td>
     </tr>
     <tr>
         <td>REGISTER TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_register"/> </td> <td><button id="action_alarm_register">SET</button> </td>
         <td>Alarm blocks register panel (main webpage).</td>
     </tr>
     <tr>
         <td>REPORT TAB ALARM</td> <td> <center><img src=../application/icon/light_bulb_off.ico id="alarm_report"/> </td> <td><button id="action_alarm_report">SET</button> </td>
         <td>Alarm blocks add report.</td>
     </tr>
     </table>
</div>

<div id="ranks" class="ranks">
     <h2>Ranks </h2><br>
     <center>
         <h3>Update Global Ranking</h3>
         <h6>Last update:{$timeglobal}</h6>
         <div id="loader1" class="loader1">0%</div><br>
         <button id="action_updateGlobal">Update</button>
         <br>
         
         <h3>Update Local Ranking</h3>
         <h6>Last update: {$timelocal}</h6>
         <div id="loader2" class="loader2">0%</div><br>
         <button id="action_updateLocal">Update</button>
         <br><br><br>
     </center>
</div>
         
<div id="traffic" class="traffic">
     <h2>Traffic generator </h2>
     <center>
     </center>
</div>

<div id="publicity" class="publicity">
     <h2>Publicity </h2>
</div>

<div id="tools" class="tools">
     <h2>Tools </h2>
     <center>
         <strong><h3>Versions of engines list</h3></strong>
         
         <table>
             <tr>
                 <td> <strong><font size="1px" color="#FFCC66">Name</td>
                 <td> <strong><font size="1px" color="#FFFF66">Version</td>
                 <td> <strong><font size="1px" color="#FFCC66">Create date</td>
                 <td> <strong><font size="1px" color="#FFFF66">Size</td>
                 <td> <strong><font size="1px" color="#FFCC66">LOC</td>
                 <td> <strong><font size="1px" color="#FFFF66">Class</td>
                 <td> <strong><font size="1px" color="#FFCC66">Interfaces</td>
                 <td> <strong><font size="1px" color="#FFFF66">Methods</td>
                 <td> <strong><font size="1px" color="#FFCC66">Resurs</td>
                 <td> <strong><font size="1px" color="#FFFF66">Status</td>
             </tr>
             
             {section name=i loop=$engine}
                 <tr>
                     <td> <font size="1px" color="#FFCC66">{$engine[i].name}</td>
                     <td> <font size="1px" color="#FFFF66">{$engine[i].version}</td>
                     <td> <font size="1px" color="#FFCC66">{$engine[i].date}</td>
                     <td> <font size="1px" color="#FFFF66">{$engine[i].size}</td>
                     <td> <font size="1px" color="#FFCC66">{$engine[i].loc}</td>
                     <td> <font size="1px" color="#FFFF66">{$engine[i].class}</td>
                     <td> <font size="1px" color="#FFCC66">{$engine[i].interfaces}</td>
                     <td> <font size="1px" color="#FFFF66">{$engine[i].methods}</td>
                     <td> <font size="1px" color="#FFCC66">{$engine[i].resurs}</td>
                     <td> <font size="1px" colorFFFF66">{if $engine[i].status == 0}<input type="checkbox"  disabled="disabled" /> {/if}
                                                           {if $engine[i].status == 1}<input type="checkbox" checked="checked" disabled="disabled" /> {/if}
                                                           </td>
                     
                 </tr>
             {/section}
             
             <tr>
                 <td> <strong><font size="1px" color="#FFCC66">Name</td>
                 <td> <strong><font size="1px" color="#FFFF66">Version</td>
                 <td> <strong><font size="1px" color="#FFCC66">Create date</td>
                 <td> <strong><font size="1px" color="#FFFF66">Size</td>
                 <td> <strong><font size="1px" color="#FFCC66">LOC</td>
                 <td> <strong><font size="1px" color="#FFFF66">Class</td>
                 <td> <strong><font size="1px" color="#FFCC66">Interfaces</td>
                 <td> <strong><font size="1px" color="#FFFF66">Methods</td>
                 <td> <strong><font size="1px" color="#FFCC66">Resurs</td>
                 <td> <strong><font size="1px" color="#FFFF66">Status</td>
             </tr>
             
         </table>
             <button id="add_engine">ADD</button>
             
             <strong><h3>Interior portal</h3></strong>
             
             <table>
                <tr>
                 <td> <strong><font size="1px" color="#FFCC66">Atribute</td>
                 <td> <strong><font size="1px" color="#FFFF66">PHP</td>
                 <td> <strong><font size="1px" color="#FFCC66">JavaScript</td>
                 <td> <strong><font size="1px" color="#FFFF66">CSS</td>
                 <td> <strong><font size="1px" color="#FFCC66">TPL</td>
                 <td> <strong><font size="1px" color="#FFFF66">Sum</td>
                </tr> 
                
                <tr>
                 <td> <strong><font size="1px" color="#FFCC66">Line of code</td>
                 <td> <strong><font size="1px" color="#FFFF66">{$interiorPHP.loc}</td>
                 <td> <strong><font size="1px" color="#FFCC66">{$interiorJS.loc}</td>
                 <td> <strong><font size="1px" color="#FFFF66">{$interiorCSS.loc}</td>
                 <td> <strong><font size="1px" color="#FFCC66">{$interiorTPL.loc}</td>
                 <td> <strong><font size="1px" color="#FFFF66">{$interiorsum.loc}</td>
                </tr> 
                
                <tr>
                 <td> <strong><font size="1px" color="#FFCC66">Size</td>
                 <td> <strong><font size="1px" color="#FFFF66">{$interiorPHP.size}</td>
                 <td> <strong><font size="1px" color="#FFCC66">{$interiorJS.size}</td>
                 <td> <strong><font size="1px" color="#FFFF66">{$interiorCSS.size}</td>
                 <td> <strong><font size="1px" color="#FFCC66">{$interiorTPL.size}</td>
                 <td> <strong><font size="1px" color="#FFFF66">{$interiorsum.size}</td>
                </tr> 
                
                <tr>
                 <td> <strong><font size="1px" color="#FFCC66">Pocent</td>
                 <td> <strong><font size="1px" color="#FFFF66">{$interiorPHP.prc} %</td>
                 <td> <strong><font size="1px" color="#FFCC66">{$interiorJS.prc} %</td>
                 <td> <strong><font size="1px" color="#FFFF66">{$interiorCSS.prc} %</td>
                 <td> <strong><font size="1px" color="#FFCC66">{$interiorTPL.prc} %</td>
                 <td> <strong><font size="1px" color="#FFFF66">100 %</td>
                </tr> 
                 
             </table>
                 
                 <strong><h3>Report System Error Log (SEL)</h3></strong>
                 <img src="../application/images/report_sel.png" />
                 <br>
                 
     </center>
</div>

         
<div id="logs" class="logs">
     <h2>Logs </h2>
     <center>
     <table>
         <tr>
             <td><center><h3>ID</h3></center></td> 
             <td><center><h3>CODE</h3></center></td> 
             <td><center><h3>SOURCE</h3></center></td> 
             <td><center><h3>DESCRIPTION</h3></center></td> 
             <td><center><h3>IP</h3></center></td> 
             <td><center><h3>CANCEL</h3></center></td> 
             <td><center><h3>BLOCK IP</h3></center></td>
         </tr>
    
        {section name=i loop=$log}
            <tr>
                <td bgcolor={if $log[i].piority == 3}'#FF3200'{/if}{if $log[i].piority == 2}'#FFC800'{/if}{if $log[i].piority == 1}'#DAA520'{/if}>
                    <font size="1px"><div id="logid{$smarty.section.i.iteration}">{$log[i].id}</div></td> 
                <td bgcolor={if $log[i].piority == 3}'#FF3200'{/if}{if $log[i].piority == 2}'#FFC800'{/if}{if $log[i].piority == 1}'#DAA520'{/if}>
                    <font size="1px">{$log[i].code}</td>
                <td bgcolor={if $log[i].piority == 3}'#FF3200'{/if}{if $log[i].piority == 2}'#FFC800'{/if}{if $log[i].piority == 1}'#DAA520'{/if}>
                    <font size="1px">{$log[i].source}</td>
                <td bgcolor={if $log[i].piority == 3}'#FF3200'{/if}{if $log[i].piority == 2}'#FFC800'{/if}{if $log[i].piority == 1}'#DAA520'{/if}>
                    <font size="1px">{$log[i].desc}</td>
                <td bgcolor={if $log[i].piority == 3}'#FF3200'{/if}{if $log[i].piority == 2}'#FFC800'{/if}{if $log[i].piority == 1}'#DAA520'{/if}>
                    <font size="1px">{$log[i].ip}</td>
                <td bgcolor={if $log[i].piority == 3}'#FF3200'{/if}{if $log[i].piority == 2}'#FFC800'{/if}{if $log[i].piority == 1}'#DAA520'{/if}>
                    <button id="cancel{$smarty.section.i.iteration}">CANCEL</button></td> 
                <td bgcolor={if $log[i].piority == 3}'#FF3200'{/if}{if $log[i].piority == 2}'#FFC800'{/if}{if $log[i].piority == 1}'#DAA520'{/if}>
                    <button id="block{$smarty.section.i.iteration}">BLOCK</button></td>
         </tr>
        {/section}
        
        
        <tr>
            <td><center><h3><font color='#E67300'>sfddfrgg</h3></center></td> 
             <td><center><h3><font color='#E67300'>dfgfgfgf</h3></center></td> 
             <td><center><h3><font color='#E67300'>dhbfjfbhdfb rkf frfjdgbfdhgb r f fdg</h3></center></td> 
             <td><center><h3><font color='#E67300'>dhbfjfbhdfb rkf frfjdgbfdhgb r f fdg
                             dhbfjfbhdfb rkf frfjdgbfdhgb r f fdg
                             dhbfjfbhdfb rkf frfjdgbfdhgb r f fdg
                             dhbfjfbhdfb rkf frfjdgbfdhgb r f fdg
                             dhbfjfbhdfb rkf frfjdgbfdhgb r f fdg</h3></center></td> 
             <td><center><h3><font color='#E67300'>jfgnfjgnjgntjtt</h3></center></td> 
             <td><center><h3><font color='#E67300'>tthhttt</h3></center></td> 
             <td><center><h3><font color='#E67300'>fhtrhtt</h3></center></td>
         </tr>
        </table>
     </center>
</div>