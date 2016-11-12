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
						<input class='rounded-input' type='text' name='login' id='login' value='{$res["login"]}' />
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
						<input class='rounded-input' type='text' name='email' id='email' value='{$res["email"]}'/>
					</div>
					<div class='user-row'>
						<input class='rounded-input' type='text' name='firstname' id='firstname' value='{$res["first_name"]}'/>
					</div>
					<div class='user-row'>
						<input class='rounded-input' type='text' name='lastname' id='lastname' value='{$res["last_name"]}'/>
					</div>
				</div>
			</div>
			<div class='user-action-box'>
				<input type='submit' class='btn btn-hidden' id='submit' value='sauvegarder les changements' />
				<input type='button' class='btn btn-success' id='validation-form' value='sauvegarder les changements' />
			</div>
		</form>
	</div>
</div>