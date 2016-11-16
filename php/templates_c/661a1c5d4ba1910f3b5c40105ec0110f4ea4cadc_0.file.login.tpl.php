<?php
/* Smarty version 3.1.29, created on 2016-11-14 13:55:05
  from "C:\wamp64\www\nawel\tpl\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5829c239c370e7_84980773',
  'file_dependency' => 
  array (
    '661a1c5d4ba1910f3b5c40105ec0110f4ea4cadc' => 
    array (
      0 => 'C:\\wamp64\\www\\nawel\\tpl\\login.tpl',
      1 => 1479062286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5829c239c370e7_84980773 ($_smarty_tpl) {
?>
<div id="main">
	<div id="log">
		<form action="" method="post">
			<label for="login">Nom d'utilisateur :</label>
			<input id="login" name="login" placeholder="Nom d'utilisateur" type="text">
			<label for="pwd">Mot de passe :</label>
			<input id="pwd" name="pwd" placeholder="**********" type="password">
			<input id="submit" name="submit" type="submit" value=" Login ">
		</form>
	</div>
</div><?php }
}
