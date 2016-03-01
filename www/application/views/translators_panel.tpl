<body>
<center>
<div id="sheet" class="sheet" >
    <h2>Hi, translator !  <img src="../flag/{$country.number}.ico" width="40" height="20" /></h2><br>
     <button id="action_translate">Translate</button>
     <button id="action_edit">Edit</button>
     <button id="action_settings">Settings</button>
     <form method="POST" ><button name="logout" value="true" type="submit" id="action_logout">Logout</button></form>
</div> <br>

<div id="translate" class="mainly">
     <h2>Translate </h2>
     <center>
         <strong>Short instruction</strong><br>
         Write translation in third column (Translated text).<br>
         Choose type, Everybody can edit (when you aren't sure translation and you need help) <br>
         Only you can edit (when translation is correct and you want edit, recommended type)<br>
         Nobody can edit (when you are sure that translation is correct) <br>
         <font color='yellow'>Warning !! You must save every translated text, otherwise data will lost.<br>
         You can't use symbols like ' and " .</font><br><br>
         <table>
             <tr>
                 <td><center><strong>Edit Id</strong></center></td>
                 <td><center><strong>Text</strong></center></td>
                 <td><center><strong>Translated text</strong></center></td>
                 <td><center><strong>Author</strong></center></td>
                 <td><center><strong>Type</strong></center></td>
                 <td><center><strong>Date last edit</strong></center></td>
                 <td><center><strong>Save</strong></center></td>
             </tr>
             {section name=i loop=$translate}
                 <tr>
                     <td><span id="{$translate[i].id}"></span></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                 </tr>
                 <tr><form method="POST" name="{$translate[i].id}" >
                     <td><center><h7><input type="hidden" name="trans_id" value="{$translate[i].id}" />{$translate[i].id}</h7></center></td> 
                     <td><h7>
                     <textarea name="text" rows="3" cols="30" readonly="readonly" warp='virtual'>{$translate[i].text}</textarea>
                     </h7></td>
                     <td><h7>
                     <textarea name="trans" rows="3" cols="30" {if $translate[i].type == 2}disabled="disabled" {/if} warp='virtual'>{$translate[i].trans}</textarea>
                     </h7></td>
                     <td><center><h7>{$translate[i].author}</h7></center></td> 
                     <td><center><h7>
                         {if $translate[i].type == 0}
                         <select name="type">
                            <option>Everybody can edit</option>
                            <option>Only you can edit</option>
                            <option>Nobody can edit</option>
                         </select>    
                         {/if}
                         
                         {if $translate[i].type == 1}
                         <select name="type">
                            <option>Only you can edit</option>
                            <option>Everybody can edit</option>
                            <option>Nobody can edit</option>
                         </select>    
                         {/if}
                         
                         {if $translate[i].type == 2}
                         <select name="type" disabled="disabled">
                            <option>Nobody can edit</option>
                         </select>     
                         {/if}
                         
                         </h7></center></td>
                     <td><center><h7>{$translate[i].date}</h7></center></td>
                     <td><center>{if $translate[i].type != 2}<button type="submit" id="save_translator" >SAVE</button>{/if}</center></td>
                 </form>
                 </tr>  
             {/section}
         </table>
     </center>
</div>

<div id="edit" class="mainly">
     <h2>List of edit & stats </h2>
     <center>
         <table>
             <tr>
                 <td><h6>Edits: </h6></td>
                 <td><h6>{$edit.all}</h6></td>
             </tr>
             <tr>
                 <td><h6>New translations: </h6></td>
                 <td><h6> {$edit.newtran}</h6> </td>
             </tr>
             <tr>
                 <td><h6>Translations (Everybody can edit): </h6></td>
                 <td><h6> {$edit.everybody}</h6> </td>
             </tr>
             <tr>
                 <td><h6>Translations (Only you can edit): </h6></td>
                 <td><h6> {$edit.only}</h6> </td>
             </tr>
             <tr>
                 <td><h6>Translations (Nobody can edit): </h6></td>
                 <td><h6> {$edit.nobody}</h6> </td>
             </tr>
         </table>
         <br><br>
         <table>
             <tr>
                 <td><center><h6>Edit ID </h6></td>
                 <td><center><h6>Type of edition</h6> </td>
                 <td><center><h6>Date</h6> </td>
             </tr>
             {$edit.table}
         </table>
         
     </center>
</div>

<div id="settings" class="mainly">
     <h2>Settings </h2>
     <center>
         <h3>
         We thank everyone for cooperate.<br>
         We enjoy that the number of contributors is increasing sharply day by day. <br>
         Greetings to you all, team Rixrank.<br></h3>
         <br><br>
         <input id="inform_new_text" type="checkbox" name="inform_new_text" value="val" {if $set.newtranslates == 1}checked="checked"{/if} />
         <strong>We inform you when will have a new texts for translation. </strong>
         <br>
         <input id="name_footer" type="checkbox" name="name_footer" value="val" {if $set.footer == 1}checked="checked"{/if} />
         <strong>Your name/nick/signature will be visible on 'About us' of website. </strong>
         <br>
         <strong>Signature: </strong> <input id="signature" class="signature" type="text" name="signature" value="{$set.signature}" />
         <br><br>
         <strong><div class="result"></div></strong><br>
         <button id="action_save_settings">SAVE</button>
     </center>
</div>