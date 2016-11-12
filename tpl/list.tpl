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
		{foreach from=$res item=list}
			<div class='item'>
				<input type="checkbox" class='item-check' name='ck_{$list[0]}' id="{$list[0]}" {if $list[8] == 0} checked='checked' {if $list[10] != $uid} disabled{/if} {/if} /><label for="{$list[0]}"><span class="ui"></span></label>
				<div class='item-name'>
					{$list[2]}
				</div>
				<div class='item-img'>
					<a href='$list[5]'>
						<img src='{$list[4]}' />
					</a>
				</div>
				<div class='item-desc'>
					{$list[3]}
				</div>
				<div class='item-cost'>
					{$list[6]}{$list[7]}
				</div>
				<div class='item-taken'>
					Pris par : {$list[9]}
				</div>
				<input type='hidden' name='{$list[0]}' value='{$list[10]}' />
			</div>
		{/foreach}
	</div>
	<div class='action-box'>
		<input type='submit' class='btn btn-success' value='Sauvegarder les changements' />
	</div>
</form>