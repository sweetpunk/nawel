<?php
/* Smarty version 3.1.29, created on 2016-11-11 13:22:41
  from "C:\wamp64\www\nawel\tpl\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5825c621ad6b81_14946867',
  'file_dependency' => 
  array (
    'f94f145b74a7407ea079d95ff0900b17afdfa733' => 
    array (
      0 => 'C:\\wamp64\\www\\nawel\\tpl\\home.tpl',
      1 => 1478870560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5825c621ad6b81_14946867 ($_smarty_tpl) {
?>
<div style="margin: 0 auto;">
    <h1>Hello world !</h1>
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
	<div class='list_item'>
		<a href='./list.php?id=<?php echo $_smarty_tpl->tpl_vars['list']->value[0];?>
'>
			<div class='list_name'>
				<?php echo $_smarty_tpl->tpl_vars['list']->value[1];?>

			</div>
		</a>
	</div>
<?php
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved_local_item;
}
if ($__foreach_list_0_saved_item) {
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved_item;
}
}
}
