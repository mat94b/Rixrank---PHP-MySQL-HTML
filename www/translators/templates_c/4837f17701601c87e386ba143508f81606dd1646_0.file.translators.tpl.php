<?php /* Smarty version 3.1.24, created on 2015-07-13 06:00:47
         compiled from "../application/views/translators.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:183996701355a337ef63cea7_94055213%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4837f17701601c87e386ba143508f81606dd1646' => 
    array (
      0 => '../application/views/translators.tpl',
      1 => 1436759755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183996701355a337ef63cea7_94055213',
  'variables' => 
  array (
    'engine' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a337ef8a9d10_23170101',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a337ef8a9d10_23170101')) {
function content_55a337ef8a9d10_23170101 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '183996701355a337ef63cea7_94055213';
?>
<body>
<center>
<div id="id_login" class="login" >
<h2> Rixrank - Tranlsator login panel</h2>
<input  id="nick" type="text" name="nick" value=""> <br><br>
<input  id="pass" type="password" name="pass" value=""> <br> <br>
<button id="action_login" name="login">Log in</button> <br>
<h5>
Rixrank.com &copy 2015 (beta) <br>
version <?php echo $_smarty_tpl->tpl_vars['engine']->value['version'];?>

</h5>
</div>

</center>
</body><?php }
}
?>