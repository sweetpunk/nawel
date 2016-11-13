<?php
/* Smarty version 3.1.29, created on 2016-11-13 14:16:13
  from "C:\wamp64\www\nawel\tpl\list.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_582875adae7731_87645001',
  'file_dependency' => 
  array (
    'd7907e486f3593433f7f922cc1253e16ecf09d68' => 
    array (
      0 => 'C:\\wamp64\\www\\nawel\\tpl\\list.tpl',
      1 => 1479044794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582875adae7731_87645001 ($_smarty_tpl) {
?>
<form action='save.php' method='POST'>
	<input type='hidden' name='list_infos' id='user_infos' value='1' />
	<div class='list-content'>
		<div class='item'>
			<div class="header header-item-check">Disponible ?</div>
			<div class="header header-item-name">Nom</div>
			<div class="header header-item-img">Image</div>
			<div class="header header-item-desc">Descriptrion</div>
			<div class="header header-item-cost">Prix</div>
		</div>
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
			<div class='item <?php if ($_smarty_tpl->tpl_vars['list']->value[8] == 0 && $_smarty_tpl->tpl_vars['list']->value[10] != $_smarty_tpl->tpl_vars['uid']->value) {?>item-disabled<?php }?>'>
				<input type="checkbox" class='item-check' name='ck_<?php echo $_smarty_tpl->tpl_vars['list']->value[0];?>
' id="<?php echo $_smarty_tpl->tpl_vars['list']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['list']->value[8] == 0) {?> checked='checked' <?php if ($_smarty_tpl->tpl_vars['list']->value[10] != $_smarty_tpl->tpl_vars['uid']->value) {?> disabled<?php }?> <?php }?> /><label for="<?php echo $_smarty_tpl->tpl_vars['list']->value[0];?>
"><span class="ui"></span></label>
				<div class='item-name'>
					<?php echo $_smarty_tpl->tpl_vars['list']->value[2];?>

				</div>
				<div class='item-img'>
					<a href='$list[5]'>
						<img src='<?php echo $_smarty_tpl->tpl_vars['list']->value[4];?>
' />
					</a>
				</div>
				<div class='item-desc'>
					<?php echo $_smarty_tpl->tpl_vars['list']->value[3];?>

				</div>
				<div class='item-cost'>
					<?php echo $_smarty_tpl->tpl_vars['list']->value[6];
echo $_smarty_tpl->tpl_vars['list']->value[7];?>

				</div>
				<div class='item-taken'>
					Pris par : <?php echo $_smarty_tpl->tpl_vars['list']->value[9];?>

				</div>
				<input type='hidden' name='<?php echo $_smarty_tpl->tpl_vars['list']->value[0];?>
' value='<?php echo $_smarty_tpl->tpl_vars['list']->value[10];?>
' />
				<input type='hidden' id='file' value='<?php echo $_smarty_tpl->tpl_vars['list']->value[11];?>
' />
				<input type='hidden' id='list_uid' value='<?php echo $_smarty_tpl->tpl_vars['list_uid']->value;?>
' />
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
		<input type='button' class='my-btn btn btn-primary' id='download' value='Télécharger la liste' />
		<input type='submit' class='my-btn btn btn-success' value='Sauvegarder les changements' />
		<input type='button' class='my-btn btn btn-danger' id='back' value='Retour' />
	</div>
</form><?php }
}
