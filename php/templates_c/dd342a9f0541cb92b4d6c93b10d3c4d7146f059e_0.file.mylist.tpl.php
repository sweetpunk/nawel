<?php
/* Smarty version 3.1.29, created on 2016-11-13 14:48:34
  from "C:\wamp64\www\nawel\tpl\mylist.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58287d424954c9_49425229',
  'file_dependency' => 
  array (
    'dd342a9f0541cb92b4d6c93b10d3c4d7146f059e' => 
    array (
      0 => 'C:\\wamp64\\www\\nawel\\tpl\\mylist.tpl',
      1 => 1479048512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58287d424954c9_49425229 ($_smarty_tpl) {
?>
<form action='save.php' method='POST' accept-charset="UTF-8">
	<input type='hidden' name='mylist' value='<?php echo $_smarty_tpl->tpl_vars['listId']->value;?>
' />
	<div id='list'>
	<?php
$_from = $_smarty_tpl->tpl_vars['res']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_list_0_saved_item = isset($_smarty_tpl->tpl_vars['list']) ? $_smarty_tpl->tpl_vars['list'] : false;
$_smarty_tpl->tpl_vars['list'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['list']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
$__foreach_list_0_saved_local_item = $_smarty_tpl->tpl_vars['list'];
?>
		<div class='item'>
			<input type='hidden' id='id' name='id[]' value='<?php echo $_smarty_tpl->tpl_vars['list']->value[0];?>
' />
			<input type='hidden' class='index' name='index[]' value='' />
			<div class='infos-block'>
				<div class='my-item-name'>
					<label>Nom : </label>
					<input class='rounded-input long-input' name='name[]' type='text' value='<?php echo $_smarty_tpl->tpl_vars['list']->value[2];?>
' />
				</div>
				<div class='my-item-img'>
					<label>Image : </label>
					<input class='rounded-input long-input' name='image[]' type='text' value='<?php echo $_smarty_tpl->tpl_vars['list']->value[4];?>
' />
				</div>
				<div class='my-item-link'>
					<label>Lien : </label>
					<input class='rounded-input long-input' name='link[]' type='text' value='<?php echo $_smarty_tpl->tpl_vars['list']->value[5];?>
' />
				</div>
			</div>
			<div class='my-item-desc'>
				<textarea class='rounded-input' name='description[]' cols='80' rows='5'><?php echo $_smarty_tpl->tpl_vars['list']->value[3];?>
</textarea>
			</div>
			<div class='my-item-cost'>
				<label>Prix :</label>
				<input class='rounded-input' name='price[]' type='text' value='<?php echo $_smarty_tpl->tpl_vars['list']->value[6];?>
' />
				<select class='rounded-input' name='currency[]'>
					<option value='EUR'>€</option>
					<option value='USD'>$</option>
				</select>
			</div>
			<input type='button' class='btn btn-danger remove-btn' value="Supprimer" />
		</div>
	<?php
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved_local_item;
}
if ($__foreach_list_0_saved_item) {
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved_item;
}
?>
	</div>
	<div class='action-box'>
		<input type='button' class='my-btn btn btn-primary' id='add' value='Ajouter un élément' />
		<input type='submit' class='my-btn btn btn-success' value='Sauvegarder les changements' />
		<input type='button' class='my-btn btn btn-danger' id='back' value='Retour' />
	</div>
</form><?php }
}
