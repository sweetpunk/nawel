<?php
/* Smarty version 3.1.29, created on 2016-11-12 14:53:50
  from "C:\wamp64\www\nawel\tpl\account.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58272cfe2d2aa0_05440805',
  'file_dependency' => 
  array (
    '521fce82f5faf6859f6093f05c7ff353fbaf8236' => 
    array (
      0 => 'C:\\wamp64\\www\\nawel\\tpl\\account.tpl',
      1 => 1478962417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58272cfe2d2aa0_05440805 ($_smarty_tpl) {
?>
<div class='list-content'>
	<div class='user-form'>
		<form action='save.php' method='POST'>
			<input type='hidden' name='user_infos' id='user_infos' value='1' />
			<div class='log-infos'>
				<div class='log-infos-label'>
					<div class='user-row'>
						<label for='login'>Nom d'utilisateur :</label>
					</div>
					<div class='user-row'>
						<label for='pwd'>Mot de passe :</label>
					</div>
					<div class='user-row'>
						<label>Confirmer le mot de passe :</label>
					</div>
				</div>
				<div class='log-infos-input'>
					<div class='user-row'>
						<input class='rounded-input' type='text' name='login' id='login' value='<?php echo $_smarty_tpl->tpl_vars['res']->value["login"];?>
' />
					</div>
					<div class='user-row'>
						<input class='rounded-input' type='password' name='pwd' id='pwd'/>
					</div>
					<div class='user-row'>
						<input class='rounded-input' type='password' name='confirmation' id='confirmation'/>
					</div>

				</div>
			</div>
			<div class='user-infos'>
				<div class='user-infos-label'>
					<div class='user-row'>
						<label for='email'>Email :</label>
					</div>
					<div class='user-row'>
						<label for='firstname'>Prénom :</label>
					</div>
					<div class='user-row'>
						<label for='lastname'>Nom :</label>
					</div>
				</div>
				<div class='user-infos-input'>
					<div class='user-row'>
						<input class='rounded-input' type='text' name='email' id='email' value='<?php echo $_smarty_tpl->tpl_vars['res']->value["email"];?>
'/>
					</div>
					<div class='user-row'>
						<input class='rounded-input' type='text' name='firstname' id='firstname' value='<?php echo $_smarty_tpl->tpl_vars['res']->value["first_name"];?>
'/>
					</div>
					<div class='user-row'>
						<input class='rounded-input' type='text' name='lastname' id='lastname' value='<?php echo $_smarty_tpl->tpl_vars['res']->value["last_name"];?>
'/>
					</div>
				</div>
			</div>
			<div class='user-action-box'>
				<input type='submit' class='btn btn-hidden' id='submit' value='sauvegarder les changements' />
				<input type='button' class='btn btn-success' id='validation-form' value='sauvegarder les changements' />
			</div>
		</form>
	</div>
</div><?php }
}
