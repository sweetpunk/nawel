<div class='list-content'>
	{foreach from=$res item=list}
		<div class='list-item'>
			<a href='./list.php?id={$list[0]}'>
				<div class='list-body'>
					<div class='list-name'>
						{$list[1]}
					</div>
					<div class='user-icon'>
					</div>
				</div>
			</a>
		</div>
	{/foreach}
</div>