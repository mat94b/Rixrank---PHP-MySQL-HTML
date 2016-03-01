<?php /* Smarty version 3.1.24, created on 2015-07-13 06:37:51
         compiled from "../application/views/translators_panel.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:152936775955a3409f38c594_93738851%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ce8366a633b91ec8b8f30b552dc73d70ba6b00' => 
    array (
      0 => '../application/views/translators_panel.tpl',
      1 => 1436762187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152936775955a3409f38c594_93738851',
  'variables' => 
  array (
    'country' => 0,
    'translate' => 0,
    'edit' => 0,
    'set' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a3409f4ce451_55648951',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a3409f4ce451_55648951')) {
function content_55a3409f4ce451_55648951 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '152936775955a3409f38c594_93738851';
?>
<body>
<center>
<div id="sheet" class="sheet" >
    <h2>Hi, translator !  <img src="../flag/<?php echo $_smarty_tpl->tpl_vars['country']->value['number'];?>
.ico" width="40" height="20" /></h2><br>
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
             <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['translate']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                 <tr>
                     <td><span id="<?php echo $_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"></span></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                 </tr>
                 <tr><form method="POST" name="<?php echo $_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" >
                     <td><center><h7><input type="hidden" name="trans_id" value="<?php echo $_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
</h7></center></td> 
                     <td><h7>
                     <textarea name="text" rows="3" cols="30" readonly="readonly" warp='virtual'><?php echo $_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['text'];?>
</textarea>
                     </h7></td>
                     <td><h7>
                     <textarea name="trans" rows="3" cols="30" <?php if ($_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'] == 2) {?>disabled="disabled" <?php }?> warp='virtual'><?php echo $_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['trans'];?>
</textarea>
                     </h7></td>
                     <td><center><h7><?php echo $_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['author'];?>
</h7></center></td> 
                     <td><center><h7>
                         <?php if ($_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'] == 0) {?>
                         <select name="type">
                            <option>Everybody can edit</option>
                            <option>Only you can edit</option>
                            <option>Nobody can edit</option>
                         </select>    
                         <?php }?>
                         
                         <?php if ($_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'] == 1) {?>
                         <select name="type">
                            <option>Only you can edit</option>
                            <option>Everybody can edit</option>
                            <option>Nobody can edit</option>
                         </select>    
                         <?php }?>
                         
                         <?php if ($_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'] == 2) {?>
                         <select name="type" disabled="disabled">
                            <option>Nobody can edit</option>
                         </select>     
                         <?php }?>
                         
                         </h7></center></td>
                     <td><center><h7><?php echo $_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date'];?>
</h7></center></td>
                     <td><center><?php if ($_smarty_tpl->tpl_vars['translate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'] != 2) {?><button type="submit" id="save_translator" >SAVE</button><?php }?></center></td>
                 </form>
                 </tr>  
             <?php endfor; endif; ?>
         </table>
     </center>
</div>

<div id="edit" class="mainly">
     <h2>List of edit & stats </h2>
     <center>
         <table>
             <tr>
                 <td><h6>Edits: </h6></td>
                 <td><h6><?php echo $_smarty_tpl->tpl_vars['edit']->value['all'];?>
</h6></td>
             </tr>
             <tr>
                 <td><h6>New translations: </h6></td>
                 <td><h6> <?php echo $_smarty_tpl->tpl_vars['edit']->value['newtran'];?>
</h6> </td>
             </tr>
             <tr>
                 <td><h6>Translations (Everybody can edit): </h6></td>
                 <td><h6> <?php echo $_smarty_tpl->tpl_vars['edit']->value['everybody'];?>
</h6> </td>
             </tr>
             <tr>
                 <td><h6>Translations (Only you can edit): </h6></td>
                 <td><h6> <?php echo $_smarty_tpl->tpl_vars['edit']->value['only'];?>
</h6> </td>
             </tr>
             <tr>
                 <td><h6>Translations (Nobody can edit): </h6></td>
                 <td><h6> <?php echo $_smarty_tpl->tpl_vars['edit']->value['nobody'];?>
</h6> </td>
             </tr>
         </table>
         <br><br>
         <table>
             <tr>
                 <td><center><h6>Edit ID </h6></td>
                 <td><center><h6>Type of edition</h6> </td>
                 <td><center><h6>Date</h6> </td>
             </tr>
             <?php echo $_smarty_tpl->tpl_vars['edit']->value['table'];?>

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
         <input id="inform_new_text" type="checkbox" name="inform_new_text" value="val" <?php if ($_smarty_tpl->tpl_vars['set']->value['newtranslates'] == 1) {?>checked="checked"<?php }?> />
         <strong>We inform you when will have a new texts for translation. </strong>
         <br>
         <input id="name_footer" type="checkbox" name="name_footer" value="val" <?php if ($_smarty_tpl->tpl_vars['set']->value['footer'] == 1) {?>checked="checked"<?php }?> />
         <strong>Your name/nick/signature will be visible on 'About us' of website. </strong>
         <br>
         <strong>Signature: </strong> <input id="signature" class="signature" type="text" name="signature" value="<?php echo $_smarty_tpl->tpl_vars['set']->value['signature'];?>
" />
         <br><br>
         <strong><div class="result"></div></strong><br>
         <button id="action_save_settings">SAVE</button>
     </center>
</div><?php }
}
?>