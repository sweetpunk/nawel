<div style="margin: 0 auto;">
    <h1>Hello world !</h1>
</div>

{foreach from=$res item=list}
	<div class='list_item'>
		<a href='./list.php?id={$list[0]}'>
			<div class='list_name'>
				{$list[1]}
			</div>
		</a>
	</div>
{/foreach}