<?php
/* Smarty version 3.1.29, created on 2016-11-11 14:09:21
  from "C:\wamp64\www\nawel\tpl\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5825d1117503f9_74300742',
  'file_dependency' => 
  array (
    'f94f145b74a7407ea079d95ff0900b17afdfa733' => 
    array (
      0 => 'C:\\wamp64\\www\\nawel\\tpl\\home.tpl',
      1 => 1478873359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5825d1117503f9_74300742 ($_smarty_tpl) {
?>
<div class='list-content'>
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
		<div class='list-item'>
			<a href='./list.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[0];?>
'>
				<div class='list-body'>
					<div class='list-name'>
						<?php echo $_smarty_tpl->tpl_vars['list']->value[1];?>

					</div>
					<div class='user-icon'>
					</div>
				</div>
			</a>
		</div>
	<?php
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved_local_item;
}
if ($__foreach_list_0_saved_item) {
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved_item;
}
?>
</div><?php }
}
